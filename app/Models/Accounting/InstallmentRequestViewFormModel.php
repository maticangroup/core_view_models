<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 11/11/2019
 * Time: 10:11 AM
 */

namespace Matican\Models\Accounting;


class InstallmentRequestViewFormModel
{


    public $requestId;
    private $genderStatus;
    private $nationalCode;
    private $firstName;
    private $lastName;
    private $fatherName;
    private $mobileNumber;
    private $birthDate;
    private $birthCertificateCode;
    private $email;
    private $marriageStatus;
    private $job;
    private $companyName;
    private $monthlySalary;
    private $jobStatus;
    private $jobAddress;
    private $jobPhoneNumber;
    private $province;
    private $city;
    private $homeAddress;
    private $homePhoneNumber;

    private $buyType;
    private $bank;
    private $chequeAccountNumber;
    private $investAccountNumber;
    private $accountCreatedDate;
    private $chequeType;
    private $branchName;
    private $productName;
    private $productPrice;

    private $requestStatus;
    private $requestCreateDate;
    private $requestCategory;



    /**
     * @return mixed
     */
    public function getGenderStatus()
    {
        return $this->genderStatus;
    }

    /**
     * @param mixed $genderStatus
     */
    public function setGenderStatus($genderStatus): void
    {
        $this->genderStatus = $genderStatus;
    }

    /**
     * @return mixed
     */
    public function getNationalCode()
    {
        return $this->nationalCode;
    }

    /**
     * @param mixed $nationalCode
     */
    public function setNationalCode($nationalCode): void
    {
        $this->nationalCode = $nationalCode;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFatherName()
    {
        return $this->fatherName;
    }

    /**
     * @param mixed $fatherName
     */
    public function setFatherName($fatherName): void
    {
        $this->fatherName = $fatherName;
    }

    /**
     * @return mixed
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * @param mixed $mobileNumber
     */
    public function setMobileNumber($mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getBirthCertificateCode()
    {
        return $this->birthCertificateCode;
    }

    /**
     * @param mixed $birthCertificateCode
     */
    public function setBirthCertificateCode($birthCertificateCode): void
    {
        $this->birthCertificateCode = $birthCertificateCode;
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
    public function getMarriageStatus()
    {
        return $this->marriageStatus;
    }

    /**
     * @param mixed $marriageStatus
     */
    public function setMarriageStatus($marriageStatus): void
    {
        $this->marriageStatus = $marriageStatus;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job): void
    {
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getMonthlySalary()
    {
        return $this->monthlySalary;
    }

    /**
     * @param mixed $monthlySalary
     */
    public function setMonthlySalary($monthlySalary): void
    {
        $this->monthlySalary = $monthlySalary;
    }

    /**
     * @return mixed
     */
    public function getJobStatus()
    {
        return $this->jobStatus;
    }

    /**
     * @param mixed $jobStatus
     */
    public function setJobStatus($jobStatus): void
    {
        $this->jobStatus = $jobStatus;
    }

    /**
     * @return mixed
     */
    public function getJobAddress()
    {
        return $this->jobAddress;
    }

    /**
     * @param mixed $jobAddress
     */
    public function setJobAddress($jobAddress): void
    {
        $this->jobAddress = $jobAddress;
    }

    /**
     * @return mixed
     */
    public function getJobPhoneNumber()
    {
        return $this->jobPhoneNumber;
    }

    /**
     * @param mixed $jobPhoneNumber
     */
    public function setJobPhoneNumber($jobPhoneNumber): void
    {
        $this->jobPhoneNumber = $jobPhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province): void
    {
        $this->province = $province;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getHomeAddress()
    {
        return $this->homeAddress;
    }

    /**
     * @param mixed $homeAddress
     */
    public function setHomeAddress($homeAddress): void
    {
        $this->homeAddress = $homeAddress;
    }

    /**
     * @return mixed
     */
    public function getHomePhoneNumber()
    {
        return $this->homePhoneNumber;
    }

    /**
     * @param mixed $homePhoneNumber
     */
    public function setHomePhoneNumber($homePhoneNumber): void
    {
        $this->homePhoneNumber = $homePhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getBuyType()
    {
        return $this->buyType;
    }

    /**
     * @param mixed $buyType
     */
    public function setBuyType($buyType): void
    {
        $this->buyType = $buyType;
    }

    /**
     * @return mixed
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param mixed $bank
     */
    public function setBank($bank): void
    {
        $this->bank = $bank;
    }

    /**
     * @return mixed
     */
    public function getChequeAccountNumber()
    {
        return $this->chequeAccountNumber;
    }

    /**
     * @param mixed $chequeAccountNumber
     */
    public function setChequeAccountNumber($chequeAccountNumber): void
    {
        $this->chequeAccountNumber = $chequeAccountNumber;
    }

    /**
     * @return mixed
     */
    public function getInvestAccountNumber()
    {
        return $this->investAccountNumber;
    }

    /**
     * @param mixed $investAccountNumber
     */
    public function setInvestAccountNumber($investAccountNumber): void
    {
        $this->investAccountNumber = $investAccountNumber;
    }

    /**
     * @return mixed
     */
    public function getAccountCreatedDate()
    {
        return $this->accountCreatedDate;
    }

    /**
     * @param mixed $accountCreatedDate
     */
    public function setAccountCreatedDate($accountCreatedDate): void
    {
        $this->accountCreatedDate = $accountCreatedDate;
    }

    /**
     * @return mixed
     */
    public function getChequeType()
    {
        return $this->chequeType;
    }

    /**
     * @param mixed $chequeType
     */
    public function setChequeType($chequeType): void
    {
        $this->chequeType = $chequeType;
    }

    /**
     * @return mixed
     */
    public function getBranchName()
    {
        return $this->branchName;
    }

    /**
     * @param mixed $branchName
     */
    public function setBranchName($branchName): void
    {
        $this->branchName = $branchName;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param mixed $productPrice
     */
    public function setProductPrice($productPrice): void
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @return mixed
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    /**
     * @param mixed $requestStatus
     */
    public function setRequestStatus($requestStatus): void
    {
        $this->requestStatus = $requestStatus;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param mixed $requestId
     */
    public function setRequestId($requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return mixed
     */
    public function getRequestCreateDate()
    {
        return $this->requestCreateDate;
    }

    /**
     * @param mixed $requestCreateDate
     */
    public function setRequestCreateDate($requestCreateDate): void
    {
        $this->requestCreateDate = $requestCreateDate;
    }

    /**
     * @return mixed
     */
    public function getRequestCategory()
    {
        return $this->requestCategory;
    }

    /**
     * @param mixed $requestCategory
     */
    public function setRequestCategory($requestCategory): void
    {
        $this->requestCategory = $requestCategory;
    }
}