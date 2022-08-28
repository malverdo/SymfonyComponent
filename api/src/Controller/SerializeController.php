<?php

namespace App\Controller;

use App\Model\Personal;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class SerializeController extends AbstractController
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route("/serialize/test", name="serialize_test", methods={"GET"})
     */
    public function serialize(): JsonResponse
    {
        $personal = new Personal();
        $personal->name = 'willy';
        $personal->age = 12;
        $personal->date = new DateTime('now');
        $response = $this->serializer->serialize($personal, 'json',['groups' =>'date', DateTimeNormalizer::FORMAT_KEY => 'Y-m-d H:i']);

        dd($response);

        return $this->json(json_encode('dracon'));
    }
}