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
    private $itemBrand;
    private $itemType;
    private $itemCategories;
    private $itemSpecGroups;
    private $itemFlexibleContent;
    private $itemBarcodes;
    private $itemColors;
    private $itemGuarantees;
    private $itemSuppliers;
    private $itemImages;

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
    public function getItemBrand()
    {
        return $this->itemBrand;
    }

    /**
     * @param mixed $itemBrand
     */
    public function setItemBrand($itemBrand): void
    {
        $this->itemBrand = $itemBrand;
    }

    /**
     * @return mixed
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @param mixed $itemType
     */
    public function setItemType($itemType): void
    {
        $this->itemType = $itemType;
    }

    /**
     * @return mixed
     */
    public function getItemCategories()
    {
        return $this->itemCategories;
    }

    /**
     * @param mixed $itemCategories
     */
    public function setItemCategories($itemCategories): void
    {
        $this->itemCategories = $itemCategories;
    }

    /**
     * @return mixed
     */
    public function getItemSpecGroups()
    {
        return $this->itemSpecGroups;
    }

    /**
     * @param mixed $itemSpecGroups
     */
    public function setItemSpecGroups($itemSpecGroups): void
    {
        $this->itemSpecGroups = $itemSpecGroups;
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
}