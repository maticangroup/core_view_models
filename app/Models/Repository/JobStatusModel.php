<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 10/11/19
 * Time: 17:37
 */

namespace Matican\Models\Repository;


class JobStatusModel
{
    private $name;
    private $machine_name;

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


}