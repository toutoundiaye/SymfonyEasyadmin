<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HeroRepository")
 */
class Hero
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $name = '';

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $identity = '';

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $power = '';

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $nemesis = '';

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $weakness = '';

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $catchphrase = '';

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $suit = '';

    /**
     * @ORM\Column(type="boolean")
     *
     * @var bool
     */
    private $isCaped = false;
    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Hero
     */
    public function setId($id): Hero
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Hero
     */
    public function setName($name): Hero
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param mixed $identity
     * @return Hero
     */
    public function setIdentity($identity): Hero
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     * @return Hero
     */
    public function setPower($power): Hero
    {
        $this->power = $power;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNemesis()
    {
        return $this->nemesis;
    }

    /**
     * @param mixed $nemesis
     * @return Hero
     */
    public function setNemesis($nemesis): Hero
    {
        $this->nemesis = $nemesis;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * @param mixed $weakness
     * @return Hero
     */
    public function setWeakness($weakness): Hero
    {
        $this->weakness = $weakness;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCatchphrase()
    {
        return $this->catchphrase;
    }

    /**
     * @param mixed $catchphrase
     * @return Hero
     */
    public function setCatchphrase($catchphrase): Hero
    {
        $this->catchphrase = $catchphrase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSuit()
    {
        return $this->suit;
    }

    /**
     * @param mixed $suit
     * @return Hero
     */
    public function setSuit($suit): Hero
    {
        $this->suit = $suit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsCaped(): bool
    {
        return $this->isCaped;
    }

    /**
     * @param bool $isCaped
     * @return Hero
     */
    public function setIsCaped(bool $isCaped): Hero
    {
        $this->isCaped = $isCaped;
        return $this;
    }

}
