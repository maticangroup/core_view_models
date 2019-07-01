<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 5:55 PM
 */

namespace App\FormModels\Repository;


class GuaranteeModel
{
    private $guaranteeID;
    private $guaranteeName;
    private $guaranteePrice;
    private $guaranteeProvider;
    private $guaranteeDuration;
    private $guaranteeStatus;

    /**
     * @return mixed
     */
    public function getGuaranteeID()
    {
        return $this->guaranteeID;
    }

    /**
     * @param mixed $guaranteeID
     */
    public function setGuaranteeID($guaranteeID): void
    {
        $this->guaranteeID = $guaranteeID;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeName()
    {
        return $this->guaranteeName;
    }

    /**
     * @param mixed $guaranteeName
     */
    public function setGuaranteeName($guaranteeName): void
    {
        $this->guaranteeName = $guaranteeName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteePrice()
    {
        return $this->guaranteePrice;
    }

    /**
     * @param mixed $guaranteePrice
     */
    public function setGuaranteePrice($guaranteePrice): void
    {
        $this->guaranteePrice = $guaranteePrice;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeProvider()
    {
        return $this->guaranteeProvider;
    }

    /**
     * @param mixed $guaranteeProvider
     */
    public function setGuaranteeProvider($guaranteeProvider): void
    {
        $this->guaranteeProvider = $guaranteeProvider;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeDuration()
    {
        return $this->guaranteeDuration;
    }

    /**
     * @param mixed $guaranteeDuration
     */
    public function setGuaranteeDuration($guaranteeDuration): void
    {
        $this->guaranteeDuration = $guaranteeDuration;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeStatus()
    {
        return $this->guaranteeStatus;
    }

    /**
     * @param mixed $guaranteeStatus
     */
    public function setGuaranteeStatus($guaranteeStatus): void
    {
        $this->guaranteeStatus = $guaranteeStatus;
    }


}