<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Circular\SiteBundle\Tests\Controller;

use Symfony\Bundle\SecurityBundle\Tests\Functional\WebTestCase;

/**
 * Description of PageControllerTest
 *
 * @author Cefet
 */
class PageControllerTest extends WebTestCase {
    
    public function testCover()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/circular');

        $this->assertTrue($crawler->filter('html:contains("form")')->count() > 0);
    }
    
}
