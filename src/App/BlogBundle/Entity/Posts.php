<?php

namespace App\BlogBundle\Entity;

/**
 * App\BlogBundle\Entity\Posts
 *
 * @Table(name="posts")
 * @Entity
 */
class Posts
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
     * @var integer $category
     *
     * @Column(name="category", type="integer", nullable=false)
     */
    private $category;

    /**
     * @var string $title
     *
     * @Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var text $content
     *
     * @Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer $numberVivits
     *
     * @Column(name="number_vivits", type="integer", nullable=true)
     */
    private $numberVivits;

    /**
     * @var boolean $opened
     *
     * @Column(name="opened", type="boolean", nullable=true)
     */
    private $opened;

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