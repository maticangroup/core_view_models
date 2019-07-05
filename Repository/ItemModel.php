<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 6:11 PM
 */

namespace App\FormModels\Repository;


class ItemModel
{
    private $itemID;
    private $itemName;
    private $itemBrandId;
    private $itemTypeId;
    private $itemCategoriesIds;
    private $itemSpecGroupsKeys;
    private $itemFlexibleContent;
    private $itemBarcodes;
    private $itemColors;
    private $itemGuarantees;
    private $itemSuppliers;
    private $itemImages;
    private $itemStatusId;
    private $itemCreatedDate;
    private $itemUpdatedDate;

    /**
     * @return mixed
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * @param mixed $itemID
     */
    public function setItemID($itemID): void
    {
        $this->itemID = $itemID;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getItemBrandId()
    {
        return $this->itemBrandId;
    }

    /**
     * @param mixed $itemBrandId
     */
    public function setItemBrandId($itemBrandId): void
    {
        $this->itemBrandId = $itemBrandId;
    }

    /**
     * @return mixed
     */
    public function getItemTypeId()
    {
        return $this->itemTypeId;
    }

    /**
     * @param mixed $itemTypeId
     */
    public function setItemTypeId($itemTypeId): void
    {
        $this->itemTypeId = $itemTypeId;
    }

    /**
     * @return mixed
     */
    public function getItemCategoriesIds()
    {
        return $this->itemCategoriesIds;
    }

    /**
     * @param mixed $itemCategoriesIds
     */
    public function setItemCategoriesIds($itemCategoriesIds): void
    {
        $this->itemCategoriesIds = $itemCategoriesIds;
    }

    /**
     * @return mixed
     */
    public function getItemSpecGroupsKeys()
    {
        return $this->itemSpecGroupsKeys;
    }

    /**
     * @param mixed $itemSpecGroupsKeys
     */
    public function setItemSpecGroupsKeys($itemSpecGroupsKeys): void
    {
        $this->itemSpecGroupsKeys = $itemSpecGroupsKeys;
    }

    /**
     * @return mixed
     */
    public function getItemFlexibleContent()
    {
        return $this->itemFlexibleContent;
    }

    /**
     * @param mixed $itemFlexibleContent
     */
    public function setItemFlexibleContent($itemFlexibleContent): void
    {
        $this->itemFlexibleContent = $itemFlexibleContent;
    }

    /**
     * @return mixed
     */
    public function getItemBarcodes()
    {
        return $this->itemBarcodes;
    }

    /**
     * @param mixed $itemBarcodes
     */
    public function setItemBarcodes($itemBarcodes): void
    {
        $this->itemBarcodes = $itemBarcodes;
    }

    /**
     * @return mixed
     */
    public function getItemColors()
    {
        return $this->itemColors;
    }

    /**
     * @param mixed $itemColors
     */
    public function setItemColors($itemColors): void
    {
        $this->itemColors = $itemColors;
    }

    /**
     * @return mixed
     */
    public function getItemGuarantees()
    {
        return $this->itemGuarantees;
    }

    /**
     * @param mixed $itemGuarantees
     */
    public function setItemGuarantees($itemGuarantees): void
    {
        $this->itemGuarantees = $itemGuarantees;
    }

    /**
     * @return mixed
     */
    public function getItemSuppliers()
    {
        return $this->itemSuppliers;
    }

    /**
     * @param mixed $itemSuppliers
     */
    public function setItemSuppliers($itemSuppliers): void
    {
        $this->itemSuppliers = $itemSuppliers;
    }

    /**
     * @return mixed
     */
    public function getItemImages()
    {
        return $this->itemImages;
    }

    /**
     * @param mixed $itemImages
     */
    public function setItemImages($itemImages): void
    {
        $this->itemImages = $itemImages;
    }

    /**
     * @return mixed
     */
    public function getItemStatusId()
    {
        return $this->itemStatusId;
    }

    /**
     * @param mixed $itemStatusId
     */
    public function setItemStatusId($itemStatusId): void
    {
        $this->itemStatusId = $itemStatusId;
    }

    /**
     * @return mixed
     */
    public function getItemCreatedDate()
    {
        return $this->itemCreatedDate;
    }

    /**
     * @param mixed $itemCreatedDate
     */
    public function setItemCreatedDate($itemCreatedDate): void
    {
        $this->itemCreatedDate = $itemCreatedDate;
    }

    /**
     * @return mixed
     */
    public function getItemUpdatedDate()
    {
        return $this->itemUpdatedDate;
    }

    /**
     * @param mixed $itemUpdatedDate
     */
    public function setItemUpdatedDate($itemUpdatedDate): void
    {
        $this->itemUpdatedDate = $itemUpdatedDate;
    }

}