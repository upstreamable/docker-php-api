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

class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Task';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\Task';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\Task();
        if (property_exists($data, 'ID') && $data->{'ID'} !== null) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Version') && $data->{'Version'} !== null) {
            $object->setVersion($this->denormalizer->denormalize($data->{'Version'}, 'Docker\\API\\Model\\ObjectVersion', 'json', $context));
        }
        if (property_exists($data, 'CreatedAt') && $data->{'CreatedAt'} !== null) {
            $object->setCreatedAt($data->{'CreatedAt'});
        }
        if (property_exists($data, 'UpdatedAt') && $data->{'UpdatedAt'} !== null) {
            $object->setUpdatedAt($data->{'UpdatedAt'});
        }
        if (property_exists($data, 'Name') && $data->{'Name'} !== null) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels') && $data->{'Labels'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'Spec') && $data->{'Spec'} !== null) {
            $object->setSpec($this->denormalizer->denormalize($data->{'Spec'}, 'Docker\\API\\Model\\TaskSpec', 'json', $context));
        }
        if (property_exists($data, 'ServiceID') && $data->{'ServiceID'} !== null) {
            $object->setServiceID($data->{'ServiceID'});
        }
        if (property_exists($data, 'Slot') && $data->{'Slot'} !== null) {
            $object->setSlot($data->{'Slot'});
        }
        if (property_exists($data, 'NodeID') && $data->{'NodeID'} !== null) {
            $object->setNodeID($data->{'NodeID'});
        }
        if (property_exists($data, 'AssignedGenericResources') && $data->{'AssignedGenericResources'} !== null) {
            $values_1 = [];
            foreach ($data->{'AssignedGenericResources'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setAssignedGenericResources($values_1);
        }
        if (property_exists($data, 'Status') && $data->{'Status'} !== null) {
            $object->setStatus($this->denormalizer->denormalize($data->{'Status'}, 'Docker\\API\\Model\\TaskStatus', 'json', $context));
        }
        if (property_exists($data, 'DesiredState') && $data->{'DesiredState'} !== null) {
            $object->setDesiredState($data->{'DesiredState'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'UpdatedAt'} = $object->getUpdatedAt();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getServiceID()) {
            $data->{'ServiceID'} = $object->getServiceID();
        }
        if (null !== $object->getSlot()) {
            $data->{'Slot'} = $object->getSlot();
        }
        if (null !== $object->getNodeID()) {
            $data->{'NodeID'} = $object->getNodeID();
        }
        if (null !== $object->getAssignedGenericResources()) {
            $values_1 = [];
            foreach ($object->getAssignedGenericResources() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'AssignedGenericResources'} = $values_1;
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getDesiredState()) {
            $data->{'DesiredState'} = $object->getDesiredState();
        }

        return $data;
    }
}
