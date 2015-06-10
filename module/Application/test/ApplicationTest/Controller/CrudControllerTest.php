<?php
namespace ApplicationTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;

class CrudControllerTest extends AbstractControllerTestCase
{
    public function setup()
    {
        $this->setApplicationConfig(
            include '/config/application.config.php'
        );
        parent::setUp();
    }
    public function testIndexActionPodeSerAcessada()
    {
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);
    }
}