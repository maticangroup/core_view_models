<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 12:05 PM
 */

namespace App\FormModels\Repository;


use Matican\Core\DataTypes\Text;
use Matican\Core\DataTypes\ZipCode;

class LocationModel
{
    /**
     * @var integer
     */
    private $countryId;
    /**
     * @var integer
     */
    private $provinceId;
    /**
     * @var integer
     */
    private $cityId;
    /**
     * @var integer
     */
    private $districtId;
    /**
     * @var string
     */
    private $postalCode;
    /**
     * @var string
     */
    private $address;
    /**
     * @var string
     */
    private $geoPointLat;
    /**
     * @var string
     */
    private $geoPointLng;
    /**
     * @var integer
     */
    private $personId;
    /**
     * @var integer
     */
    private $contactPersonId;

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId(int $countryId): void
    {
        $this->countryId = $countryId;
    }

    /**
     * @return int
     */
    public function getProvinceId(): int
    {
        return $this->provinceId;
    }

    /**
     * @param int $provinceId
     */
    public function setProvinceId(int $provinceId): void
    {
        $this->provinceId = $provinceId;
    }

    /**
     * @return int
     */
    public function getCityId(): int
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     */
    public function setCityId(int $cityId): void
    {
        $this->cityId = $cityId;
    }

    /**
     * @return int
     */
    public function getDistrictId(): int
    {
        return $this->districtId;
    }

    /**
     * @param int $districtId
     */
    public function setDistrictId(int $districtId): void
    {
        $this->districtId = $districtId;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getGeoPointLat(): string
    {
        return $this->geoPointLat;
    }

    /**
     * @param string $geoPointLat
     */
    public function setGeoPointLat(string $geoPointLat): void
    {
        $this->geoPointLat = $geoPointLat;
    }

    /**
     * @return string
     */
    public function getGeoPointLng(): string
    {
        return $this->geoPointLng;
    }

    /**
     * @param string $geoPointLng
     */
    public function setGeoPointLng(string $geoPointLng): void
    {
        $this->geoPointLng = $geoPointLng;
    }

    /**
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }

    /**
     * @param int $personId
     */
    public function setPersonId(int $personId): void
    {
        $this->personId = $personId;
    }

    /**
     * @return int
     */
    public function getContactPersonId(): int
    {
        return $this->contactPersonId;
    }

    /**
     * @param int $contactPersonId
     */
    public function setContactPersonId(int $contactPersonId): void
    {
        $this->contactPersonId = $contactPersonId;
    }



}