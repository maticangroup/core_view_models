<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:44 PM
 */

namespace App\FormModels\Accounting;


class GiftCardGroupStatusModel
{
    private $giftCardGroupStatusId;
    private $giftCardGroupStatusName;
    private $giftCardGroupStatusMachineName;
    private $giftCardGroupStatusColor;
    private $giftCardGroupId;

    /**
     * @return mixed
     */
    public function getGiftCardGroupStatusId()
    {
        return $this->giftCardGroupStatusId;
    }

    /**
     * @param mixed $giftCardGroupStatusId
     */
    public function setGiftCardGroupStatusId($giftCardGroupStatusId): void
    {
        $this->giftCardGroupStatusId = $giftCardGroupStatusId;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupStatusName()
    {
        return $this->giftCardGroupStatusName;
    }

    /**
     * @param mixed $giftCardGroupStatusName
     */
    public function setGiftCardGroupStatusName($giftCardGroupStatusName): void
    {
        $this->giftCardGroupStatusName = $giftCardGroupStatusName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupStatusMachineName()
    {
        return $this->giftCardGroupStatusMachineName;
    }

    /**
     * @param mixed $giftCardGroupStatusMachineName
     */
    public function setGiftCardGroupStatusMachineName($giftCardGroupStatusMachineName): void
    {
        $this->giftCardGroupStatusMachineName = $giftCardGroupStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupStatusColor()
    {
        return $this->giftCardGroupStatusColor;
    }

    /**
     * @param mixed $giftCardGroupStatusColor
     */
    public function setGiftCardGroupStatusColor($giftCardGroupStatusColor): void
    {
        $this->giftCardGroupStatusColor = $giftCardGroupStatusColor;
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