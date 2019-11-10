<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 11/10/2019
 * Time: 10:24 AM
 */

namespace Matican\Models\Accounting;


class InstallmentRequestFormModel
{
    private $buyType;
    private $bank;
    private $chequeAccountNumber;
    private $investAccountNumber;
    private $accountCreatedDate;
    private $chequeType;
    private $branchName;
    private $productName;
    private $productPrice;

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

}