<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 2:29 PM
 */

namespace App\FormModels\Inventory;


class InventoryDeedModel
{
    private $inventoryDeedId;
    private $inventoryDeedName;
    private $inventoryDeedSerial;
    private $inventoryDeedFromId;
    private $inventoryDeedFromName;
    private $inventoryDeedToId;
    private $inventoryDeedToName;
    private $inventoryDeedDescription;
    private $inventoryDeedCreateDate;
    private $inventoryDeedStatus;
    private $inventoryDeedFromQueue;
    private $inventoryDeedToQueue;
    private $inventoryDeedProducts;
    private $inventoryDeedConfirmDate;
    private $inventoryDeedCreatePerson;
    private $inventoryDeedConfirmPerson;

    /**
     * @return mixed
     */
    public function getInventoryDeedId()
    {
        return $this->inventoryDeedId;
    }

    /**
     * @param mixed $inventoryDeedId
     */
    public function setInventoryDeedId($inventoryDeedId): void
    {
        $this->inventoryDeedId = $inventoryDeedId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedName()
    {
        return $this->inventoryDeedName;
    }

    /**
     * @param mixed $inventoryDeedName
     */
    public function setInventoryDeedName($inventoryDeedName): void
    {
        $this->inventoryDeedName = $inventoryDeedName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedSerial()
    {
        return $this->inventoryDeedSerial;
    }

    /**
     * @param mixed $inventoryDeedSerial
     */
    public function setInventoryDeedSerial($inventoryDeedSerial): void
    {
        $this->inventoryDeedSerial = $inventoryDeedSerial;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromId()
    {
        return $this->inventoryDeedFromId;
    }

    /**
     * @param mixed $inventoryDeedFromId
     */
    public function setInventoryDeedFromId($inventoryDeedFromId): void
    {
        $this->inventoryDeedFromId = $inventoryDeedFromId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromName()
    {
        return $this->inventoryDeedFromName;
    }

    /**
     * @param mixed $inventoryDeedFromName
     */
    public function setInventoryDeedFromName($inventoryDeedFromName): void
    {
        $this->inventoryDeedFromName = $inventoryDeedFromName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToId()
    {
        return $this->inventoryDeedToId;
    }

    /**
     * @param mixed $inventoryDeedToId
     */
    public function setInventoryDeedToId($inventoryDeedToId): void
    {
        $this->inventoryDeedToId = $inventoryDeedToId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToName()
    {
        return $this->inventoryDeedToName;
    }

    /**
     * @param mixed $inventoryDeedToName
     */
    public function setInventoryDeedToName($inventoryDeedToName): void
    {
        $this->inventoryDeedToName = $inventoryDeedToName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedDescription()
    {
        return $this->inventoryDeedDescription;
    }

    /**
     * @param mixed $inventoryDeedDescription
     */
    public function setInventoryDeedDescription($inventoryDeedDescription): void
    {
        $this->inventoryDeedDescription = $inventoryDeedDescription;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedCreateDate()
    {
        return $this->inventoryDeedCreateDate;
    }

    /**
     * @param mixed $inventoryDeedCreateDate
     */
    public function setInventoryDeedCreateDate($inventoryDeedCreateDate): void
    {
        $this->inventoryDeedCreateDate = $inventoryDeedCreateDate;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedStatus()
    {
        return $this->inventoryDeedStatus;
    }

    /**
     * @param mixed $inventoryDeedStatus
     */
    public function setInventoryDeedStatus($inventoryDeedStatus): void
    {
        $this->inventoryDeedStatus = $inventoryDeedStatus;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromQueue()
    {
        return $this->inventoryDeedFromQueue;
    }

    /**
     * @param mixed $inventoryDeedFromQueue
     */
    public function setInventoryDeedFromQueue($inventoryDeedFromQueue): void
    {
        $this->inventoryDeedFromQueue = $inventoryDeedFromQueue;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToQueue()
    {
        return $this->inventoryDeedToQueue;
    }

    /**
     * @param mixed $inventoryDeedToQueue
     */
    public function setInventoryDeedToQueue($inventoryDeedToQueue): void
    {
        $this->inventoryDeedToQueue = $inventoryDeedToQueue;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedProducts()
    {
        return $this->inventoryDeedProducts;
    }

    /**
     * @param mixed $inventoryDeedProducts
     */
    public function setInventoryDeedProducts($inventoryDeedProducts): void
    {
        $this->inventoryDeedProducts = $inventoryDeedProducts;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedConfirmDate()
    {
        return $this->inventoryDeedConfirmDate;
    }

    /**
     * @param mixed $inventoryDeedConfirmDate
     */
    public function setInventoryDeedConfirmDate($inventoryDeedConfirmDate): void
    {
        $this->inventoryDeedConfirmDate = $inventoryDeedConfirmDate;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedCreatePerson()
    {
        return $this->inventoryDeedCreatePerson;
    }

    /**
     * @param mixed $inventoryDeedCreatePerson
     */
    public function setInventoryDeedCreatePerson($inventoryDeedCreatePerson): void
    {
        $this->inventoryDeedCreatePerson = $inventoryDeedCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedConfirmPerson()
    {
        return $this->inventoryDeedConfirmPerson;
    }

    /**
     * @param mixed $inventoryDeedConfirmPerson
     */
    public function setInventoryDeedConfirmPerson($inventoryDeedConfirmPerson): void
    {
        $this->inventoryDeedConfirmPerson = $inventoryDeedConfirmPerson;
    }
}