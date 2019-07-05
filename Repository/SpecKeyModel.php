<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 7:24 PM
 */

namespace App\FormModels\Repository;


class SpecKeyModel
{
    private $specKeyID;
    private $specKeyName;
    private $specKeyDefaultValue;
    private $specKeySpecGroupID;
    private $specKeySpecGroupName;
    private $specKeyDisplayOrder;
    private $specKeyIsSpecial = false;
    private $specKeyIsChecked;

    /**
     * @return mixed
     */
    public function getSpecKeyID()
    {
        return $this->specKeyID;
    }

    /**
     * @param mixed $specKeyID
     */
    public function setSpecKeyID($specKeyID): void
    {
        $this->specKeyID = $specKeyID;
    }

    /**
     * @return mixed
     */
    public function getSpecKeyName()
    {
        return $this->specKeyName;
    }

    /**
     * @param mixed $specKeyName
     */
    public function setSpecKeyName($specKeyName): void
    {
        $this->specKeyName = $specKeyName;
    }

    /**
     * @return mixed
     */
    public function getSpecKeyDefaultValue()
    {
        return $this->specKeyDefaultValue;
    }

    /**
     * @param mixed $specKeyDefaultValue
     */
    public function setSpecKeyDefaultValue($specKeyDefaultValue): void
    {
        $this->specKeyDefaultValue = $specKeyDefaultValue;
    }

    /**
     * @return mixed
     */
    public function getSpecKeySpecGroupID()
    {
        return $this->specKeySpecGroupID;
    }

    /**
     * @param mixed $specKeySpecGroupID
     */
    public function setSpecKeySpecGroupID($specKeySpecGroupID): void
    {
        $this->specKeySpecGroupID = $specKeySpecGroupID;
    }

    /**
     * @return mixed
     */
    public function getSpecKeySpecGroupName()
    {
        return $this->specKeySpecGroupName;
    }

    /**
     * @param mixed $specKeySpecGroupName
     */
    public function setSpecKeySpecGroupName($specKeySpecGroupName): void
    {
        $this->specKeySpecGroupName = $specKeySpecGroupName;
    }

    /**
     * @return mixed
     */
    public function getSpecKeyDisplayOrder()
    {
        return $this->specKeyDisplayOrder;
    }

    /**
     * @param mixed $specKeyDisplayOrder
     */
    public function setSpecKeyDisplayOrder($specKeyDisplayOrder): void
    {
        $this->specKeyDisplayOrder = $specKeyDisplayOrder;
    }

    /**
     * @return mixed
     */
    public function getSpecKeyIsSpecial()
    {
        return $this->specKeyIsSpecial;
    }

    /**
     * @param mixed $specKeyIsSpecial
     */
    public function setSpecKeyIsSpecial($specKeyIsSpecial): void
    {
        $this->specKeyIsSpecial = $specKeyIsSpecial;
    }

    /**
     * @return mixed
     */
    public function getSpecKeyIsChecked()
    {
        return $this->specKeyIsChecked;
    }

    /**
     * @param mixed $specKeyIsChecked
     */
    public function setSpecKeyIsChecked($specKeyIsChecked): void
    {
        $this->specKeyIsChecked = $specKeyIsChecked;
    }

}