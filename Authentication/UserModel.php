<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/18/2019
 * Time: 11:31 AM
 */

namespace App\FormModels\Authentication;


class UserModel
{
    private $userId;
    private $userMobile;
    private $userPassword;
    private $roleId;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserMobile()
    {
        return $this->userMobile;
    }

    /**
     * @param mixed $userMobile
     */
    public function setUserMobile($userMobile): void
    {
        $this->userMobile = $userMobile;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param mixed $userPassword
     */
    public function setUserPassword($userPassword): void
    {
        $this->userPassword = $userPassword;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param mixed $roleId
     */
    public function setRoleId($roleId): void
    {
        $this->roleId = $roleId;
    }
}