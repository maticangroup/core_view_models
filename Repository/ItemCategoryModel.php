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
    private $itemCategoryImage;
    private $itemCategoryIsChildOf;
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
    public function getItemCategoryImage()
    {
        return $this->itemCategoryImage;
    }

    /**
     * @param mixed $itemCategoryImage
     */
    public function setItemCategoryImage($itemCategoryImage): void
    {
        $this->itemCategoryImage = $itemCategoryImage;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryIsChildOf()
    {
        return $this->itemCategoryIsChildOf;
    }

    /**
     * @param mixed $itemCategoryIsChildOf
     */
    public function setItemCategoryIsChildOf($itemCategoryIsChildOf): void
    {
        $this->itemCategoryIsChildOf = $itemCategoryIsChildOf;
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