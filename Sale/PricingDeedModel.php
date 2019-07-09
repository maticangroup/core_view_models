<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 10:08 PM
 */

namespace App\FormModels\Sale;


class PricingDeedModel
{
    private $pricingDeedId;
    private $pricingDeedName;
    private $pricingDeedSerial;
    private $pricingDeedDateYear;
    private $pricingDeedDateMonth;
    private $pricingDeedDateDay;
    private $pricingDeedDescription;
    private $pricingDeedStatus;
    private $pricingDeedConfirmStatus;
    private $pricingDeedCreateDate;
    private $pricingDeedCreatePerson;
    private $pricingDeedConfirmDate;
    private $pricingDeedConfirmPerson;
    private $pricingDeedProducts;
    private $pricingDeedProductsCount;

    /**
     * @return mixed
     */
    public function getPricingDeedId()
    {
        return $this->pricingDeedId;
    }

    /**
     * @param mixed $pricingDeedId
     */
    public function setPricingDeedId($pricingDeedId): void
    {
        $this->pricingDeedId = $pricingDeedId;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedName()
    {
        return $this->pricingDeedName;
    }

    /**
     * @param mixed $pricingDeedName
     */
    public function setPricingDeedName($pricingDeedName): void
    {
        $this->pricingDeedName = $pricingDeedName;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedSerial()
    {
        return $this->pricingDeedSerial;
    }

    /**
     * @param mixed $pricingDeedSerial
     */
    public function setPricingDeedSerial($pricingDeedSerial): void
    {
        $this->pricingDeedSerial = $pricingDeedSerial;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedDateYear()
    {
        return $this->pricingDeedDateYear;
    }

    /**
     * @param mixed $pricingDeedDateYear
     */
    public function setPricingDeedDateYear($pricingDeedDateYear): void
    {
        $this->pricingDeedDateYear = $pricingDeedDateYear;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedDateMonth()
    {
        return $this->pricingDeedDateMonth;
    }

    /**
     * @param mixed $pricingDeedDateMonth
     */
    public function setPricingDeedDateMonth($pricingDeedDateMonth): void
    {
        $this->pricingDeedDateMonth = $pricingDeedDateMonth;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedDateDay()
    {
        return $this->pricingDeedDateDay;
    }

    /**
     * @param mixed $pricingDeedDateDay
     */
    public function setPricingDeedDateDay($pricingDeedDateDay): void
    {
        $this->pricingDeedDateDay = $pricingDeedDateDay;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedDescription()
    {
        return $this->pricingDeedDescription;
    }

    /**
     * @param mixed $pricingDeedDescription
     */
    public function setPricingDeedDescription($pricingDeedDescription): void
    {
        $this->pricingDeedDescription = $pricingDeedDescription;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedStatus()
    {
        return $this->pricingDeedStatus;
    }

    /**
     * @param mixed $pricingDeedStatus
     */
    public function setPricingDeedStatus($pricingDeedStatus): void
    {
        $this->pricingDeedStatus = $pricingDeedStatus;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedConfirmStatus()
    {
        return $this->pricingDeedConfirmStatus;
    }

    /**
     * @param mixed $pricingDeedConfirmStatus
     */
    public function setPricingDeedConfirmStatus($pricingDeedConfirmStatus): void
    {
        $this->pricingDeedConfirmStatus = $pricingDeedConfirmStatus;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedCreateDate()
    {
        return $this->pricingDeedCreateDate;
    }

    /**
     * @param mixed $pricingDeedCreateDate
     */
    public function setPricingDeedCreateDate($pricingDeedCreateDate): void
    {
        $this->pricingDeedCreateDate = $pricingDeedCreateDate;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedCreatePerson()
    {
        return $this->pricingDeedCreatePerson;
    }

    /**
     * @param mixed $pricingDeedCreatePerson
     */
    public function setPricingDeedCreatePerson($pricingDeedCreatePerson): void
    {
        $this->pricingDeedCreatePerson = $pricingDeedCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedConfirmDate()
    {
        return $this->pricingDeedConfirmDate;
    }

    /**
     * @param mixed $pricingDeedConfirmDate
     */
    public function setPricingDeedConfirmDate($pricingDeedConfirmDate): void
    {
        $this->pricingDeedConfirmDate = $pricingDeedConfirmDate;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedConfirmPerson()
    {
        return $this->pricingDeedConfirmPerson;
    }

    /**
     * @param mixed $pricingDeedConfirmPerson
     */
    public function setPricingDeedConfirmPerson($pricingDeedConfirmPerson): void
    {
        $this->pricingDeedConfirmPerson = $pricingDeedConfirmPerson;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedProducts()
    {
        return $this->pricingDeedProducts;
    }

    /**
     * @param mixed $pricingDeedProducts
     */
    public function setPricingDeedProducts($pricingDeedProducts): void
    {
        $this->pricingDeedProducts = $pricingDeedProducts;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedProductsCount()
    {
        return $this->pricingDeedProductsCount;
    }

    /**
     * @param mixed $pricingDeedProductsCount
     */
    public function setPricingDeedProductsCount($pricingDeedProductsCount): void
    {
        $this->pricingDeedProductsCount = $pricingDeedProductsCount;
    }
}