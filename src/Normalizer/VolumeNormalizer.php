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

class VolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Volume';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\Volume';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Volume();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
            $object->setDriver(null);
        }
        if (\array_key_exists('Mountpoint', $data) && $data['Mountpoint'] !== null) {
            $object->setMountpoint($data['Mountpoint']);
        } elseif (\array_key_exists('Mountpoint', $data) && $data['Mountpoint'] === null) {
            $object->setMountpoint(null);
        }
        if (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] !== null) {
            $object->setCreatedAt($data['CreatedAt']);
        } elseif (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Status'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setStatus($values);
        } elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setLabels($values_1);
        } elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('Scope', $data) && $data['Scope'] !== null) {
            $object->setScope($data['Scope']);
        } elseif (\array_key_exists('Scope', $data) && $data['Scope'] === null) {
            $object->setScope(null);
        }
        if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setOptions($values_2);
        } elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('UsageData', $data) && $data['UsageData'] !== null) {
            $object->setUsageData($this->denormalizer->denormalize($data['UsageData'], 'Docker\\API\\Model\\VolumeUsageData', 'json', $context));
        } elseif (\array_key_exists('UsageData', $data) && $data['UsageData'] === null) {
            $object->setUsageData(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['Name'] = $object->getName();
        $data['Driver'] = $object->getDriver();
        $data['Mountpoint'] = $object->getMountpoint();
        if (null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        }
        if (null !== $object->getStatus()) {
            $values = [];
            foreach ($object->getStatus() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Status'] = $values;
        }
        $values_1 = [];
        foreach ($object->getLabels() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $data['Labels'] = $values_1;
        $data['Scope'] = $object->getScope();
        $values_2 = [];
        foreach ($object->getOptions() as $key_2 => $value_2) {
            $values_2[$key_2] = $value_2;
        }
        $data['Options'] = $values_2;
        if (null !== $object->getUsageData()) {
            $data['UsageData'] = $this->normalizer->normalize($object->getUsageData(), 'json', $context);
        }

        return $data;
    }
}
