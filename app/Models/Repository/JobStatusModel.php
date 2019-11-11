<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 11/11/2019
 * Time: 10:49 AM
 */

namespace Matican\Models\Repository;


class JobStatusModel
{

    private $name;
    private $machineName;

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
        return $this->machineName;
    }

    /**
     * @param mixed $machineName
     */
    public function setMachineName($machineName): void
    {
        $this->machineName = $machineName;
    }
}