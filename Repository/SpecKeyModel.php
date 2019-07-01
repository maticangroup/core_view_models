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
    private $specKeySpecGoupID;
    private $specKeySpecGoupName;
    private $specKeyDisplayOrder;
    private $specKeyIsSpecial;

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
    public function getSpecKeySpecGoupID()
    {
        return $this->specKeySpecGoupID;
    }

    /**
     * @param mixed $specKeySpecGoupID
     */
    public function setSpecKeySpecGoupID($specKeySpecGoupID): void
    {
        $this->specKeySpecGoupID = $specKeySpecGoupID;
    }

    /**
     * @return mixed
     */
    public function getSpecKeySpecGoupName()
    {
        return $this->specKeySpecGoupName;
    }

    /**
     * @param mixed $specKeySpecGoupName
     */
    public function setSpecKeySpecGoupName($specKeySpecGoupName): void
    {
        $this->specKeySpecGoupName = $specKeySpecGoupName;
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


}