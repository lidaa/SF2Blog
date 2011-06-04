<?php

namespace App\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App\BlogBundle\Entity\Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=20, nullable=true)
     */
    private $title;

    /**
     * @var boolean $showed
     *
     * @ORM\Column(name="showed", type="boolean", nullable=true)
     */
    private $showed;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var $Posts
     *
     * @ORM\OneToMany(targetEntity="Posts", mappedBy="category")
     */
	private $posts;

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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set showed
     *
     * @param boolean $showed
     */
    public function setShowed($showed)
    {
        $this->showed = $showed;
    }

    /**
     * Get showed
     *
     * @return boolean $showed
     */
    public function getShowed()
    {
        return $this->showed;
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
     * Get posts
     *
     * @return datetime $createdAt
     */
    public function getPosts()
    {
        return $this->posts;
    }

	public function __toString()
	{
		return $this->title;
	}
}