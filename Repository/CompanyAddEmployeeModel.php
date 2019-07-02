<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/2/2019
 * Time: 12:58 PM
 */

namespace App\FormModels\Repository;


class CompanyAddEmployeeModel
{
    private $employeeID;

    /**
     * @return mixed
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * @param mixed $employeeID
     */
    public function setEmployeeID($employeeID): void
    {
        $this->employeeID = $employeeID;
    }


}