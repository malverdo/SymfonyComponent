<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SerializeController extends AbstractController
{
    /**
     * @Route("/serialize/test", name="serialize_test", methods={"GET"})
     */
    public function test(): JsonResponse
    {
        return $this->json(json_encode('dracon'));
    }
}