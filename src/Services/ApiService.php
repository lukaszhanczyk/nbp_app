<?php

namespace App\Services;

use Symfony\Component\HttpClient\HttpClient;

class ApiService
{
    private $apiUrl;

    public function __construct($apiUrl){
        $this->apiUrl=$apiUrl;
    }
    public function getData(){
        $client = HttpClient::create();
        $response = $client->request('GET', $this->apiUrl );

        return $response->toArray()[0]['rates'];
    }
}