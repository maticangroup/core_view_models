<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 12:41 PM
 */

namespace App\FormModels\Accounting;


class InvoiceModel
{
    private $invoiceId;
    private $invoiceName;
    private $invoiceCreateDate;
    private $invoiceCreatePerson;
    private $invoiceTotalPrice;
    private $invoiceVat;
    private $invoiceInterest;
    private $invoiceGroupId;
    private $invoiceGroupName;
    private $invoiceTypeId;
    private $invoiceTypeName;
    private $invoiceTypeMachineName;
    private $invoiceOwnerId;
    private $invoiceOwnerFirstName;
    private $invoiceOwnerLastName;
    private $invoiceDescription;
    private $invoiceItems;

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param mixed $invoiceId
     */
    public function setInvoiceId($invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceName()
    {
        return $this->invoiceName;
    }

    /**
     * @param mixed $invoiceName
     */
    public function setInvoiceName($invoiceName): void
    {
        $this->invoiceName = $invoiceName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceCreateDate()
    {
        return $this->invoiceCreateDate;
    }

    /**
     * @param mixed $invoiceCreateDate
     */
    public function setInvoiceCreateDate($invoiceCreateDate): void
    {
        $this->invoiceCreateDate = $invoiceCreateDate;
    }

    /**
     * @return mixed
     */
    public function getInvoiceCreatePerson()
    {
        return $this->invoiceCreatePerson;
    }

    /**
     * @param mixed $invoiceCreatePerson
     */
    public function setInvoiceCreatePerson($invoiceCreatePerson): void
    {
        $this->invoiceCreatePerson = $invoiceCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTotalPrice()
    {
        return $this->invoiceTotalPrice;
    }

    /**
     * @param mixed $invoiceTotalPrice
     */
    public function setInvoiceTotalPrice($invoiceTotalPrice): void
    {
        $this->invoiceTotalPrice = $invoiceTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getInvoiceVat()
    {
        return $this->invoiceVat;
    }

    /**
     * @param mixed $invoiceVat
     */
    public function setInvoiceVat($invoiceVat): void
    {
        $this->invoiceVat = $invoiceVat;
    }

    /**
     * @return mixed
     */
    public function getInvoiceInterest()
    {
        return $this->invoiceInterest;
    }

    /**
     * @param mixed $invoiceInterest
     */
    public function setInvoiceInterest($invoiceInterest): void
    {
        $this->invoiceInterest = $invoiceInterest;
    }

    /**
     * @return mixed
     */
    public function getInvoiceGroupId()
    {
        return $this->invoiceGroupId;
    }

    /**
     * @param mixed $invoiceGroupId
     */
    public function setInvoiceGroupId($invoiceGroupId): void
    {
        $this->invoiceGroupId = $invoiceGroupId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceGroupName()
    {
        return $this->invoiceGroupName;
    }

    /**
     * @param mixed $invoiceGroupName
     */
    public function setInvoiceGroupName($invoiceGroupName): void
    {
        $this->invoiceGroupName = $invoiceGroupName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTypeId()
    {
        return $this->invoiceTypeId;
    }

    /**
     * @param mixed $invoiceTypeId
     */
    public function setInvoiceTypeId($invoiceTypeId): void
    {
        $this->invoiceTypeId = $invoiceTypeId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTypeName()
    {
        return $this->invoiceTypeName;
    }

    /**
     * @param mixed $invoiceTypeName
     */
    public function setInvoiceTypeName($invoiceTypeName): void
    {
        $this->invoiceTypeName = $invoiceTypeName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTypeMachineName()
    {
        return $this->invoiceTypeMachineName;
    }

    /**
     * @param mixed $invoiceTypeMachineName
     */
    public function setInvoiceTypeMachineName($invoiceTypeMachineName): void
    {
        $this->invoiceTypeMachineName = $invoiceTypeMachineName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceOwnerId()
    {
        return $this->invoiceOwnerId;
    }

    /**
     * @param mixed $invoiceOwnerId
     */
    public function setInvoiceOwnerId($invoiceOwnerId): void
    {
        $this->invoiceOwnerId = $invoiceOwnerId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceOwnerFirstName()
    {
        return $this->invoiceOwnerFirstName;
    }

    /**
     * @param mixed $invoiceOwnerFirstName
     */
    public function setInvoiceOwnerFirstName($invoiceOwnerFirstName): void
    {
        $this->invoiceOwnerFirstName = $invoiceOwnerFirstName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceOwnerLastName()
    {
        return $this->invoiceOwnerLastName;
    }

    /**
     * @param mixed $invoiceOwnerLastName
     */
    public function setInvoiceOwnerLastName($invoiceOwnerLastName): void
    {
        $this->invoiceOwnerLastName = $invoiceOwnerLastName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceDescription()
    {
        return $this->invoiceDescription;
    }

    /**
     * @param mixed $invoiceDescription
     */
    public function setInvoiceDescription($invoiceDescription): void
    {
        $this->invoiceDescription = $invoiceDescription;
    }

    /**
     * @return mixed
     */
    public function getInvoiceItems()
    {
        return $this->invoiceItems;
    }

    /**
     * @param mixed $invoiceItems
     */
    public function setInvoiceItems($invoiceItems): void
    {
        $this->invoiceItems = $invoiceItems;
    }
}