<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenaireTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/api/partenaires');
        $jsonstring="[

            {
                \"id\":4,
                \"raisonsociale\":\"Mak-service\",
                \"ninea\":\"0027930Y\",
                \"adresse\":\"Rufisque\"

            }
        ]";
        $rep=$client->getResponse();
        $this->assertSame(201,$client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent( ));
    }

    
}
