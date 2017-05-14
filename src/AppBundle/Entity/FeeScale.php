<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * FeeScale
 *
 * @ORM\Table(name="fee_scale")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FeeScaleRepository")
 */
class FeeScale
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * Set fees
     * One FeeScale has many fees
     * @ORM\OneToMany(targetEntity="Fee", mappedBy="feeScale")
     */
    private $fees;

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
     * Set name
     *
     * @param string $name
     *
     * @return FeeScale
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFees() {
        return $this->fees;
    }

    /**
     * @param mixed $fees
     * @return FeeScale
     */
    public function setFees($fees) {
        $this->fees = $fees;
        return $this;
    }

    public function __construct() {
        $this->fees = new ArrayCollection();
    }
}

