<?php

namespace App\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App\BlogBundle\Entity\Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=20, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=300, nullable=true)
     */
    private $password;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string $fullName
     *
     * @ORM\Column(name="full_name", type="string", length=200, nullable=true)
     */
    private $fullName;

    /**
     * @var string $webSite
     *
     * @ORM\Column(name="web_site", type="string", length=200, nullable=true)
     */
    private $webSite;

    /**
     * @var datetime $lastConnection
     *
     * @ORM\Column(name="last_connection", type="datetime", nullable=true)
     */
    private $lastConnection;

    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var text $token
     *
     * @ORM\Column(name="token", type="text", nullable=true)
     */
    private $token;

    /**
     * @var boolean $banished
     *
     * @ORM\Column(name="banished", type="boolean", nullable=true)
     */
    private $banished;

    /**
     * @var integer $numberVisits
     *
     * @ORM\Column(name="number_visits", type="integer", nullable=true)
     */
    private $numberVisits;

    /**
     * @var text $infos
     *
     * @ORM\Column(name="infos", type="text", nullable=true)
     */
    private $infos;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;



    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * Get fullName
     *
     * @return string $fullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set webSite
     *
     * @param string $webSite
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
    }

    /**
     * Get webSite
     *
     * @return string $webSite
     */
    public function getWebSite()
    {
        return $this->webSite;
    }

    /**
     * Set lastConnection
     *
     * @param datetime $lastConnection
     */
    public function setLastConnection($lastConnection)
    {
        $this->lastConnection = $lastConnection;
    }

    /**
     * Get lastConnection
     *
     * @return datetime $lastConnection
     */
    public function getLastConnection()
    {
        return $this->lastConnection;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set token
     *
     * @param text $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Get token
     *
     * @return text $token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set banished
     *
     * @param boolean $banished
     */
    public function setBanished($banished)
    {
        $this->banished = $banished;
    }

    /**
     * Get banished
     *
     * @return boolean $banished
     */
    public function getBanished()
    {
        return $this->banished;
    }

    /**
     * Set numberVisits
     *
     * @param integer $numberVisits
     */
    public function setNumberVisits($numberVisits)
    {
        $this->numberVisits = $numberVisits;
    }

    /**
     * Get numberVisits
     *
     * @return integer $numberVisits
     */
    public function getNumberVisits()
    {
        return $this->numberVisits;
    }

    /**
     * Set infos
     *
     * @param text $infos
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;
    }

    /**
     * Get infos
     *
     * @return text $infos
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}