<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 1:01 PM
 */

namespace App\FormModels\Repository;


use Matican\Core\DataTypes\Date;
use Matican\Core\DataTypes\Email;
use Matican\Core\DataTypes\Mobile;
use Matican\Core\DataTypes\NationalCode;

class PersonModel
{
    private $id;


    private $humanName;


    private $humanFamily;


    private $email;

    private $national_code;

    private $mobile;


    private $birthDateYear = "";

    private $birthDateMonth = "";

    private $birthDateDay = "";

    private $mainAddressString = "";

    private $sendSMS = false;

    private $groups;
    private $companies;
    private $locations;

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
    public function getHumanName()
    {
        return $this->humanName;
    }

    /**
     * @param mixed $humanName
     */
    public function setHumanName($humanName): void
    {
        $this->humanName = $humanName;
    }

    /**
     * @return mixed
     */
    public function getHumanFamily()
    {
        return $this->humanFamily;
    }

    /**
     * @param mixed $humanFamily
     */
    public function setHumanFamily($humanFamily): void
    {
        $this->humanFamily = $humanFamily;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNationalCode()
    {
        return $this->national_code;
    }

    /**
     * @param mixed $national_code
     */
    public function setNationalCode($national_code): void
    {
        $this->national_code = $national_code;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getBirthDateYear(): string
    {
        return $this->birthDateYear;
    }

    /**
     * @param string $birthDateYear
     */
    public function setBirthDateYear(string $birthDateYear): void
    {
        $this->birthDateYear = $birthDateYear;
    }

    /**
     * @return string
     */
    public function getBirthDateMonth(): string
    {
        return $this->birthDateMonth;
    }

    /**
     * @param string $birthDateMonth
     */
    public function setBirthDateMonth(string $birthDateMonth): void
    {
        $this->birthDateMonth = $birthDateMonth;
    }

    /**
     * @return string
     */
    public function getBirthDateDay(): string
    {
        return $this->birthDateDay;
    }

    /**
     * @param string $birthDateDay
     */
    public function setBirthDateDay(string $birthDateDay): void
    {
        $this->birthDateDay = $birthDateDay;
    }

    /**
     * @return bool
     */
    public function getSendSMS(): bool
    {
        return $this->sendSMS;
    }

    /**
     * @param bool $sendSMS
     */
    public function setSendSMS(bool $sendSMS): void
    {
        $this->sendSMS = $sendSMS;
    }

    /**
     * @return string
     */
    public function getMainAddressString(): string
    {
        return $this->mainAddressString;
    }

    /**
     * @param string $mainAddressString
     */
    public function setMainAddressString(string $mainAddressString): void
    {
        $this->mainAddressString = $mainAddressString;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups): void
    {
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @param mixed $companies
     */
    public function setCompanies($companies): void
    {
        $this->companies = $companies;
    }

    /**
     * @return mixed
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param mixed $locations
     */
    public function setLocations($locations): void
    {
        $this->locations = $locations;
    }


}