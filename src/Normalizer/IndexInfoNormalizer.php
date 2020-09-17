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

class IndexInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\IndexInfo';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\IndexInfo';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\IndexInfo();
        if (property_exists($data, 'Name') && $data->{'Name'} !== null) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Mirrors') && $data->{'Mirrors'} !== null) {
            $values = [];
            foreach ($data->{'Mirrors'} as $value) {
                $values[] = $value;
            }
            $object->setMirrors($values);
        }
        if (property_exists($data, 'Secure') && $data->{'Secure'} !== null) {
            $object->setSecure($data->{'Secure'});
        }
        if (property_exists($data, 'Official') && $data->{'Official'} !== null) {
            $object->setOfficial($data->{'Official'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getMirrors()) {
            $values = [];
            foreach ($object->getMirrors() as $value) {
                $values[] = $value;
            }
            $data->{'Mirrors'} = $values;
        }
        if (null !== $object->getSecure()) {
            $data->{'Secure'} = $object->getSecure();
        }
        if (null !== $object->getOfficial()) {
            $data->{'Official'} = $object->getOfficial();
        }

        return $data;
    }
}