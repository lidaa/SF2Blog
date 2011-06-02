<?php

namespace App\BlogBundle\Entity;

/**
 * App\BlogBundle\Entity\Blogroll
 *
 * @Table(name="blogroll")
 * @Entity
 */
class Blogroll
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
     * @var string $link
     *
     * @Column(name="link", type="string", length=200, nullable=true)
     */
    private $link;

    /**
     * @var datetime $createdAt
     *
     * @Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var Categories
     *
     * @ManyToOne(targetEntity="Categories")
     * @JoinColumns({
     *   @JoinColumn(name="category", referencedColumnName="id")
     * })
     */
    private $category;


}