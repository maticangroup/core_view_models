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
    private $temporaryOrderDeliveryPostalCode;
    private $temporaryOrderDeliveryAddress;
    private $temporaryOrderDeliveryReceiver;
    private $temporaryOrderDeliveryReceiverPhone;
    private $temporaryOrderDeliveryReceiverDeliveryMethodName;
    private $temporaryOrderDelivery;
    private $temporaryOrderDeliveryQueueDayName;
    private $temporaryOrderDeliveryQueueDayDate;
    private $temporaryOrderDeliveryQueueDayHour;

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryQueueDayName()
    {
        return $this->temporaryOrderDeliveryQueueDayName;
    }

    /**
     * @param mixed $temporaryOrderDeliveryQueueDayName
     */
    public function setTemporaryOrderDeliveryQueueDayName($temporaryOrderDeliveryQueueDayName): void
    {
        $this->temporaryOrderDeliveryQueueDayName = $temporaryOrderDeliveryQueueDayName;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryQueueDayDate()
    {
        return $this->temporaryOrderDeliveryQueueDayDate;
    }

    /**
     * @param mixed $temporaryOrderDeliveryQueueDayDate
     */
    public function setTemporaryOrderDeliveryQueueDayDate($temporaryOrderDeliveryQueueDayDate): void
    {
        $this->temporaryOrderDeliveryQueueDayDate = $temporaryOrderDeliveryQueueDayDate;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryQueueDayHour()
    {
        return $this->temporaryOrderDeliveryQueueDayHour;
    }

    /**
     * @param mixed $temporaryOrderDeliveryQueueDayHour
     */
    public function setTemporaryOrderDeliveryQueueDayHour($temporaryOrderDeliveryQueueDayHour): void
    {
        $this->temporaryOrderDeliveryQueueDayHour = $temporaryOrderDeliveryQueueDayHour;
    }


    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryPostalCode()
    {
        return $this->temporaryOrderDeliveryPostalCode;
    }

    /**
     * @param mixed $temporaryOrderDeliveryPostalCode
     */
    public function setTemporaryOrderDeliveryPostalCode($temporaryOrderDeliveryPostalCode): void
    {
        $this->temporaryOrderDeliveryPostalCode = $temporaryOrderDeliveryPostalCode;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryAddress()
    {
        return $this->temporaryOrderDeliveryAddress;
    }

    /**
     * @param mixed $temporaryOrderDeliveryAddress
     */
    public function setTemporaryOrderDeliveryAddress($temporaryOrderDeliveryAddress): void
    {
        $this->temporaryOrderDeliveryAddress = $temporaryOrderDeliveryAddress;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryReceiver()
    {
        return $this->temporaryOrderDeliveryReceiver;
    }

    /**
     * @param mixed $temporaryOrderDeliveryReceiver
     */
    public function setTemporaryOrderDeliveryReceiver($temporaryOrderDeliveryReceiver): void
    {
        $this->temporaryOrderDeliveryReceiver = $temporaryOrderDeliveryReceiver;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryReceiverPhone()
    {
        return $this->temporaryOrderDeliveryReceiverPhone;
    }

    /**
     * @param mixed $temporaryOrderDeliveryReceiverPhone
     */
    public function setTemporaryOrderDeliveryReceiverPhone($temporaryOrderDeliveryReceiverPhone): void
    {
        $this->temporaryOrderDeliveryReceiverPhone = $temporaryOrderDeliveryReceiverPhone;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDeliveryReceiverDeliveryMethodName()
    {
        return $this->temporaryOrderDeliveryReceiverDeliveryMethodName;
    }

    /**
     * @param mixed $temporaryOrderDeliveryReceiverDeliveryMethodName
     */
    public function setTemporaryOrderDeliveryReceiverDeliveryMethodName($temporaryOrderDeliveryReceiverDeliveryMethodName): void
    {
        $this->temporaryOrderDeliveryReceiverDeliveryMethodName = $temporaryOrderDeliveryReceiverDeliveryMethodName;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderDelivery()
    {
        return $this->temporaryOrderDelivery;
    }

    /**
     * @param mixed $temporaryOrderDelivery
     */
    public function setTemporaryOrderDelivery($temporaryOrderDelivery): void
    {
        $this->temporaryOrderDelivery = $temporaryOrderDelivery;
    }


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