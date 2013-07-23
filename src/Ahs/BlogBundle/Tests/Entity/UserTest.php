<?php

namespace Ahs\BlogBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Ahs\BlogBundle\Entity\Person;
use Ahs\BlogBundle\Entity\User;

class UserTest extends WebTestCase
{
    /**
     * @var Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * {@inheritDoc}
     */
    public function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->entityManager = static::$kernel
            ->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
        // $this->entityManager->getConnection()->beginTransaction(); // Suspend auto-commit.
    }

    public function testMyTest()
    {
        $unique = md5(microtime());
        $user = new User();
        $user->setFirstname('John');
        $user->setSurname('Doe');
        $user->setUsername('johndoe' . $unique);
        $user->setEmail('john.doe.' . $unique . '@arteveldehs.be');

        $person = new Person();
        $person->setFirstname('Jane');
        $person->setSurname('Doe');

        $this->entityManager->persist($user); // Manage the User object for persistence.
        $this->entityManager->persist($person); // Manage the Person object for persistence.
        $this->entityManager->flush(); // Actually persist all objects that need to be persisted.

        $this->assertGreaterThanOrEqual(1, $user->getId());
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
        // $this->entityManager->getConnection()->rollback(); // Rollback all database changes, but auto_increment max will remain.
        $this->entityManager->close();
    }
}