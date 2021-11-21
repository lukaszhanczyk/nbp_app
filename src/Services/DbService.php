<?php

namespace App\Services;

use App\Entity\Currency;

class DbService
{
    public static function get($currencyRepository, $code){
        $curr = $currencyRepository->findOneBy(['currency_code' => $code]);
        return $curr;
    }
    public function update($em, $currencyRepository, $data){
        foreach ($data as $curr) {
            if($dbCurrency = DbService::get($currencyRepository, $curr['code'])){
                $dbCurrency->setExchangeRate(round($curr['mid'], 2));
            }else{
                $dbCurrency = new Currency();
                $dbCurrency->setName($curr['currency']);
                $dbCurrency->setCurrencyCode($curr['code']);
                $dbCurrency->setExchangeRate(round($curr['mid'], 2));
            };
            $em->persist($dbCurrency);
            $em->flush();
        }
    }
}