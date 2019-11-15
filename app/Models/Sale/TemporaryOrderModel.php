<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 26/08/19
 * Time: 12:35
 */

namespace Matican\Models\Sale;


class TemporaryOrderModel
{
    private $temporaryOrderLocationID;
    private $temporaryOrderDeliveryMethodID;
    private $temporaryOrderDeliveryQueueID;
    private $temporaryOrderInvoiceModel;
    private $temporaryOrderDeliveryCost;
    private $temporaryOrderOrderItems;
    private $temporaryOrderOwnerUserToken;

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryCost()
    {
        return $this->temporaryOrderDeliveryCost;
    }

    /**
     * @param mixed $temporaryOrderDeliveryCost
     */
    public function setTemporaryOrderDeliveryCost($temporaryOrderDeliveryCost): void
    {
        $this->temporaryOrderDeliveryCost = $temporaryOrderDeliveryCost;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderOrderItems()
    {
        return $this->temporaryOrderOrderItems;
    }

    /**
     * @param mixed $temporaryOrderOrderItems
     */
    public function setTemporaryOrderOrderItems($temporaryOrderOrderItems): void
    {
        $this->temporaryOrderOrderItems = $temporaryOrderOrderItems;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderOwnerUserToken()
    {
        return $this->temporaryOrderOwnerUserToken;
    }

    /**
     * @param mixed $temporaryOrderOwnerUserToken
     */
    public function setTemporaryOrderOwnerUserToken($temporaryOrderOwnerUserToken): void
    {
        $this->temporaryOrderOwnerUserToken = $temporaryOrderOwnerUserToken;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderInvoiceModel()
    {
        return $this->temporaryOrderInvoiceModel;
    }

    /**
     * @param mixed $temporaryOrderInvoiceModel
     */
    public function setTemporaryOrderInvoiceModel($temporaryOrderInvoiceModel): void
    {
        $this->temporaryOrderInvoiceModel = $temporaryOrderInvoiceModel;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderLocationID()
    {
        return $this->temporaryOrderLocationID;
    }

    /**
     * @param mixed $temporaryOrderLocationID
     */
    public function setTemporaryOrderLocationID($temporaryOrderLocationID): void
    {
        $this->temporaryOrderLocationID = $temporaryOrderLocationID;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryMethodID()
    {
        return $this->temporaryOrderDeliveryMethodID;
    }

    /**
     * @param mixed $temporaryOrderDeliveryMethodID
     */
    public function setTemporaryOrderDeliveryMethodID($temporaryOrderDeliveryMethodID): void
    {
        $this->temporaryOrderDeliveryMethodID = $temporaryOrderDeliveryMethodID;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryQueueID()
    {
        return $this->temporaryOrderDeliveryQueueID;
    }

    /**
     * @param mixed $temporaryOrderDeliveryQueueID
     */
    public function setTemporaryOrderDeliveryQueueID($temporaryOrderDeliveryQueueID): void
    {
        $this->temporaryOrderDeliveryQueueID = $temporaryOrderDeliveryQueueID;
    }


}