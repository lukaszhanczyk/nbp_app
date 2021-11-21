<?php

namespace App\Services;

use Symfony\Component\HttpClient\HttpClient;

class ApiService
{
    public function getData(){
        $client = HttpClient::create();
        $response = $client->request('GET', 'http://api.nbp.pl/api/exchangerates/tables/A');

        return $response->toArray();
    }
}