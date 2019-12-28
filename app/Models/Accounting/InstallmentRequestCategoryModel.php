<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 28/12/19
 * Time: 20:55
 */

namespace Matican\Models\Accounting;


class InstallmentRequestCategoryModel
{
    private $name;
    private $machine_name;
    private $color;

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
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * @param mixed $machine_name
     */
    public function setMachineName($machine_name): void
    {
        $this->machine_name = $machine_name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }
}