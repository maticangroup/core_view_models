<?php
/**
 * Created by PhpStorm.
 * <<<<<<< HEAD
 * User: hossein
 * Date: 10/11/19
 * Time: 17:37
 * =======
 * User: Amirhossein
 * Date: 11/11/2019
 * Time: 10:49 AM
 * >>>>>>> 4bcee8ba9ec396e4f119d159c4e73db9957d4ec8
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