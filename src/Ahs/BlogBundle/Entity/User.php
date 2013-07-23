<?php
namespace Ahs\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends Person
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="user_username", type="string", length=45)
     *
     * @var string
     */
    protected $username;

    /**
     * @ORM\Column(name="user_email", type="string", length=255)
     *
     * @var string
     */
    protected $email;

    /**
     * @ORM\Column(name="user_created", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $created;

    /**
     * @ORM\Column(name="user_modified", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $modified;

    /**
     * @ORM\Column(name="user_deleted", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $deleted;

    /**
     * @ORM\Column(name="user_locked", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $locked;

    /**
     * @ORM\Column(name="user_lastlogin", type="datetimetz")
     *
     * @var \DateTime
     */
    protected $lastlogin;
    /**
     * @var string
     */

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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
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
     * @return User
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
     * @return User
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

    /**
     * Set locked
     *
     * @param \DateTime $locked
     * @return User
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    
        return $this;
    }

    /**
     * Get locked
     *
     * @return \DateTime 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set lastlogin
     *
     * @param \DateTime $lastlogin
     * @return User
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;
    
        return $this;
    }

    /**
     * Get lastlogin
     *
     * @return \DateTime 
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }
}