<?php

namespace App\Serializer\Normalizer;

use App\Model\Personal;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonalNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

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
            'slug' => $object->name,
            'value' => $object->age,
        ];
    }

    public function supportsNormalization($data, string $format = null, array $context = []): bool
    {
        return $data instanceof Personal;
    }
}