<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteRepository")
 */
class Quote
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
     * @var string
     *
     * @ORM\Column(name="origin", type="string", length=255)
     */
    private $origin;

    /**
     * @var float
     *
     * @ORM\Column(name="originLat", type="float")
     */
    private $originLat;

    /**
     * @var float
     *
     * @ORM\Column(name="originLon", type="float")
     */
    private $originLon;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="destinationLat", type="string", length=255)
     */
    private $destinationLat;

    /**
     * @var float
     *
     * @ORM\Column(name="destinationLon", type="float")
     */
    private $destinationLon;

    /**
     * @var string
     *
     * @ORM\Column(name="distance", type="string", length=255)
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="distanceValue", type="string", length=255)
     */
    private $distanceValue;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=255)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="durationValue", type="string", length=255)
     */
    private $durationValue;


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
     * Set origin
     *
     * @param string $origin
     *
     * @return Quote
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set originLat
     *
     * @param float $originLat
     *
     * @return Quote
     */
    public function setOriginLat($originLat)
    {
        $this->originLat = $originLat;

        return $this;
    }

    /**
     * Get originLat
     *
     * @return float
     */
    public function getOriginLat()
    {
        return $this->originLat;
    }

    /**
     * Set originLon
     *
     * @param float $originLon
     *
     * @return Quote
     */
    public function setOriginLon($originLon)
    {
        $this->originLon = $originLon;

        return $this;
    }

    /**
     * Get originLon
     *
     * @return float
     */
    public function getOriginLon()
    {
        return $this->originLon;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return Quote
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set destinationLat
     *
     * @param string $destinationLat
     *
     * @return Quote
     */
    public function setDestinationLat($destinationLat)
    {
        $this->destinationLat = $destinationLat;

        return $this;
    }

    /**
     * Get destinationLat
     *
     * @return string
     */
    public function getDestinationLat()
    {
        return $this->destinationLat;
    }

    /**
     * Set destinationLon
     *
     * @param float $destinationLon
     *
     * @return Quote
     */
    public function setDestinationLon($destinationLon)
    {
        $this->destinationLon = $destinationLon;

        return $this;
    }

    /**
     * Get destinationLon
     *
     * @return float
     */
    public function getDestinationLon()
    {
        return $this->destinationLon;
    }

    /**
     * Set distance
     *
     * @param string $distance
     *
     * @return Quote
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set distanceValue
     *
     * @param string $distanceValue
     *
     * @return Quote
     */
    public function setDistanceValue($distanceValue)
    {
        $this->distanceValue = $distanceValue;

        return $this;
    }

    /**
     * Get distanceValue
     *
     * @return string
     */
    public function getDistanceValue()
    {
        return $this->distanceValue;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Quote
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set durationValue
     *
     * @param string $durationValue
     *
     * @return Quote
     */
    public function setDurationValue($durationValue)
    {
        $this->durationValue = $durationValue;

        return $this;
    }

    /**
     * Get durationValue
     *
     * @return string
     */
    public function getDurationValue()
    {
        return $this->durationValue;
    }
}

