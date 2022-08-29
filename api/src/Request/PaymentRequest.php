<?php

namespace App\Request;

use Symfony\Component\Validator\Constraints as Assert;
use App\Validator as AcmeAssert;

class PaymentRequest
{
    /**
     * @var string
     * @Assert\NotBlank
     * @AcmeAssert\ContainsAlphanumeric(mode="loose")
     */
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}