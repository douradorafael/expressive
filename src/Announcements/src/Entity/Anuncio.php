<?php

declare(strict_types=1);

namespace Announcements\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Anuncio
 * @package Announcements\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="anuncios")
 */
class Anuncio
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $content;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $is_active;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modified;

    /**
     * @return mixed
     */
    public function getId()
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




}