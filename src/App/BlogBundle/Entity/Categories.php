<?php

namespace App\BlogBundle\Entity;

/**
 * App\BlogBundle\Entity\Categories
 *
 * @Table(name="categories")
 * @Entity
 */
class Categories
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
     * @var string $title
     *
     * @Column(name="title", type="string", length=20, nullable=true)
     */
    private $title;

    /**
     * @var boolean $showed
     *
     * @Column(name="showed", type="boolean", nullable=true)
     */
    private $showed;

    /**
     * @var datetime $createdAt
     *
     * @Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;


}