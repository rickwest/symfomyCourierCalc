<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Fee;
use AppBundle\Form\Model\QuoteFormModel;
use AppBundle\Form\Type\QuoteType;
use AppBundle\Repository\FeeTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Quote controller.
 *
 * @Route("quote")
 */
class QuoteController extends Controller {

    public function getQuoteCreator() {
        return $this->get('quote_creator');
    }

    public function getGoogleApi() {
        return $this->get('google_direction_api');
    }

    /**
     * @Route("/new", name="quote_new")
     */
    public function newQuoteAction(Request $request) {
        $formModel = new QuoteFormModel();

        $form = $this->createForm(QuoteType::class, $formModel);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $formModel = $form->getData();
            $origin = $formModel->getStartLocation();
            $destination = $formModel->getFinishLocation();

            list($route, $polyline) = $this->getGoogleApi()->getRouteDetails($origin, $destination);

            $miles = $this->getQuoteCreator()->convertMetersToMiles($route['distance']['value']);

            $fees = $this->getDoctrine()->getManager()
                ->getRepository('AppBundle:Fee')
                ->findBy([
                    'feeScale' => $formModel->getFeeScale(),
                    'vehicleType' => $formModel->getVehicleType()
                    ]);

            if (!$fees) {
                //add flash message and redirect to show page;
            }

            $total = [
                'price' => 0,
                'driverCost' => 0
            ];
            foreach ($fees as $fee) {
                /** @var Fee $fee */
                //for now we are only handling per mile fee scales
                if ($fee->getFeeType()->getId() === FeeTypeRepository::PER_MILE) {
                    $total['price'] += ($fee->getPrice() * $miles);
                    $total['driverCost'] += ($fee->getDriverCost() * $miles);
                }
            }

            if ($total['price'] !== 0) {
                $total['margin'] = ($total['price'] - $total['driverCost']) / $total['price'];
            }

            $vars = [
                'origin' => $origin,
                'destination' => $destination,
                'distance' => $miles.' miles',
                'total' => $total,
                'route' => $route,
                'polyline' => $polyline
            ];

            return $this->render('quote/quote.html.twig', $vars);
        }

        $vars['form'] = $form->createView();

        return $this->render('quote/newQuote.html.twig', $vars);
    }

    /**
     * @Route("/", name="quote_index")
     */
    public function indexAction() {
        return $this->render('default/quote.html.twig');

    }

    /**
     * @Route("/{id}/edit", name="quote_edit")
     */
    public function editQuoteAction() {
        return $this->render('default/quote.html.twig');
    }

    /**
     * @Route("/{id}", name="quote_show")
     */
    public function showQuoteAction() {
        return $this->render('default/quote.html.twig');
    }

    /**
     * @Route("/{id}", name="quote_delete")
     */
    public function deleteQuoteAction() {
        return $this->render('default/quote.html.twig');
    }
}
