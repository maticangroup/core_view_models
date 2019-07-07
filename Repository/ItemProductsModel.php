<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 2:59 PM
 */

namespace App\FormModels\Repository;


class ItemProductsModel
{
    /**
     * @var $itemModel ItemModel
     */
    private $itemModel;
    private $itemProducts;
    private $itemProductsProductsCount;
    private $itemProductsMinProductPrice;
    private $itemProductsMaxProductPrice;
    private $itemProductsItemType;
    private $itemProductsItemColors;

    /**
     * @return ItemModel
     */
    public function getItemModel(): ItemModel
    {
        return $this->itemModel;
    }

    /**
     * @param ItemModel $itemModel
     */
    public function setItemModel(ItemModel $itemModel): void
    {
        $this->itemModel = $itemModel;
    }

    /**
     * @return mixed
     */
    public function getItemProducts()
    {
        return $this->itemProducts;
    }

    /**
     * @param mixed $itemProducts
     */
    public function setItemProducts($itemProducts): void
    {
        $this->itemProducts = $itemProducts;
    }

    /**
     * @return mixed
     */
    public function getItemProductsProductsCount()
    {
        return $this->itemProductsProductsCount;
    }

    /**
     * @param mixed $itemProductsProductsCount
     */
    public function setItemProductsProductsCount($itemProductsProductsCount): void
    {
        $this->itemProductsProductsCount = $itemProductsProductsCount;
    }

    /**
     * @return mixed
     */
    public function getItemProductsMinProductPrice()
    {
        return $this->itemProductsMinProductPrice;
    }

    /**
     * @param mixed $itemProductsMinProductPrice
     */
    public function setItemProductsMinProductPrice($itemProductsMinProductPrice): void
    {
        $this->itemProductsMinProductPrice = $itemProductsMinProductPrice;
    }

    /**
     * @return mixed
     */
    public function getItemProductsMaxProductPrice()
    {
        return $this->itemProductsMaxProductPrice;
    }

    /**
     * @param mixed $itemProductsMaxProductPrice
     */
    public function setItemProductsMaxProductPrice($itemProductsMaxProductPrice): void
    {
        $this->itemProductsMaxProductPrice = $itemProductsMaxProductPrice;
    }

    /**
     * @return mixed
     */
    public function getItemProductsItemType()
    {
        return $this->itemProductsItemType;
    }

    /**
     * @param mixed $itemProductsItemType
     */
    public function setItemProductsItemType($itemProductsItemType): void
    {
        $this->itemProductsItemType = $itemProductsItemType;
    }

    /**
     * @return mixed
     */
    public function getItemProductsItemColors()
    {
        return $this->itemProductsItemColors;
    }

    /**
     * @param mixed $itemProductsItemColors
     */
    public function setItemProductsItemColors($itemProductsItemColors): void
    {
        $this->itemProductsItemColors = $itemProductsItemColors;
    }


}