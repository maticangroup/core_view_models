<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/2/2019
 * Time: 10:45 PM
 */

namespace App\FormModels\Repository;


class BrandSupplierModel
{
    private $id;
    private $name;
    private $phone;
    private $address;
    private $contactPersonId;
    private $contactPersonName;
    private $brandId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getContactPersonId()
    {
        return $this->contactPersonId;
    }

    /**
     * @param mixed $contactPersonId
     */
    public function setContactPersonId($contactPersonId): void
    {
        $this->contactPersonId = $contactPersonId;
    }

    /**
     * @return mixed
     */
    public function getContactPersonName()
    {
        return $this->contactPersonName;
    }

    /**
     * @param mixed $contactPersonName
     */
    public function setContactPersonName($contactPersonName): void
    {
        $this->contactPersonName = $contactPersonName;
    }

    /**
     * @return mixed
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param mixed $brandId
     */
    public function setBrandId($brandId): void
    {
        $this->brandId = $brandId;
    }


}