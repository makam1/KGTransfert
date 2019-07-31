<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateurControllerTest extends WebTestCase
{
   public function testNew()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mama',
            'PHP_AUTH_PW'=>'123'
        ]

        );
        $client->request('POST', '/api/user/newuser',[],[],['CONTENT_TYPE'=>"application/json"],'{
            "login":"admi",
            "password":"123",
            "nom":"maman fatou",
            "email":"fatout@gmail.com",
            "telephone":785056,
            "statut":"actif",
            "Partenaire":1
            }'
    );
    $client->getResponse();
    $this->assertSame(201,$client->getResponse()->getStatusCode());
    }

    public function testNewadmin()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mak',
            'PHP_AUTH_PW'=>'123'
        ]

        );
        $client->request('POST', '/api/user/newadmin',[],[],['CONTENT_TYPE'=>"application/json"],'{
            "login":"admin4",
            "password":"123",
            "nom":122,
            "email":"fatout@gmail.com",
            "telephone":785056,
            "statut":"actif",
            "Partenaire":""
            }'
    );
    $client->getResponse();
    $this->assertSame(201,$client->getResponse()->getStatusCode());
    }
}
