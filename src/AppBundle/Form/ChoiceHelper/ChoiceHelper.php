<?php

namespace AppBundle\Form\ChoiceHelper;

use Doctrine\Bundle\DoctrineBundle\Registry;

class ChoiceHelper {

    /** @var Registry  */
    protected $registry;

    public function __construct(Registry $registry) {
        $this->registry = $registry;
    }

    public function getVehicleTypeChoices() {
        $vehicleTypes = $this->registry->getManager()
            ->getRepository('AppBundle:VehicleType')
            ->findAll();

        $result = [];

        /** @var $vehicleType */
        foreach ($vehicleTypes as $vehicleType) {
            $result[$vehicleType->getName()] = $vehicleType->getId();
        }

        return $result;
    }

    public function getFeeScaleChoices() {
        $feeScales = $this->registry->getManager()
            ->getRepository('AppBundle:FeeScale')
            ->findAll();

        $result = [];

        /** @var  $feeScale */
        foreach ($feeScales as $feeScale) {
            $result[$feeScale->getName()] = $feeScale->getId();
        }

        return $result;
    }

}