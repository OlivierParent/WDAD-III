<?php
namespace Ahs\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Table Inheritance Pattern
 *
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="person_type", type="string")
 * @ORM\DiscriminatorMap({"PERSON" = "Person", "USER" = "User"})
 * @ORM\Table(name="persons")
 */
class Person
{
    /**
     * @ORM\Id
     * @ORM\Column(name="person_id", type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(name="person_firstname", type="string")
     *
     * @var string
     */
    protected $firstname;

    /**
     * @ORM\Column(name="person_surname", type="string")
     *
     * @var string
     */
    protected $surname;

    /**
     * @ORM\Column(name="person_profile", type="text")
     *
     * @var string
     */
    protected $profile;

    /**
     * @ORM\Column(name="person_created", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $created;

    /**
     * @ORM\Column(name="person_modified", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $modified;

    /**
     * @ORM\Column(name="person_deleted", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $deleted;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Person
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return Person
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    
        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Person
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Person
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Person
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}