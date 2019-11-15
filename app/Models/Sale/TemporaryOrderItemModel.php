<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 15/11/19
 * Time: 22:26
 */

namespace Matican\Models\Sale;


class TemporaryOrderItemModel
{
    private $temporaryOrderItemName;
    private $temporaryOrderItemColorName;
    private $temporaryOrderItemColorHex;
    private $temporaryOrderItemBrand;
    private $temporaryOrderItemDiscountPrice;
    private $temporaryOrderItemCurrentPrice;

    /**
     * @return mixed
     */
    public function getTemporaryOrderItemName()
    {
        return $this->temporaryOrderItemName;
    }

    /**
     * @param mixed $temporaryOrderItemName
     */
    public function setTemporaryOrderItemName($temporaryOrderItemName): void
    {
        $this->temporaryOrderItemName = $temporaryOrderItemName;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderItemColorName()
    {
        return $this->temporaryOrderItemColorName;
    }

    /**
     * @param mixed $temporaryOrderItemColorName
     */
    public function setTemporaryOrderItemColorName($temporaryOrderItemColorName): void
    {
        $this->temporaryOrderItemColorName = $temporaryOrderItemColorName;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderItemColorHex()
    {
        return $this->temporaryOrderItemColorHex;
    }

    /**
     * @param mixed $temporaryOrderItemColorHex
     */
    public function setTemporaryOrderItemColorHex($temporaryOrderItemColorHex): void
    {
        $this->temporaryOrderItemColorHex = $temporaryOrderItemColorHex;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderItemBrand()
    {
        return $this->temporaryOrderItemBrand;
    }

    /**
     * @param mixed $temporaryOrderItemBrand
     */
    public function setTemporaryOrderItemBrand($temporaryOrderItemBrand): void
    {
        $this->temporaryOrderItemBrand = $temporaryOrderItemBrand;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderItemDiscountPrice()
    {
        return $this->temporaryOrderItemDiscountPrice;
    }

    /**
     * @param mixed $temporaryOrderItemDiscountPrice
     */
    public function setTemporaryOrderItemDiscountPrice($temporaryOrderItemDiscountPrice): void
    {
        $this->temporaryOrderItemDiscountPrice = $temporaryOrderItemDiscountPrice;
    }

    /**
     * @return mixed
     */
    public function getTemporaryOrderItemCurrentPrice()
    {
        return $this->temporaryOrderItemCurrentPrice;
    }

    /**
     * @param mixed $temporaryOrderItemCurrentPrice
     */
    public function setTemporaryOrderItemCurrentPrice($temporaryOrderItemCurrentPrice): void
    {
        $this->temporaryOrderItemCurrentPrice = $temporaryOrderItemCurrentPrice;
    }
}