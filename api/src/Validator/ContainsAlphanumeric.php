<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

class ContainsAlphanumeric extends Constraint
{
    public $message = 'Строка "{{ string }}" содержит недопустимый символ: она может содержать только буквы или цифры.';

    public $mode = 'strict';
}