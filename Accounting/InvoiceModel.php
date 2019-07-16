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
    private $invoiceFromPersonId;
    private $invoiceFromPersonFirstName;
    private $invoiceFromPersonLastName;
    private $invoiceToPersonId;
    private $invoiceToPersonFirstName;
    private $invoiceToPersonLastName;
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
    public function getInvoiceFromPersonId()
    {
        return $this->invoiceFromPersonId;
    }

    /**
     * @param mixed $invoiceFromPersonId
     */
    public function setInvoiceFromPersonId($invoiceFromPersonId): void
    {
        $this->invoiceFromPersonId = $invoiceFromPersonId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromPersonFirstName()
    {
        return $this->invoiceFromPersonFirstName;
    }

    /**
     * @param mixed $invoiceFromPersonFirstName
     */
    public function setInvoiceFromPersonFirstName($invoiceFromPersonFirstName): void
    {
        $this->invoiceFromPersonFirstName = $invoiceFromPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromPersonLastName()
    {
        return $this->invoiceFromPersonLastName;
    }

    /**
     * @param mixed $invoiceFromPersonLastName
     */
    public function setInvoiceFromPersonLastName($invoiceFromPersonLastName): void
    {
        $this->invoiceFromPersonLastName = $invoiceFromPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToPersonId()
    {
        return $this->invoiceToPersonId;
    }

    /**
     * @param mixed $invoiceToPersonId
     */
    public function setInvoiceToPersonId($invoiceToPersonId): void
    {
        $this->invoiceToPersonId = $invoiceToPersonId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToPersonFirstName()
    {
        return $this->invoiceToPersonFirstName;
    }

    /**
     * @param mixed $invoiceToPersonFirstName
     */
    public function setInvoiceToPersonFirstName($invoiceToPersonFirstName): void
    {
        $this->invoiceToPersonFirstName = $invoiceToPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToPersonLastName()
    {
        return $this->invoiceToPersonLastName;
    }

    /**
     * @param mixed $invoiceToPersonLastName
     */
    public function setInvoiceToPersonLastName($invoiceToPersonLastName): void
    {
        $this->invoiceToPersonLastName = $invoiceToPersonLastName;
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