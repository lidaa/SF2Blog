<?php

namespace App\BlogBundle\Entity;

/**
 * App\BlogBundle\Entity\Comments
 *
 * @Table(name="comments")
 * @Entity
 */
class Comments
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
     * @var text $content
     *
     * @Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var datetime $createdAt
     *
     * @Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var Posts
     *
     * @ManyToOne(targetEntity="Posts")
     * @JoinColumns({
     *   @JoinColumn(name="post", referencedColumnName="id")
     * })
     */
    private $post;

    /**
     * @var Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     *   @JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;


}