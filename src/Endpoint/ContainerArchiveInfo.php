<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class ContainerArchiveInfo extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    protected $id;

    /**
     * A response header `X-Docker-Container-Path-Stat` is return containing a base64 - encoded JSON object with some filesystem header information about the path.
     *
     * @param string $id              ID or name of the container
     * @param array  $queryParameters {
     *
     *     @var string $path Resource in the container’s filesystem to archive.
     * }
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/archive');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerArchiveInfoBadRequestException
     * @throws \Docker\API\Exception\ContainerArchiveInfoNotFoundException
     * @throws \Docker\API\Exception\ContainerArchiveInfoInternalServerErrorException
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Docker\API\Exception\ContainerArchiveInfoBadRequestException($serializer->deserialize($body, 'Docker\\API\\Model\\ContainersIdArchiveHeadResponse400', 'json'));
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ContainerArchiveInfoNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ContainerArchiveInfoInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['path']);
        $optionsResolver->setRequired(['path']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('path', ['string']);

        return $optionsResolver;
    }
}
