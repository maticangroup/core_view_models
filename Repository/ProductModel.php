<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 2:44 PM
 */

namespace App\FormModels\Repository;


class ProductModel
{
    private $productGuaranteeId;
    private $productGuaranteeName;
    private $productSupplierId;
    private $productSupplierName;
    private $productCurrentPrice;
    private $productDiscountPrice;
    private $productBasePrice;
    private $productSerial;
    private $productQuantity;
    private $productTypeId;
    private $productTypeName;
    private $productTypeMachineName;
    private $productTypeColorName;
    private $productTypeColorHex;
    private $productTypeColorId;
    private $productItemId;
    private $productItemName;

    /**
     * @return mixed
     */
    public function getProductGuaranteeId()
    {
        return $this->productGuaranteeId;
    }

    /**
     * @param mixed $productGuaranteeId
     */
    public function setProductGuaranteeId($productGuaranteeId): void
    {
        $this->productGuaranteeId = $productGuaranteeId;
    }

    /**
     * @return mixed
     */
    public function getProductGuaranteeName()
    {
        return $this->productGuaranteeName;
    }

    /**
     * @param mixed $productGuaranteeName
     */
    public function setProductGuaranteeName($productGuaranteeName): void
    {
        $this->productGuaranteeName = $productGuaranteeName;
    }

    /**
     * @return mixed
     */
    public function getProductSupplierId()
    {
        return $this->productSupplierId;
    }

    /**
     * @param mixed $productSupplierId
     */
    public function setProductSupplierId($productSupplierId): void
    {
        $this->productSupplierId = $productSupplierId;
    }

    /**
     * @return mixed
     */
    public function getProductSupplierName()
    {
        return $this->productSupplierName;
    }

    /**
     * @param mixed $productSupplierName
     */
    public function setProductSupplierName($productSupplierName): void
    {
        $this->productSupplierName = $productSupplierName;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentPrice()
    {
        return $this->productCurrentPrice;
    }

    /**
     * @param mixed $productCurrentPrice
     */
    public function setProductCurrentPrice($productCurrentPrice): void
    {
        $this->productCurrentPrice = $productCurrentPrice;
    }

    /**
     * @return mixed
     */
    public function getProductDiscountPrice()
    {
        return $this->productDiscountPrice;
    }

    /**
     * @param mixed $productDiscountPrice
     */
    public function setProductDiscountPrice($productDiscountPrice): void
    {
        $this->productDiscountPrice = $productDiscountPrice;
    }

    /**
     * @return mixed
     */
    public function getProductBasePrice()
    {
        return $this->productBasePrice;
    }

    /**
     * @param mixed $productBasePrice
     */
    public function setProductBasePrice($productBasePrice): void
    {
        $this->productBasePrice = $productBasePrice;
    }

    /**
     * @return mixed
     */
    public function getProductSerial()
    {
        return $this->productSerial;
    }

    /**
     * @param mixed $productSerial
     */
    public function setProductSerial($productSerial): void
    {
        $this->productSerial = $productSerial;
    }

    /**
     * @return mixed
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * @param mixed $productQuantity
     */
    public function setProductQuantity($productQuantity): void
    {
        $this->productQuantity = $productQuantity;
    }

    /**
     * @return mixed
     */
    public function getProductTypeId()
    {
        return $this->productTypeId;
    }

    /**
     * @param mixed $productTypeId
     */
    public function setProductTypeId($productTypeId): void
    {
        $this->productTypeId = $productTypeId;
    }

    /**
     * @return mixed
     */
    public function getProductTypeName()
    {
        return $this->productTypeName;
    }

    /**
     * @param mixed $productTypeName
     */
    public function setProductTypeName($productTypeName): void
    {
        $this->productTypeName = $productTypeName;
    }

    /**
     * @return mixed
     */
    public function getProductTypeMachineName()
    {
        return $this->productTypeMachineName;
    }

    /**
     * @param mixed $productTypeMachineName
     */
    public function setProductTypeMachineName($productTypeMachineName): void
    {
        $this->productTypeMachineName = $productTypeMachineName;
    }

    /**
     * @return mixed
     */
    public function getProductTypeColorName()
    {
        return $this->productTypeColorName;
    }

    /**
     * @param mixed $productTypeColorName
     */
    public function setProductTypeColorName($productTypeColorName): void
    {
        $this->productTypeColorName = $productTypeColorName;
    }

    /**
     * @return mixed
     */
    public function getProductTypeColorHex()
    {
        return $this->productTypeColorHex;
    }

    /**
     * @param mixed $productTypeColorHex
     */
    public function setProductTypeColorHex($productTypeColorHex): void
    {
        $this->productTypeColorHex = $productTypeColorHex;
    }

    /**
     * @return mixed
     */
    public function getProductTypeColorId()
    {
        return $this->productTypeColorId;
    }

    /**
     * @param mixed $productTypeColorId
     */
    public function setProductTypeColorId($productTypeColorId): void
    {
        $this->productTypeColorId = $productTypeColorId;
    }

    /**
     * @return mixed
     */
    public function getProductItemId()
    {
        return $this->productItemId;
    }

    /**
     * @param mixed $productItemId
     */
    public function setProductItemId($productItemId): void
    {
        $this->productItemId = $productItemId;
    }

    /**
     * @return mixed
     */
    public function getProductItemName()
    {
        return $this->productItemName;
    }

    /**
     * @param mixed $productItemName
     */
    public function setProductItemName($productItemName): void
    {
        $this->productItemName = $productItemName;
    }
}