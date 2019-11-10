<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 11/10/2019
 * Time: 10:23 AM
 */

namespace Matican\Models\Accounting;


class MarriageStatusModel
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