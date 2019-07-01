<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 6:09 PM
 */

namespace App\FormModels\Repository;


class ItemColorModel
{
    private $ItemColorID;
    private $ItemColorName;
    private $ItemColorHex;
    private $ItemColorStatus;

    /**
     * @return mixed
     */
    public function getItemColorID()
    {
        return $this->ItemColorID;
    }

    /**
     * @param mixed $ItemColorID
     */
    public function setItemColorID($ItemColorID): void
    {
        $this->ItemColorID = $ItemColorID;
    }

    /**
     * @return mixed
     */
    public function getItemColorName()
    {
        return $this->ItemColorName;
    }

    /**
     * @param mixed $ItemColorName
     */
    public function setItemColorName($ItemColorName): void
    {
        $this->ItemColorName = $ItemColorName;
    }

    /**
     * @return mixed
     */
    public function getItemColorHex()
    {
        return $this->ItemColorHex;
    }

    /**
     * @param mixed $ItemColorHex
     */
    public function setItemColorHex($ItemColorHex): void
    {
        $this->ItemColorHex = $ItemColorHex;
    }

    /**
     * @return mixed
     */
    public function getItemColorStatus()
    {
        return $this->ItemColorStatus;
    }

    /**
     * @param mixed $ItemColorStatus
     */
    public function setItemColorStatus($ItemColorStatus): void
    {
        $this->ItemColorStatus = $ItemColorStatus;
    }
}