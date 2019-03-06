<?php

namespace Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

/**
 * @group api
 * @package Tests\Controller
 */
class ApiControllerTest extends WebTestCase
{

    /**
     * @group d3
     */
    public function testGetMediaLikes2()
    {
        $this->loadFixtures([]);
        $this->assertTrue(true);
    }
}