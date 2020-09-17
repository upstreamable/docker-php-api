<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HealthNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Health';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\Health';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\Health();
        if (property_exists($data, 'Status') && $data->{'Status'} !== null) {
            $object->setStatus($data->{'Status'});
        }
        if (property_exists($data, 'FailingStreak') && $data->{'FailingStreak'} !== null) {
            $object->setFailingStreak($data->{'FailingStreak'});
        }
        if (property_exists($data, 'Log') && $data->{'Log'} !== null) {
            $values = [];
            foreach ($data->{'Log'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\HealthcheckResult', 'json', $context);
            }
            $object->setLog($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $object->getStatus();
        }
        if (null !== $object->getFailingStreak()) {
            $data->{'FailingStreak'} = $object->getFailingStreak();
        }
        if (null !== $object->getLog()) {
            $values = [];
            foreach ($object->getLog() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Log'} = $values;
        }

        return $data;
    }
}