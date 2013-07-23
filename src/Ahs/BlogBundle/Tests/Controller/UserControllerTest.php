<?php

namespace Ahs\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Ahs\BlogBundle\Controller\UserController;

class UserControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testIndex()
    {
        $controller = new UserController();
        //$this->assertEquals(true, $controller->indexAction());
    }
}
