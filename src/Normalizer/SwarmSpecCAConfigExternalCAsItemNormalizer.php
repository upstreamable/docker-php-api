<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SwarmSpecCAConfigExternalCAsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmSpecCAConfigExternalCAsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmSpecCAConfigExternalCAsItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('Protocol', $data) && $data['Protocol'] !== null) {
            $object->setProtocol($data['Protocol']);
        } elseif (\array_key_exists('Protocol', $data) && $data['Protocol'] === null) {
            $object->setProtocol(null);
        }
        if (\array_key_exists('URL', $data) && $data['URL'] !== null) {
            $object->setURL($data['URL']);
        } elseif (\array_key_exists('URL', $data) && $data['URL'] === null) {
            $object->setURL(null);
        }
        if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOptions($values);
        } elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('CACert', $data) && $data['CACert'] !== null) {
            $object->setCACert($data['CACert']);
        } elseif (\array_key_exists('CACert', $data) && $data['CACert'] === null) {
            $object->setCACert(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getProtocol()) {
            $data['Protocol'] = $object->getProtocol();
        }
        if (null !== $object->getURL()) {
            $data['URL'] = $object->getURL();
        }
        if (null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Options'] = $values;
        }
        if (null !== $object->getCACert()) {
            $data['CACert'] = $object->getCACert();
        }

        return $data;
    }
}
