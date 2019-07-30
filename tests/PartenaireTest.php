<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerTest extends WebTestCase
{
  
    public function testAjoutPartenaire()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/partenaire/new',[],[],
        ['CONTENT_TYPE'=>"application/json"],"

            {
                \"id\":5,
                \"raisonsociale\":\"dmg-service\",
                \"ninea\":\"0054930Y\",
                \"adresse\":\"dakar\"

            }");
        $rep=$client->getResponse();
        $this->assertSame(201,$client->getResponse()->getStatusCode());
        //$this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent( ));
    }

    public function testAjoutCompte()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/compte/new',[],[],
        ['CONTENT_TYPE'=>"application/json"]);
        $jsonstring="[

            {
                \"id\":20,
                \"numerocompte\":30993,
                \"solde\":1000,
                \"partenaire\":4

            }
        ]";
        $rep=$client->getResponse();
        $this->assertSame(200,$client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent( ));
    }
    public function testAjoutDepot()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/depot/new',[],[],
        ['CONTENT_TYPE'=>"application/json"]);
        $jsonstring="[

            {
                \"id\":6,
                \"montant\":50000,
                \"compte\":6   

            }
        ]";
        $rep=$client->getResponse();
        $this->assertSame(201,$client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent( ));
    }
    
}
