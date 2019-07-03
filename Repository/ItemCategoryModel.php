<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 6:06 PM
 */

namespace App\FormModels\Repository;


class ItemCategoryModel
{
    private $itemCategoryID;
    private $itemCategoryName;
    private $itemCategoryImageUrl;
    private $itemCategoryImageAlt;
    private $itemCategoryParentId;
    private $itemCategoryParentName;
    private $itemCategorySize;
    private $itemCategoryDescription;
    private $itemSpecGroups;

    /**
     * @return mixed
     */
    public function getItemCategoryID()
    {
        return $this->itemCategoryID;
    }

    /**
     * @param mixed $itemCategoryID
     */
    public function setItemCategoryID($itemCategoryID): void
    {
        $this->itemCategoryID = $itemCategoryID;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryName()
    {
        return $this->itemCategoryName;
    }

    /**
     * @param mixed $itemCategoryName
     */
    public function setItemCategoryName($itemCategoryName): void
    {
        $this->itemCategoryName = $itemCategoryName;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryImageUrl()
    {
        return $this->itemCategoryImageUrl;
    }

    /**
     * @param mixed $itemCategoryImageUrl
     */
    public function setItemCategoryImageUrl($itemCategoryImageUrl): void
    {
        $this->itemCategoryImageUrl = $itemCategoryImageUrl;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryImageAlt()
    {
        return $this->itemCategoryImageAlt;
    }

    /**
     * @param mixed $itemCategoryImageAlt
     */
    public function setItemCategoryImageAlt($itemCategoryImageAlt): void
    {
        $this->itemCategoryImageAlt = $itemCategoryImageAlt;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryParentId()
    {
        return $this->itemCategoryParentId;
    }

    /**
     * @param mixed $itemCategoryParentId
     */
    public function setItemCategoryParentId($itemCategoryParentId): void
    {
        $this->itemCategoryParentId = $itemCategoryParentId;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryParentName()
    {
        return $this->itemCategoryParentName;
    }

    /**
     * @param mixed $itemCategoryParentName
     */
    public function setItemCategoryParentName($itemCategoryParentName): void
    {
        $this->itemCategoryParentName = $itemCategoryParentName;
    }

    /**
     * @return mixed
     */
    public function getItemCategorySize()
    {
        return $this->itemCategorySize;
    }

    /**
     * @param mixed $itemCategorySize
     */
    public function setItemCategorySize($itemCategorySize): void
    {
        $this->itemCategorySize = $itemCategorySize;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryDescription()
    {
        return $this->itemCategoryDescription;
    }

    /**
     * @param mixed $itemCategoryDescription
     */
    public function setItemCategoryDescription($itemCategoryDescription): void
    {
        $this->itemCategoryDescription = $itemCategoryDescription;
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

}