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
    private $requestCreateDateTime;
    private $requesterFirstname;
    private $requesterLastname;
    private $requesterPhone;
    private $requesterNationalCode;
    private $requestAmount;
    private $requestStatus;

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
    public function getRequesterFirstname()
    {
        return $this->requesterFirstname;
    }

    /**
     * @param mixed $requesterFirstname
     */
    public function setRequesterFirstname($requesterFirstname): void
    {
        $this->requesterFirstname = $requesterFirstname;
    }

    /**
     * @return mixed
     */
    public function getRequesterLastname()
    {
        return $this->requesterLastname;
    }

    /**
     * @param mixed $requesterLastname
     */
    public function setRequesterLastname($requesterLastname): void
    {
        $this->requesterLastname = $requesterLastname;
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


}
