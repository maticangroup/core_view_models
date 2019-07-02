<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/2/2019
 * Time: 1:14 PM
 */

namespace App\FormModels\Repository;


class PhoneModel
{
    private $phone;
    private $companyID;

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * @param mixed $companyID
     */
    public function setCompanyID($companyID): void
    {
        $this->companyID = $companyID;
    }


}