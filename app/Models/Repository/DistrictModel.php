<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 14/11/19
 * Time: 15:31
 */

namespace Matican\Models\Repository;


class DistrictModel
{
    private $cityId;
    private $districtId;
    private $districtName;

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId): void
    {
        $this->cityId = $cityId;
    }

    /**
     * @return mixed
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * @param mixed $districtId
     */
    public function setDistrictId($districtId): void
    {
        $this->districtId = $districtId;
    }

    /**
     * @return mixed
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * @param mixed $districtName
     */
    public function setDistrictName($districtName): void
    {
        $this->districtName = $districtName;
    }

}