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

class ContainersCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainersCreatePostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\ContainersCreatePostBody';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\ContainersCreatePostBody();
        if (property_exists($data, 'Hostname') && $data->{'Hostname'} !== null) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Domainname') && $data->{'Domainname'} !== null) {
            $object->setDomainname($data->{'Domainname'});
        }
        if (property_exists($data, 'User') && $data->{'User'} !== null) {
            $object->setUser($data->{'User'});
        }
        if (property_exists($data, 'AttachStdin') && $data->{'AttachStdin'} !== null) {
            $object->setAttachStdin($data->{'AttachStdin'});
        }
        if (property_exists($data, 'AttachStdout') && $data->{'AttachStdout'} !== null) {
            $object->setAttachStdout($data->{'AttachStdout'});
        }
        if (property_exists($data, 'AttachStderr') && $data->{'AttachStderr'} !== null) {
            $object->setAttachStderr($data->{'AttachStderr'});
        }
        if (property_exists($data, 'ExposedPorts') && $data->{'ExposedPorts'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'ExposedPorts'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setExposedPorts($values);
        }
        if (property_exists($data, 'Tty') && $data->{'Tty'} !== null) {
            $object->setTty($data->{'Tty'});
        }
        if (property_exists($data, 'OpenStdin') && $data->{'OpenStdin'} !== null) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'StdinOnce') && $data->{'StdinOnce'} !== null) {
            $object->setStdinOnce($data->{'StdinOnce'});
        }
        if (property_exists($data, 'Env') && $data->{'Env'} !== null) {
            $values_1 = [];
            foreach ($data->{'Env'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        }
        if (property_exists($data, 'Cmd') && $data->{'Cmd'} !== null) {
            $values_2 = [];
            foreach ($data->{'Cmd'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCmd($values_2);
        }
        if (property_exists($data, 'Healthcheck') && $data->{'Healthcheck'} !== null) {
            $object->setHealthcheck($this->denormalizer->denormalize($data->{'Healthcheck'}, 'Docker\\API\\Model\\HealthConfig', 'json', $context));
        }
        if (property_exists($data, 'ArgsEscaped') && $data->{'ArgsEscaped'} !== null) {
            $object->setArgsEscaped($data->{'ArgsEscaped'});
        }
        if (property_exists($data, 'Image') && $data->{'Image'} !== null) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'Volumes') && $data->{'Volumes'} !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Volumes'} as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setVolumes($values_3);
        }
        if (property_exists($data, 'WorkingDir') && $data->{'WorkingDir'} !== null) {
            $object->setWorkingDir($data->{'WorkingDir'});
        }
        if (property_exists($data, 'Entrypoint') && $data->{'Entrypoint'} !== null) {
            $values_4 = [];
            foreach ($data->{'Entrypoint'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setEntrypoint($values_4);
        }
        if (property_exists($data, 'NetworkDisabled') && $data->{'NetworkDisabled'} !== null) {
            $object->setNetworkDisabled($data->{'NetworkDisabled'});
        }
        if (property_exists($data, 'MacAddress') && $data->{'MacAddress'} !== null) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'OnBuild') && $data->{'OnBuild'} !== null) {
            $values_5 = [];
            foreach ($data->{'OnBuild'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setOnBuild($values_5);
        }
        if (property_exists($data, 'Labels') && $data->{'Labels'} !== null) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $object->setLabels($values_6);
        }
        if (property_exists($data, 'StopSignal') && $data->{'StopSignal'} !== null) {
            $object->setStopSignal($data->{'StopSignal'});
        }
        if (property_exists($data, 'StopTimeout') && $data->{'StopTimeout'} !== null) {
            $object->setStopTimeout($data->{'StopTimeout'});
        }
        if (property_exists($data, 'Shell') && $data->{'Shell'} !== null) {
            $values_7 = [];
            foreach ($data->{'Shell'} as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setShell($values_7);
        }
        if (property_exists($data, 'HostConfig') && $data->{'HostConfig'} !== null) {
            $object->setHostConfig($this->denormalizer->denormalize($data->{'HostConfig'}, 'Docker\\API\\Model\\HostConfig', 'json', $context));
        }
        if (property_exists($data, 'NetworkingConfig') && $data->{'NetworkingConfig'} !== null) {
            $object->setNetworkingConfig($this->denormalizer->denormalize($data->{'NetworkingConfig'}, 'Docker\\API\\Model\\NetworkingConfig', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getDomainname()) {
            $data->{'Domainname'} = $object->getDomainname();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }
        if (null !== $object->getAttachStdin()) {
            $data->{'AttachStdin'} = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data->{'AttachStdout'} = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data->{'AttachStderr'} = $object->getAttachStderr();
        }
        if (null !== $object->getExposedPorts()) {
            $values = new \stdClass();
            foreach ($object->getExposedPorts() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'ExposedPorts'} = $values;
        }
        if (null !== $object->getTty()) {
            $data->{'Tty'} = $object->getTty();
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getStdinOnce()) {
            $data->{'StdinOnce'} = $object->getStdinOnce();
        }
        if (null !== $object->getEnv()) {
            $values_1 = [];
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Env'} = $values_1;
        }
        if (null !== $object->getCmd()) {
            $values_2 = [];
            foreach ($object->getCmd() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Cmd'} = $values_2;
        }
        if (null !== $object->getHealthcheck()) {
            $data->{'Healthcheck'} = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
        }
        if (null !== $object->getArgsEscaped()) {
            $data->{'ArgsEscaped'} = $object->getArgsEscaped();
        }
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getVolumes()) {
            $values_3 = new \stdClass();
            foreach ($object->getVolumes() as $key_1 => $value_3) {
                $values_3->{$key_1} = $value_3;
            }
            $data->{'Volumes'} = $values_3;
        }
        if (null !== $object->getWorkingDir()) {
            $data->{'WorkingDir'} = $object->getWorkingDir();
        }
        if (null !== $object->getEntrypoint()) {
            $values_4 = [];
            foreach ($object->getEntrypoint() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'Entrypoint'} = $values_4;
        }
        if (null !== $object->getNetworkDisabled()) {
            $data->{'NetworkDisabled'} = $object->getNetworkDisabled();
        }
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        if (null !== $object->getOnBuild()) {
            $values_5 = [];
            foreach ($object->getOnBuild() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'OnBuild'} = $values_5;
        }
        if (null !== $object->getLabels()) {
            $values_6 = new \stdClass();
            foreach ($object->getLabels() as $key_2 => $value_6) {
                $values_6->{$key_2} = $value_6;
            }
            $data->{'Labels'} = $values_6;
        }
        if (null !== $object->getStopSignal()) {
            $data->{'StopSignal'} = $object->getStopSignal();
        }
        if (null !== $object->getStopTimeout()) {
            $data->{'StopTimeout'} = $object->getStopTimeout();
        }
        if (null !== $object->getShell()) {
            $values_7 = [];
            foreach ($object->getShell() as $value_7) {
                $values_7[] = $value_7;
            }
            $data->{'Shell'} = $values_7;
        }
        if (null !== $object->getHostConfig()) {
            $data->{'HostConfig'} = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkingConfig()) {
            $data->{'NetworkingConfig'} = $this->normalizer->normalize($object->getNetworkingConfig(), 'json', $context);
        }

        return $data;
    }
}
