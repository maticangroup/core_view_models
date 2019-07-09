<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 10:25 PM
 */

namespace App\FormModels\Sale;


class PricingDeedConfirmStatusModel
{
    private $pricingDeedConfirmStatusId;
    private $pricingDeedConfirmStatusName;
    private $pricingDeedConfirmStatusMachineName;
    private $pricingDeedConfirmStatusColor;
    private $pricingDeedId;

    /**
     * @return mixed
     */
    public function getPricingDeedConfirmStatusId()
    {
        return $this->pricingDeedConfirmStatusId;
    }

    /**
     * @param mixed $pricingDeedConfirmStatusId
     */
    public function setPricingDeedConfirmStatusId($pricingDeedConfirmStatusId): void
    {
        $this->pricingDeedConfirmStatusId = $pricingDeedConfirmStatusId;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedConfirmStatusName()
    {
        return $this->pricingDeedConfirmStatusName;
    }

    /**
     * @param mixed $pricingDeedConfirmStatusName
     */
    public function setPricingDeedConfirmStatusName($pricingDeedConfirmStatusName): void
    {
        $this->pricingDeedConfirmStatusName = $pricingDeedConfirmStatusName;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedConfirmStatusMachineName()
    {
        return $this->pricingDeedConfirmStatusMachineName;
    }

    /**
     * @param mixed $pricingDeedConfirmStatusMachineName
     */
    public function setPricingDeedConfirmStatusMachineName($pricingDeedConfirmStatusMachineName): void
    {
        $this->pricingDeedConfirmStatusMachineName = $pricingDeedConfirmStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedConfirmStatusColor()
    {
        return $this->pricingDeedConfirmStatusColor;
    }

    /**
     * @param mixed $pricingDeedConfirmStatusColor
     */
    public function setPricingDeedConfirmStatusColor($pricingDeedConfirmStatusColor): void
    {
        $this->pricingDeedConfirmStatusColor = $pricingDeedConfirmStatusColor;
    }

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
}