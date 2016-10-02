<?php

namespace TalkSafeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MessageControllerTest extends WebTestCase
{
    public function testSend()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/send');
    }

    public function testMain()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/main');
    }

}
