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

class NetworkAttachmentConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\NetworkAttachmentConfig';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\NetworkAttachmentConfig';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\NetworkAttachmentConfig();
        if (property_exists($data, 'Target') && $data->{'Target'} !== null) {
            $object->setTarget($data->{'Target'});
        }
        if (property_exists($data, 'Aliases') && $data->{'Aliases'} !== null) {
            $values = [];
            foreach ($data->{'Aliases'} as $value) {
                $values[] = $value;
            }
            $object->setAliases($values);
        }
        if (property_exists($data, 'DriverOpts') && $data->{'DriverOpts'} !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'DriverOpts'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setDriverOpts($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTarget()) {
            $data->{'Target'} = $object->getTarget();
        }
        if (null !== $object->getAliases()) {
            $values = [];
            foreach ($object->getAliases() as $value) {
                $values[] = $value;
            }
            $data->{'Aliases'} = $values;
        }
        if (null !== $object->getDriverOpts()) {
            $values_1 = new \stdClass();
            foreach ($object->getDriverOpts() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'DriverOpts'} = $values_1;
        }

        return $data;
    }
}