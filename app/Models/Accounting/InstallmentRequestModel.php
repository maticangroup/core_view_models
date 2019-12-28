<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 21/10/19
 * Time: 14:31
 */

namespace Matican\Models\Accounting;


class InstallmentRequestModel
{
    private $requestID;
    private $requestCreateDateTime;
    private $requesterFirstName;
    private $requesterLastName;
    private $requesterPhone;
    private $requesterNationalCode;
    private $requestAmount;
    private $requestStatus;
    private $requestCategory;

    /**
     * @return mixed
     */
    public function getRequestID()
    {
        return $this->requestID;
    }

    /**
     * @param mixed $requestID
     */
    public function setRequestID($requestID): void
    {
        $this->requestID = $requestID;
    }

    /**
     * @return mixed
     */
    public function getRequestCreateDateTime()
    {
        return $this->requestCreateDateTime;
    }

    /**
     * @param mixed $requestCreateDateTime
     */
    public function setRequestCreateDateTime($requestCreateDateTime): void
    {
        $this->requestCreateDateTime = $requestCreateDateTime;
    }

    /**
     * @return mixed
     */
    public function getRequesterFirstName()
    {
        return $this->requesterFirstName;
    }

    /**
     * @param mixed $requesterFirstName
     */
    public function setRequesterFirstName($requesterFirstName): void
    {
        $this->requesterFirstName = $requesterFirstName;
    }

    /**
     * @return mixed
     */
    public function getRequesterLastName()
    {
        return $this->requesterLastName;
    }

    /**
     * @param mixed $requesterLastName
     */
    public function setRequesterLastName($requesterLastName): void
    {
        $this->requesterLastName = $requesterLastName;
    }

    /**
     * @return mixed
     */
    public function getRequesterPhone()
    {
        return $this->requesterPhone;
    }

    /**
     * @param mixed $requesterPhone
     */
    public function setRequesterPhone($requesterPhone): void
    {
        $this->requesterPhone = $requesterPhone;
    }

    /**
     * @return mixed
     */
    public function getRequesterNationalCode()
    {
        return $this->requesterNationalCode;
    }

    /**
     * @param mixed $requesterNationalCode
     */
    public function setRequesterNationalCode($requesterNationalCode): void
    {
        $this->requesterNationalCode = $requesterNationalCode;
    }

    /**
     * @return mixed
     */
    public function getRequestAmount()
    {
        return $this->requestAmount;
    }

    /**
     * @param mixed $requestAmount
     */
    public function setRequestAmount($requestAmount): void
    {
        $this->requestAmount = $requestAmount;
    }

    /**
     * @return mixed
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    /**
     * @param mixed $requestStatus
     */
    public function setRequestStatus($requestStatus): void
    {
        $this->requestStatus = $requestStatus;
    }

    /**
     * @return mixed
     */
    public function getRequestCategory()
    {
        return $this->requestCategory;
    }

    /**
     * @param mixed $requestCategory
     */
    public function setRequestCategory($requestCategory): void
    {
        $this->requestCategory = $requestCategory;
    }

}
