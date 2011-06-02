<?php

namespace App\BlogBundle\Entity;

/**
 * App\BlogBundle\Entity\Users
 *
 * @Table(name="users")
 * @Entity
 */
class Users
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=20, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=300, nullable=true)
     */
    private $password;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string $fullName
     *
     * @Column(name="full_name", type="string", length=200, nullable=true)
     */
    private $fullName;

    /**
     * @var string $webSite
     *
     * @Column(name="web_site", type="string", length=200, nullable=true)
     */
    private $webSite;

    /**
     * @var datetime $lastConnection
     *
     * @Column(name="last_connection", type="datetime", nullable=true)
     */
    private $lastConnection;

    /**
     * @var boolean $enabled
     *
     * @Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var text $token
     *
     * @Column(name="token", type="text", nullable=true)
     */
    private $token;

    /**
     * @var boolean $banished
     *
     * @Column(name="banished", type="boolean", nullable=true)
     */
    private $banished;

    /**
     * @var integer $numberVisits
     *
     * @Column(name="number_visits", type="integer", nullable=true)
     */
    private $numberVisits;

    /**
     * @var text $infos
     *
     * @Column(name="infos", type="text", nullable=true)
     */
    private $infos;

    /**
     * @var datetime $createdAt
     *
     * @Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}