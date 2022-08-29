<?php

namespace App\Controller;

use App\Model\Personal;
use App\Request\PaymentRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ValidationController extends AbstractController
{
    /**
     * @var ValidatorInterface
     */
    private $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }


    /**
     * @Route("/validation/test", name="validation_test", methods={"POST"})
     */
    public function serialize(Request $request): JsonResponse
    {

        $requestPayment = new PaymentRequest($request->request->get('name'));
        $errors = $this->validator->validate($requestPayment);

        if (count($errors) > 0) {
            $errorsString = $errors[0]->getMessage();

            return $this->json(json_encode($errorsString));
        }


        return $this->json(json_encode('dracon'));
    }
}