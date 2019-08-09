<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/6/2019
 * Time: 7:41 PM
 */

namespace Matican\Models\Repository;


class ItemCategoriesModel
{
    private $itemId;
    private $itemCategoriesIds;

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId): void
    {
        $this->itemId = $itemId;
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
}