<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 10:31 AM
 */

namespace App\FormModels\Delivery;


class DeliveryMethodModel
{
    private $deliveryMethodId;
    private $deliveryMethodName;
    private $deliveryMethodSizeId;
    private $deliveryMethodSizeName;
    private $deliveryMethodTypeid;
    private $deliveryMethodTypeName;
    private $deliveryMethodTypeMachineName;
    private $deliveryMethodCost;
    private $deliveryMethodLogoUrl;
    private $deliveryMethodDescription;
    private $deliveryMethodReceiveMoney;

    /**
     * @return mixed
     */
    public function getDeliveryMethodId()
    {
        return $this->deliveryMethodId;
    }

    /**
     * @param mixed $deliveryMethodId
     */
    public function setDeliveryMethodId($deliveryMethodId): void
    {
        $this->deliveryMethodId = $deliveryMethodId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodName()
    {
        return $this->deliveryMethodName;
    }

    /**
     * @param mixed $deliveryMethodName
     */
    public function setDeliveryMethodName($deliveryMethodName): void
    {
        $this->deliveryMethodName = $deliveryMethodName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodSizeId()
    {
        return $this->deliveryMethodSizeId;
    }

    /**
     * @param mixed $deliveryMethodSizeId
     */
    public function setDeliveryMethodSizeId($deliveryMethodSizeId): void
    {
        $this->deliveryMethodSizeId = $deliveryMethodSizeId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodSizeName()
    {
        return $this->deliveryMethodSizeName;
    }

    /**
     * @param mixed $deliveryMethodSizeName
     */
    public function setDeliveryMethodSizeName($deliveryMethodSizeName): void
    {
        $this->deliveryMethodSizeName = $deliveryMethodSizeName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodTypeid()
    {
        return $this->deliveryMethodTypeid;
    }

    /**
     * @param mixed $deliveryMethodTypeid
     */
    public function setDeliveryMethodTypeid($deliveryMethodTypeid): void
    {
        $this->deliveryMethodTypeid = $deliveryMethodTypeid;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodTypeName()
    {
        return $this->deliveryMethodTypeName;
    }

    /**
     * @param mixed $deliveryMethodTypeName
     */
    public function setDeliveryMethodTypeName($deliveryMethodTypeName): void
    {
        $this->deliveryMethodTypeName = $deliveryMethodTypeName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodTypeMachineName()
    {
        return $this->deliveryMethodTypeMachineName;
    }

    /**
     * @param mixed $deliveryMethodTypeMachineName
     */
    public function setDeliveryMethodTypeMachineName($deliveryMethodTypeMachineName): void
    {
        $this->deliveryMethodTypeMachineName = $deliveryMethodTypeMachineName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodCost()
    {
        return $this->deliveryMethodCost;
    }

    /**
     * @param mixed $deliveryMethodCost
     */
    public function setDeliveryMethodCost($deliveryMethodCost): void
    {
        $this->deliveryMethodCost = $deliveryMethodCost;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodLogoUrl()
    {
        return $this->deliveryMethodLogoUrl;
    }

    /**
     * @param mixed $deliveryMethodLogoUrl
     */
    public function setDeliveryMethodLogoUrl($deliveryMethodLogoUrl): void
    {
        $this->deliveryMethodLogoUrl = $deliveryMethodLogoUrl;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodDescription()
    {
        return $this->deliveryMethodDescription;
    }

    /**
     * @param mixed $deliveryMethodDescription
     */
    public function setDeliveryMethodDescription($deliveryMethodDescription): void
    {
        $this->deliveryMethodDescription = $deliveryMethodDescription;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodReceiveMoney()
    {
        return $this->deliveryMethodReceiveMoney;
    }

    /**
     * @param mixed $deliveryMethodReceiveMoney
     */
    public function setDeliveryMethodReceiveMoney($deliveryMethodReceiveMoney): void
    {
        $this->deliveryMethodReceiveMoney = $deliveryMethodReceiveMoney;
    }

}