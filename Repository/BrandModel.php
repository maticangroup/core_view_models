<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 5:29 PM
 */

namespace App\FormModels\Repository;


class BrandModel
{
    private $brandID;
    private $brandName;
    private $brandSuppliers;
    private $brandImageUrl;
    private $brandImageAlt;

    /**
     * @return mixed
     */
    public function getBrandID()
    {
        return $this->brandID;
    }

    /**
     * @param mixed $brandID
     */
    public function setBrandID($brandID): void
    {
        $this->brandID = $brandID;
    }

    /**
     * @return mixed
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param mixed $brandName
     */
    public function setBrandName($brandName): void
    {
        $this->brandName = $brandName;
    }

    /**
     * @return mixed
     */
    public function getBrandSuppliers()
    {
        return $this->brandSuppliers;
    }

    /**
     * @param mixed $brandSuppliers
     */
    public function setBrandSuppliers($brandSuppliers): void
    {
        $this->brandSuppliers = $brandSuppliers;
    }

    /**
     * @return mixed
     */
    public function getBrandImageUrl()
    {
        return $this->brandImageUrl;
    }

    /**
     * @param mixed $brandImageUrl
     */
    public function setBrandImageUrl($brandImageUrl): void
    {
        $this->brandImageUrl = $brandImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBrandImageAlt()
    {
        return $this->brandImageAlt;
    }

    /**
     * @param mixed $brandImageAlt
     */
    public function setBrandImageAlt($brandImageAlt): void
    {
        $this->brandImageAlt = $brandImageAlt;
    }


}