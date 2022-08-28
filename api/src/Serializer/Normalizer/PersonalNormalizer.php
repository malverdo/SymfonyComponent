<?php

namespace App\Serializer\Normalizer;

use App\Model\Personal;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonalNormalizer implements NormalizerInterface
{


    /**
     * {@inheritdoc}
     *
     * @param Personal $object
     * @param string|null $format
     * @param array $context
     */
    public function normalize($object, string $format = null, array $context = [])
    {

        return [
            'slug' => $object->getName(),
            'value' => $object->getName(),
        ];
    }

    public function supportsNormalization($data, string $format = null, array $context = []): bool
    {
        return $data instanceof Personal;
    }
}