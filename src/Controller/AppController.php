<?php

namespace App\Controller;

use App\Repository\CurrencyRepository;
use App\Services\ApiService;
use App\Services\DbService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     **/
    public function index(CurrencyRepository $currencyRepository, ApiService $api, DbService $db): Response
    {
        $data = $api->getData();
        $currs = $db->get($currencyRepository);
        dd($currs);
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AppController.php',
        ]);
    }
}
