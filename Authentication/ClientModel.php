<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/20/2019
 * Time: 4:15 PM
 */

namespace App\FormModels\Authentication;


class ClientModel
{
    private $clientId;
    private $clientUsername;
    private $clientPublicKey;
    private $clientSecretKey;
    private $clientRoleId;
    private $clientRoleName;

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param mixed $clientId
     */
    public function setClientId($clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return mixed
     */
    public function getClientUsername()
    {
        return $this->clientUsername;
    }

    /**
     * @param mixed $clientUsername
     */
    public function setClientUsername($clientUsername): void
    {
        $this->clientUsername = $clientUsername;
    }

    /**
     * @return mixed
     */
    public function getClientPublicKey()
    {
        return $this->clientPublicKey;
    }

    /**
     * @param mixed $clientPublicKey
     */
    public function setClientPublicKey($clientPublicKey): void
    {
        $this->clientPublicKey = $clientPublicKey;
    }

    /**
     * @return mixed
     */
    public function getClientSecretKey()
    {
        return $this->clientSecretKey;
    }

    /**
     * @param mixed $clientSecretKey
     */
    public function setClientSecretKey($clientSecretKey): void
    {
        $this->clientSecretKey = $clientSecretKey;
    }

    /**
     * @return mixed
     */
    public function getClientRoleId()
    {
        return $this->clientRoleId;
    }

    /**
     * @param mixed $clientRoleId
     */
    public function setClientRoleId($clientRoleId): void
    {
        $this->clientRoleId = $clientRoleId;
    }

    /**
     * @return mixed
     */
    public function getClientRoleName()
    {
        return $this->clientRoleName;
    }

    /**
     * @param mixed $clientRoleName
     */
    public function setClientRoleName($clientRoleName): void
    {
        $this->clientRoleName = $clientRoleName;
    }
}