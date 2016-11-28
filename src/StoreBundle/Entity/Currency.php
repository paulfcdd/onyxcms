<?php

namespace StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreBundle\Entity\Currency
 *
 * @ORM\Entity
 * @ORM\Table(name="currencies")
 */
class Currency
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $currencyId;

    /**
     * @ORM\Column(type="string", length=255, unique=false)
     */
    private $currencyName;

    /**
     * @ORM\Column(type="string", length=3, unique=false)
     */
    private $currencyCode;

    /**
     * @ORM\Column(type="string", length=3, unique=false)
     */
    private $symbolLeft;

    /**
     * @ORM\Column(type="string", length=3, unique=false)
     */
    private $symbolRight;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $value;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * Get currencyId
     *
     * @return integer
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     *
     * @return Currency
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set symbolLeft
     *
     * @param string $symbolLeft
     *
     * @return Currency
     */
    public function setSymbolLeft($symbolLeft)
    {
        $this->symbolLeft = $symbolLeft;

        return $this;
    }

    /**
     * Get symbolLeft
     *
     * @return string
     */
    public function getSymbolLeft()
    {
        return $this->symbolLeft;
    }

    /**
     * Set symbolRight
     *
     * @param string $symbolRight
     *
     * @return Currency
     */
    public function setSymbolRight($symbolRight)
    {
        $this->symbolRight = $symbolRight;

        return $this;
    }

    /**
     * Get symbolRight
     *
     * @return string
     */
    public function getSymbolRight()
    {
        return $this->symbolRight;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Currency
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Currency
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set currencyName
     *
     * @param string $currencyName
     *
     * @return Currency
     */
    public function setCurrencyName($currencyName)
    {
        $this->currencyName = $currencyName;

        return $this;
    }

    /**
     * Get currencyName
     *
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }
}
