<?php

namespace App\Controller;

use App\Dto\SampleDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_test', methods: ["POST"])]
    public function test(SampleDto $sampleDto): Response
    {
        dump($sampleDto);
        return new Response();
    }
}
