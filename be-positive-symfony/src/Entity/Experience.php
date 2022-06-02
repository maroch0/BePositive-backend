<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 * @ORM\Table(name="experiences")
 */
class Experience
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name = "experienceId")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * Many experiences have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="experiences")
	 * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $userId;

    /** @ORM\Column(type = "string", length = "300") */
    private $experience;

    /** @ORM\Column(type = "blob", nullable = "true") */
    private $photo;

    /** @ORM\Column(type = "integer") */
    private $rate;

    /** @ORM\Column(type = "date") */
    private $date;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of experience
     */ 
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set the value of experience
     *
     * @return  self
     */ 
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}