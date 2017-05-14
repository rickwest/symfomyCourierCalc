<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fee
 *
 * @ORM\Table(name="fee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FeeRepository")
 */
class Fee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * Many Fees have One FeeScale.
    * @ORM\ManyToOne(targetEntity="FeeScale", inversedBy="fees")
    * @ORM\JoinColumn(name="feeScale_id", referencedColumnName="id")
    */
    private $feeScale;

    /**
     * @ORM\ManyToOne(targetEntity="FeeType")
     * @ORM\JoinColumn(name="feeType_id", referencedColumnName="id")
     */
    private $feeType;

    /**
     * @var string
     *
     * @ORM\Column(name="fee_name", type="string", length=255)
     */
    private $feeName;

    /**
     * @var int
     *
     * @ORM\Column(name="vehicle_type", type="integer", nullable=true)
     */

    /**
     * @ORM\ManyToOne(targetEntity="VehicleType")
     * @ORM\JoinColumn(name="vehicleType_id", referencedColumnName="id")
     */
    private $vehicleType;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="driver_cost", type="float")
     */
    private $driverCost;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set feeType
     *
     * @param integer $feeType
     *
     * @return Fee
     */
    public function setFeeType($feeType)
    {
        $this->feeType = $feeType;

        return $this;
    }

    /**
     * Get feeType
     *
     * @return int
     */
    public function getFeeType()
    {
        return $this->feeType;
    }

    /**
     * Set feeName
     *
     * @param string $feeName
     *
     * @return Fee
     */
    public function setFeeName($feeName)
    {
        $this->feeName = $feeName;

        return $this;
    }

    /**
     * Get feeName
     *
     * @return string
     */
    public function getFeeName()
    {
        return $this->feeName;
    }

    /**
     * Set vehicleType
     *
     * @param integer $vehicleType
     *
     * @return Fee
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * Get vehicleType
     *
     * @return int
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Fee
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set cost
     *
     * @param string $driverCost
     *
     * @return Fee
     */
    public function setDriverCost($driverCost)
    {
        $this->driverCost = $driverCost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getDriverCost()
    {
        return $this->driverCost;
    }

    /**
     * @return mixed
     */
    public function getFeeScale() {
        return $this->feeScale;
    }

    /**
     * @param mixed $feeScale
     * @return Fee
     */
    public function setFeeScale($feeScale) {
        $this->feeScale = $feeScale;
        return $this;
    }


}

