<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class SwarmJoin extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    /**
     * @param \Docker\API\Model\SwarmJoinPostBody $body
     */
    public function __construct(\Docker\API\Model\SwarmJoinPostBody $body)
    {
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/swarm/join';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return $this->getSerializedBody($serializer);
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\SwarmJoinBadRequestException
     * @throws \Docker\API\Exception\SwarmJoinInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmJoinServiceUnavailableException
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Docker\API\Exception\SwarmJoinBadRequestException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\SwarmJoinInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Docker\API\Exception\SwarmJoinServiceUnavailableException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
}
