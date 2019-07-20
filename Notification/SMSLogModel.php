<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/18/2019
 * Time: 5:52 PM
 */

namespace App\FormModels\Notification;


class SMSLogModel
{
    private $smsLogId;
    private $smsLogTitle;
    private $smsLogDescription;
    private $smsLogSendDate;
    private $smsLogLength;
    private $smsLogFrom;
    private $smsLogTo;
    private $smsLogToPersonName;
    private $PersonId;

    /**
     * @return mixed
     */
    public function getSmsLogId()
    {
        return $this->smsLogId;
    }

    /**
     * @param mixed $smsLogId
     */
    public function setSmsLogId($smsLogId): void
    {
        $this->smsLogId = $smsLogId;
    }

    /**
     * @return mixed
     */
    public function getSmsLogTitle()
    {
        return $this->smsLogTitle;
    }

    /**
     * @param mixed $smsLogTitle
     */
    public function setSmsLogTitle($smsLogTitle): void
    {
        $this->smsLogTitle = $smsLogTitle;
    }

    /**
     * @return mixed
     */
    public function getSmsLogDescription()
    {
        return $this->smsLogDescription;
    }

    /**
     * @param mixed $smsLogDescription
     */
    public function setSmsLogDescription($smsLogDescription): void
    {
        $this->smsLogDescription = $smsLogDescription;
    }

    /**
     * @return mixed
     */
    public function getSmsLogSendDate()
    {
        return $this->smsLogSendDate;
    }

    /**
     * @param mixed $smsLogSendDate
     */
    public function setSmsLogSendDate($smsLogSendDate): void
    {
        $this->smsLogSendDate = $smsLogSendDate;
    }

    /**
     * @return mixed
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param mixed $PersonId
     */
    public function setPersonId($PersonId): void
    {
        $this->PersonId = $PersonId;
    }

    /**
     * @return mixed
     */
    public function getSmsLogLength()
    {
        return $this->smsLogLength;
    }

    /**
     * @param mixed $smsLogLength
     */
    public function setSmsLogLength($smsLogLength): void
    {
        $this->smsLogLength = $smsLogLength;
    }

    /**
     * @return mixed
     */
    public function getSmsLogFrom()
    {
        return $this->smsLogFrom;
    }

    /**
     * @param mixed $smsLogFrom
     */
    public function setSmsLogFrom($smsLogFrom): void
    {
        $this->smsLogFrom = $smsLogFrom;
    }

    /**
     * @return mixed
     */
    public function getSmsLogTo()
    {
        return $this->smsLogTo;
    }

    /**
     * @param mixed $smsLogTo
     */
    public function setSmsLogTo($smsLogTo): void
    {
        $this->smsLogTo = $smsLogTo;
    }

    /**
     * @return mixed
     */
    public function getSmsLogToPersonName()
    {
        return $this->smsLogToPersonName;
    }

    /**
     * @param mixed $smsLogToPersonName
     */
    public function setSmsLogToPersonName($smsLogToPersonName): void
    {
        $this->smsLogToPersonName = $smsLogToPersonName;
    }
}