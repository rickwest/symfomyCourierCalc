<?php
/**
 * Created by PhpStorm.
 * User: rick
 * Date: 31/03/2017
 * Time: 21:37
 */

namespace AppBundle\Form\Type;

use AppBundle\Form\ChoiceHelper\ChoiceHelper;
use AppBundle\Form\Model\QuoteFormModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuoteType extends AbstractType {

    /** @var ChoiceHelper  */
    protected $choiceHelper;

    public function __construct(ChoiceHelper $choiceHelper) {
        $this->choiceHelper = $choiceHelper;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('startLocation', TextType::class)
            ->add('finishLocation', TextType::class)
            ->add('waypoints', TextType::class, [
                'required' => false
            ])
            ->add('vehicleType', ChoiceType::class, [
                'choices' => $this->choiceHelper->getVehicleTypeChoices()
            ])
            ->add('feeScale', ChoiceType::class, [
                'choices' => $this->choiceHelper->getFeeScaleChoices()
            ])
            ->add('calloutCharge', CheckboxType::class, [
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => QuoteFormModel::class
        ]);
    }
}