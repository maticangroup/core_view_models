<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 10/11/19
 * Time: 12:01
 */

namespace Matican\Models\Repository;


class CityModel
{
    private $provinceID;
    private $cityName;
    private $cityID;


    /**
     * @return mixed
     */
    public function getProvinceID()
    {
        return $this->provinceID;
    }

    /**
     * @param mixed $provinceID
     */
    public function setProvinceID($provinceID): void
    {
        $this->provinceID = $provinceID;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName): void
    {
        $this->cityName = $cityName;
    }

    /**
     * @return mixed
     */
    public function getCityID()
    {
        return $this->cityID;
    }

    /**
     * @param mixed $cityID
     */
    public function setCityID($cityID): void
    {
        $this->cityID = $cityID;
    }


}