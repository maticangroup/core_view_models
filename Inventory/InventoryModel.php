<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 11:56 AM
 */

namespace App\FormModels\Inventory;


class InventoryModel
{
    private $inventoryId;
    private $inventoryKeeperId;
    private $inventoryKeeperName;
    private $inventoryPhones;
    private $inventoryLocation;
    private $inventoryProducts;
    private $inventoryDeeds;
    private $inventoryStatus;

    /**
     * @return mixed
     */
    public function getInventoryId()
    {
        return $this->inventoryId;
    }

    /**
     * @param mixed $inventoryId
     */
    public function setInventoryId($inventoryId): void
    {
        $this->inventoryId = $inventoryId;
    }

    /**
     * @return mixed
     */
    public function getInventoryKeeperId()
    {
        return $this->inventoryKeeperId;
    }

    /**
     * @param mixed $inventoryKeeperId
     */
    public function setInventoryKeeperId($inventoryKeeperId): void
    {
        $this->inventoryKeeperId = $inventoryKeeperId;
    }

    /**
     * @return mixed
     */
    public function getInventoryKeeperName()
    {
        return $this->inventoryKeeperName;
    }

    /**
     * @param mixed $inventoryKeeperName
     */
    public function setInventoryKeeperName($inventoryKeeperName): void
    {
        $this->inventoryKeeperName = $inventoryKeeperName;
    }

    /**
     * @return mixed
     */
    public function getInventoryPhones()
    {
        return $this->inventoryPhones;
    }

    /**
     * @param mixed $inventoryPhones
     */
    public function setInventoryPhones($inventoryPhones): void
    {
        $this->inventoryPhones = $inventoryPhones;
    }

    /**
     * @return mixed
     */
    public function getInventoryLocation()
    {
        return $this->inventoryLocation;
    }

    /**
     * @param mixed $inventoryLocation
     */
    public function setInventoryLocation($inventoryLocation): void
    {
        $this->inventoryLocation = $inventoryLocation;
    }

    /**
     * @return mixed
     */
    public function getInventoryProducts()
    {
        return $this->inventoryProducts;
    }

    /**
     * @param mixed $inventoryProducts
     */
    public function setInventoryProducts($inventoryProducts): void
    {
        $this->inventoryProducts = $inventoryProducts;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeeds()
    {
        return $this->inventoryDeeds;
    }

    /**
     * @param mixed $inventoryDeeds
     */
    public function setInventoryDeeds($inventoryDeeds): void
    {
        $this->inventoryDeeds = $inventoryDeeds;
    }

    /**
     * @return mixed
     */
    public function getInventoryStatus()
    {
        return $this->inventoryStatus;
    }

    /**
     * @param mixed $inventoryStatus
     */
    public function setInventoryStatus($inventoryStatus): void
    {
        $this->inventoryStatus = $inventoryStatus;
    }
}