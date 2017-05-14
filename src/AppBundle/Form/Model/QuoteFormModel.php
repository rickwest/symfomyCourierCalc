<?php
/**
 * Created by PhpStorm.
 * User: rick
 * Date: 31/03/2017
 * Time: 21:40
 */

namespace AppBundle\Form\Model;


class QuoteFormModel {
    protected $startLocation;
    protected $finishLocation;
    protected $feeScale;

    /** @var  boolean $calloutCharge */
    protected $calloutCharge;
    protected $vehicleType;
    /** @var  array $waypoints*/
    protected $waypoints;

    /**
     * @return mixed
     */
    public function getStartLocation() {
        return $this->startLocation;
    }

    /**
     * @param mixed $startLocation
     * @return QuoteFormModel
     */
    public function setStartLocation($startLocation) {
        $this->startLocation = $startLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinishLocation() {
        return $this->finishLocation;
    }

    /**
     * @param mixed $finishLocation
     * @return QuoteFormModel
     */
    public function setFinishLocation($finishLocation) {
        $this->finishLocation = $finishLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeeScale() {
        return $this->feeScale;
    }

    /**
     * @param mixed $feeScale
     * @return QuoteFormModel
     */
    public function setFeeScale($feeScale) {
        $this->feeScale = $feeScale;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCalloutCharge() {
        return $this->calloutCharge;
    }

    /**
     * @param bool $calloutCharge
     * @return QuoteFormModel
     */
    public function setCalloutCharge($calloutCharge) {
        $this->calloutCharge = $calloutCharge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVehicleType() {
        return $this->vehicleType;
    }

    /**
     * @param mixed $vehicleType
     * @return QuoteFormModel
     */
    public function setVehicleType($vehicleType) {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    /**
     * @return array
     */
    public function getWaypoints() {
        return $this->waypoints;
    }

    /**
     * @param array $waypoints
     * @return QuoteFormModel
     */
    public function setWaypoints($waypoints) {
        $this->waypoints = $waypoints;
        return $this;
    }
}



