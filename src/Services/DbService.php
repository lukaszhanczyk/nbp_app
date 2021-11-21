<?php

namespace App\Services;

class DbService
{
    public function get($currencyRepository){
        $curr = $currencyRepository->findAll();
        return $curr;
    }
    public function update(){

    }
}