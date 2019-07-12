<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 11:35 AM
 */

namespace App\FormModels\Delivery;


class QueueModel
{
    private $queueId;
    private $queueFrom;
    private $queueTo;
    private $queueCapacity;
    private $queueStatus;
    private $weekDayId;
    private $deliveryMethodId;

    /**
     * @return mixed
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     * @param mixed $queueId
     */
    public function setQueueId($queueId): void
    {
        $this->queueId = $queueId;
    }

    /**
     * @return mixed
     */
    public function getQueueFrom()
    {
        return $this->queueFrom;
    }

    /**
     * @param mixed $queueFrom
     */
    public function setQueueFrom($queueFrom): void
    {
        $this->queueFrom = $queueFrom;
    }

    /**
     * @return mixed
     */
    public function getQueueTo()
    {
        return $this->queueTo;
    }

    /**
     * @param mixed $queueTo
     */
    public function setQueueTo($queueTo): void
    {
        $this->queueTo = $queueTo;
    }

    /**
     * @return mixed
     */
    public function getQueueCapacity()
    {
        return $this->queueCapacity;
    }

    /**
     * @param mixed $queueCapacity
     */
    public function setQueueCapacity($queueCapacity): void
    {
        $this->queueCapacity = $queueCapacity;
    }

    /**
     * @return mixed
     */
    public function getQueueStatus()
    {
        return $this->queueStatus;
    }

    /**
     * @param mixed $queueStatus
     */
    public function setQueueStatus($queueStatus): void
    {
        $this->queueStatus = $queueStatus;
    }

    /**
     * @return mixed
     */
    public function getWeekDayId()
    {
        return $this->weekDayId;
    }

    /**
     * @param mixed $weekDayId
     */
    public function setWeekDayId($weekDayId): void
    {
        $this->weekDayId = $weekDayId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodId()
    {
        return $this->deliveryMethodId;
    }

    /**
     * @param mixed $deliveryMethodId
     */
    public function setDeliveryMethodId($deliveryMethodId): void
    {
        $this->deliveryMethodId = $deliveryMethodId;
    }
}