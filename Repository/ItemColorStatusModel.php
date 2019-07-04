<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 11:18 AM
 */

namespace App\FormModels\Repository;


class ItemColorStatusModel
{
    private $id;
    private $name;
    private $machinName;
    private $colorId;

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
    public function getMachinName()
    {
        return $this->machinName;
    }

    /**
     * @param mixed $machinName
     */
    public function setMachinName($machinName): void
    {
        $this->machinName = $machinName;
    }

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * @param mixed $colorId
     */
    public function setColorId($colorId): void
    {
        $this->colorId = $colorId;
    }
}