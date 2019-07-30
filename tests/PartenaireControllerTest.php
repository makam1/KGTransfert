<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerTest extends WebTestCase
{
  
    public function testAjoutPartenaire()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mak',
            'PHP_AUTH_PW'=>'123'
        ]

        );
        $crawler = $client->request('POST', '/api/partenaire/new',[],[],
        ['CONTENT_TYPE'=>"application/json"],"

            {
                \"raisonsociale\":\"dmg-service\",
                \"ninea\":\"0054930Y\",
                \"adresse\":\"dakar\"

            }");
        $rep=$client->getResponse();
       // var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
        //$this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent( ));
    }

    public function testAjoutCompte()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mak',
            'PHP_AUTH_PW'=>'123'
        ]

        );
        $crawler = $client->request('POST', '/api/compte/new',[],[],
        ['CONTENT_TYPE'=>"application/json"]);
        $jsonstring="[

            {
            
                \"numerocompte\":30993,
                \"solde\":1000,
                \"partenaire\":1

            }
        ]";
        $rep=$client->getResponse();
        $this->assertSame(201,$client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent( ));
    }
    public function testAjoutDepot()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mak',
            'PHP_AUTH_PW'=>'123'
        ]

        );
        $crawler = $client->request('POST', '/api/depot/new',[],[],
        ['CONTENT_TYPE'=>"application/json"]);
        $jsonstring="[

            {
                \"montant\":50000,
                \"compte\":1

            }
        ]";
        $rep=$client->getResponse();
        $this->assertSame(201,$client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent( ));
    }
    
}
