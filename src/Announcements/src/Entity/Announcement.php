<?php

declare(strict_types=1);

namespace Announcements;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="announcement")
 */
class Announcement
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name = "id", nullable = false)
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable = false)
     */
    private $sort;

    /**
     * @ORM\Column(type="string", nullable = false)
     */
    private $content;

    /**
     * @ORM\Column(type="integer", nullable = false)
     */
    private $is_active;

    /**
     * @ORM\Column(type="datetime", nullable = false)
     */
    private $created;

    /**
     * @ORM\Column(type="integer")
     */
    private $modified;

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSort():int
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getIsActive(): int
    {
        return $this->is_active;
    }

    /**
     * @param mixed $is_active
     */
    public function setIsActive($is_active): void
    {
        $this->is_active = $is_active;
    }

    /**
     * @return mixed
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function setCreated(\DateTime $created = null): void
    {
        if(!$created && empty($this->getId())){
            $this->created = new \DateTime('now');
        }
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getModified(): \DateTime
    {
        return $this->modified;
    }

    public function setModified($modified = null): void
    {
        if(!$modified){
            $this->modified = new \DateTime('now');
        } else
            $this->modified = $modified;
    }


}
