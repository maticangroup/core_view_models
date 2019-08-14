<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/20/2019
 * Time: 4:15 PM
 */

namespace Matican\Models\Authentication;


class ClientModel
{
    private $clientId;
    private $clientUsername;
    private $clientPublicKey;
    private $clientSecretKey;
    private $clientRoleId;
    private $clientRoleName;
    private $clientRoleMachineName;
    private $clientIP;
    private $clientLastConnectionDate;
    private $clientDomain;
    private $authentication_terminal_url;
    private $access_token;

    /**
     * @return mixed
     */
    public function getAuthenticationTerminalUrl()
    {
        return $this->authentication_terminal_url;
    }

    /**
     * @param mixed $authentication_terminal_url
     */
    public function setAuthenticationTerminalUrl($authentication_terminal_url): void
    {
        $this->authentication_terminal_url = $authentication_terminal_url;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param mixed $access_token
     */
    public function setAccessToken($access_token): void
    {
        $this->access_token = $access_token;
    }


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

    /**
     * @return mixed
     */
    public function getClientIP()
    {
        return $this->clientIP;
    }

    /**
     * @param mixed $clientIP
     */
    public function setClientIP($clientIP): void
    {
        $this->clientIP = $clientIP;
    }

    /**
     * @return mixed
     */
    public function getClientLastConnectionDate()
    {
        return $this->clientLastConnectionDate;
    }

    /**
     * @param mixed $clientLastConnectionDate
     */
    public function setClientLastConnectionDate($clientLastConnectionDate): void
    {
        $this->clientLastConnectionDate = $clientLastConnectionDate;
    }

    /**
     * @return mixed
     */
    public function getClientDomain()
    {
        return $this->clientDomain;
    }

    /**
     * @param mixed $clientDomain
     */
    public function setClientDomain($clientDomain): void
    {
        $this->clientDomain = $clientDomain;
    }

    /**
     * @return mixed
     */
    public function getClientRoleMachineName()
    {
        return $this->clientRoleMachineName;
    }

    /**
     * @param mixed $clientRoleMachineName
     */
    public function setClientRoleMachineName($clientRoleMachineName): void
    {
        $this->clientRoleMachineName = $clientRoleMachineName;
    }
}