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
}