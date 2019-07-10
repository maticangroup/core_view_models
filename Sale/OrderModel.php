<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/10/2019
 * Time: 10:20 AM
 */

namespace App\FormModels\Sale;


class OrderModel
{
    private $orderId;
    private $orderSerial;
    private $orderName;
    private $orderCreateDate;
    private $orderConfirmDate;
    private $orderConfirmPersonName;
    private $orderCreatorName;
    private $orderCreatorAddress;
    private $orderCreatorPhone;
    private $orderInvoiceSerial;
    private $orderInvoiceCreateDate;
    private $orderDescription;
    private $orderTotalPrice;
    private $orderVatPrice;
    private $orderProducts;
    private $orderPaymentRequestId;
    private $orderStatus;

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getOrderSerial()
    {
        return $this->orderSerial;
    }

    /**
     * @param mixed $orderSerial
     */
    public function setOrderSerial($orderSerial): void
    {
        $this->orderSerial = $orderSerial;
    }

    /**
     * @return mixed
     */
    public function getOrderName()
    {
        return $this->orderName;
    }

    /**
     * @param mixed $orderName
     */
    public function setOrderName($orderName): void
    {
        $this->orderName = $orderName;
    }

    /**
     * @return mixed
     */
    public function getOrderCreateDate()
    {
        return $this->orderCreateDate;
    }

    /**
     * @param mixed $orderCreateDate
     */
    public function setOrderCreateDate($orderCreateDate): void
    {
        $this->orderCreateDate = $orderCreateDate;
    }

    /**
     * @return mixed
     */
    public function getOrderConfirmDate()
    {
        return $this->orderConfirmDate;
    }

    /**
     * @param mixed $orderConfirmDate
     */
    public function setOrderConfirmDate($orderConfirmDate): void
    {
        $this->orderConfirmDate = $orderConfirmDate;
    }

    /**
     * @return mixed
     */
    public function getOrderConfirmPersonName()
    {
        return $this->orderConfirmPersonName;
    }

    /**
     * @param mixed $orderConfirmPersonName
     */
    public function setOrderConfirmPersonName($orderConfirmPersonName): void
    {
        $this->orderConfirmPersonName = $orderConfirmPersonName;
    }

    /**
     * @return mixed
     */
    public function getOrderCreatorName()
    {
        return $this->orderCreatorName;
    }

    /**
     * @param mixed $orderCreatorName
     */
    public function setOrderCreatorName($orderCreatorName): void
    {
        $this->orderCreatorName = $orderCreatorName;
    }

    /**
     * @return mixed
     */
    public function getOrderCreatorAddress()
    {
        return $this->orderCreatorAddress;
    }

    /**
     * @param mixed $orderCreatorAddress
     */
    public function setOrderCreatorAddress($orderCreatorAddress): void
    {
        $this->orderCreatorAddress = $orderCreatorAddress;
    }

    /**
     * @return mixed
     */
    public function getOrderCreatorPhone()
    {
        return $this->orderCreatorPhone;
    }

    /**
     * @param mixed $orderCreatorPhone
     */
    public function setOrderCreatorPhone($orderCreatorPhone): void
    {
        $this->orderCreatorPhone = $orderCreatorPhone;
    }

    /**
     * @return mixed
     */
    public function getOrderInvoiceSerial()
    {
        return $this->orderInvoiceSerial;
    }

    /**
     * @param mixed $orderInvoiceSerial
     */
    public function setOrderInvoiceSerial($orderInvoiceSerial): void
    {
        $this->orderInvoiceSerial = $orderInvoiceSerial;
    }

    /**
     * @return mixed
     */
    public function getOrderInvoiceCreateDate()
    {
        return $this->orderInvoiceCreateDate;
    }

    /**
     * @param mixed $orderInvoiceCreateDate
     */
    public function setOrderInvoiceCreateDate($orderInvoiceCreateDate): void
    {
        $this->orderInvoiceCreateDate = $orderInvoiceCreateDate;
    }

    /**
     * @return mixed
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * @param mixed $orderDescription
     */
    public function setOrderDescription($orderDescription): void
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * @return mixed
     */
    public function getOrderTotalPrice()
    {
        return $this->orderTotalPrice;
    }

    /**
     * @param mixed $orderTotalPrice
     */
    public function setOrderTotalPrice($orderTotalPrice): void
    {
        $this->orderTotalPrice = $orderTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getOrderVatPrice()
    {
        return $this->orderVatPrice;
    }

    /**
     * @param mixed $orderVatPrice
     */
    public function setOrderVatPrice($orderVatPrice): void
    {
        $this->orderVatPrice = $orderVatPrice;
    }

    /**
     * @return mixed
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * @param mixed $orderProducts
     */
    public function setOrderProducts($orderProducts): void
    {
        $this->orderProducts = $orderProducts;
    }

    /**
     * @return mixed
     */
    public function getOrderPaymentRequestId()
    {
        return $this->orderPaymentRequestId;
    }

    /**
     * @param mixed $orderPaymentRequestId
     */
    public function setOrderPaymentRequestId($orderPaymentRequestId): void
    {
        $this->orderPaymentRequestId = $orderPaymentRequestId;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus($orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }
}