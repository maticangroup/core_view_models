<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 1:05 PM
 */

namespace App\FormModels\Accounting;


class PaymentModel
{
    private $paymentId;
    private $paymentCreateDate;
    private $paymentDueDate;
    private $paymentPaidDate;
    private $paymentAmount;
    private $paymentMethodId;
    private $paymentMethodName;
    private $paymentFromBankAccountId;
    private $paymentFromBankAccountName;
    private $paymentToBankAccountId;
    private $paymentToBankAccountName;
    private $paymentFollowToken;
    private $paymentType;
    private $paymentStatus;
    private $paymentRequestId;

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param mixed $paymentId
     */
    public function setPaymentId($paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return mixed
     */
    public function getPaymentCreateDate()
    {
        return $this->paymentCreateDate;
    }

    /**
     * @param mixed $paymentCreateDate
     */
    public function setPaymentCreateDate($paymentCreateDate): void
    {
        $this->paymentCreateDate = $paymentCreateDate;
    }

    /**
     * @return mixed
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * @param mixed $paymentDueDate
     */
    public function setPaymentDueDate($paymentDueDate): void
    {
        $this->paymentDueDate = $paymentDueDate;
    }

    /**
     * @return mixed
     */
    public function getPaymentPaidDate()
    {
        return $this->paymentPaidDate;
    }

    /**
     * @param mixed $paymentPaidDate
     */
    public function setPaymentPaidDate($paymentPaidDate): void
    {
        $this->paymentPaidDate = $paymentPaidDate;
    }

    /**
     * @return mixed
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * @param mixed $paymentAmount
     */
    public function setPaymentAmount($paymentAmount): void
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param mixed $paymentMethodId
     */
    public function setPaymentMethodId($paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    /**
     * @param mixed $paymentMethodName
     */
    public function setPaymentMethodName($paymentMethodName): void
    {
        $this->paymentMethodName = $paymentMethodName;
    }

    /**
     * @return mixed
     */
    public function getPaymentFromBankAccountId()
    {
        return $this->paymentFromBankAccountId;
    }

    /**
     * @param mixed $paymentFromBankAccountId
     */
    public function setPaymentFromBankAccountId($paymentFromBankAccountId): void
    {
        $this->paymentFromBankAccountId = $paymentFromBankAccountId;
    }

    /**
     * @return mixed
     */
    public function getPaymentFromBankAccountName()
    {
        return $this->paymentFromBankAccountName;
    }

    /**
     * @param mixed $paymentFromBankAccountName
     */
    public function setPaymentFromBankAccountName($paymentFromBankAccountName): void
    {
        $this->paymentFromBankAccountName = $paymentFromBankAccountName;
    }

    /**
     * @return mixed
     */
    public function getPaymentToBankAccountId()
    {
        return $this->paymentToBankAccountId;
    }

    /**
     * @param mixed $paymentToBankAccountId
     */
    public function setPaymentToBankAccountId($paymentToBankAccountId): void
    {
        $this->paymentToBankAccountId = $paymentToBankAccountId;
    }

    /**
     * @return mixed
     */
    public function getPaymentToBankAccountName()
    {
        return $this->paymentToBankAccountName;
    }

    /**
     * @param mixed $paymentToBankAccountName
     */
    public function setPaymentToBankAccountName($paymentToBankAccountName): void
    {
        $this->paymentToBankAccountName = $paymentToBankAccountName;
    }

    /**
     * @return mixed
     */
    public function getPaymentFollowToken()
    {
        return $this->paymentFollowToken;
    }

    /**
     * @param mixed $paymentFollowToken
     */
    public function setPaymentFollowToken($paymentFollowToken): void
    {
        $this->paymentFollowToken = $paymentFollowToken;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param mixed $paymentType
     */
    public function setPaymentType($paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @param mixed $paymentStatus
     */
    public function setPaymentStatus($paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestId()
    {
        return $this->paymentRequestId;
    }

    /**
     * @param mixed $paymentRequestId
     */
    public function setPaymentRequestId($paymentRequestId): void
    {
        $this->paymentRequestId = $paymentRequestId;
    }
}