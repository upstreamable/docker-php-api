<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class ContainerPause extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    protected $id;

    /**
     * Use the cgroups freezer to suspend all processes in a container.

    Traditionally, when suspending a process the `SIGSTOP` signal is used, which is observable by the process being suspended. With the cgroups freezer the process is unaware, and unable to capture, that it is being suspended, and subsequently resumed.

     *
     * @param string $id ID or name of the container
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/pause');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerPauseNotFoundException
     * @throws \Docker\API\Exception\ContainerPauseInternalServerErrorException
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ContainerPauseNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ContainerPauseInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
}
