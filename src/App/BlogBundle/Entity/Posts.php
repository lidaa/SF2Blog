<?php

namespace App\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App\BlogBundle\Entity\Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity
 */
class Posts
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
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer $numberVivits
     *
     * @ORM\Column(name="number_vivits", type="integer", nullable=true)
     */
    private $numberVivits;

    /**
     * @var boolean $opened
     *
     * @ORM\Column(name="opened", type="boolean", nullable=true)
     */
    private $opened;

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
     * @var Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var $Comments
     *
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="post")
     */
	private $comments;

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
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set numberVivits
     *
     * @param integer $numberVivits
     */
    public function setNumberVivits($numberVivits)
    {
        $this->numberVivits = $numberVivits;
    }

    /**
     * Get numberVivits
     *
     * @return integer $numberVivits
     */
    public function getNumberVivits()
    {
        return $this->numberVivits;
    }

    /**
     * Set opened
     *
     * @param boolean $opened
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;
    }

    /**
     * Get opened
     *
     * @return boolean $opened
     */
    public function getOpened()
    {
        return $this->opened;
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

    /**
     * Set category
     *
     * @param App\BlogBundle\Entity\Categories $category
     */
    public function setCategory(\App\BlogBundle\Entity\Categories $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return App\BlogBundle\Entity\Categories $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get comments
     *
     * @return Collection $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    public function __toString()
    {
        return $this->getTitle();
    }
}