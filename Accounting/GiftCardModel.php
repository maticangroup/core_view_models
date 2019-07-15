<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:45 PM
 */

namespace App\FormModels\Accounting;


class GiftCardModel
{
    private $giftCardId;
    private $giftCardSerial;
    private $giftCardStatus;
    private $giftCardUsedPerson;
    private $giftCardUsedDate;
    private $giftCardGroupId;

    /**
     * @return mixed
     */
    public function getGiftCardId()
    {
        return $this->giftCardId;
    }

    /**
     * @param mixed $giftCardId
     */
    public function setGiftCardId($giftCardId): void
    {
        $this->giftCardId = $giftCardId;
    }

    /**
     * @return mixed
     */
    public function getGiftCardSerial()
    {
        return $this->giftCardSerial;
    }

    /**
     * @param mixed $giftCardSerial
     */
    public function setGiftCardSerial($giftCardSerial): void
    {
        $this->giftCardSerial = $giftCardSerial;
    }

    /**
     * @return mixed
     */
    public function getGiftCardStatus()
    {
        return $this->giftCardStatus;
    }

    /**
     * @param mixed $giftCardStatus
     */
    public function setGiftCardStatus($giftCardStatus): void
    {
        $this->giftCardStatus = $giftCardStatus;
    }

    /**
     * @return mixed
     */
    public function getGiftCardUsedPerson()
    {
        return $this->giftCardUsedPerson;
    }

    /**
     * @param mixed $giftCardUsedPerson
     */
    public function setGiftCardUsedPerson($giftCardUsedPerson): void
    {
        $this->giftCardUsedPerson = $giftCardUsedPerson;
    }

    /**
     * @return mixed
     */
    public function getGiftCardUsedDate()
    {
        return $this->giftCardUsedDate;
    }

    /**
     * @param mixed $giftCardUsedDate
     */
    public function setGiftCardUsedDate($giftCardUsedDate): void
    {
        $this->giftCardUsedDate = $giftCardUsedDate;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupId()
    {
        return $this->giftCardGroupId;
    }

    /**
     * @param mixed $giftCardGroupId
     */
    public function setGiftCardGroupId($giftCardGroupId): void
    {
        $this->giftCardGroupId = $giftCardGroupId;
    }
}