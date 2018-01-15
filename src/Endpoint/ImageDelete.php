<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class ImageDelete extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    protected $name;

    /**
     * Remove an image, along with any untagged parent images that were.
    referenced by that image.

    Images can't be removed if they have descendant images, are being
    used by a running container or are being used by a build.

     *
     * @param string $name            Image name or ID
     * @param array  $queryParameters {
     *
     *     @var bool $force Remove the image even if it is being used by stopped containers or has other tags
     *     @var bool $noprune Do not delete untagged parent images
     * }
     */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{name}'], [$this->name], '/images/{name}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ImageDeleteNotFoundException
     * @throws \Docker\API\Exception\ImageDeleteConflictException
     * @throws \Docker\API\Exception\ImageDeleteInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ImageDeleteResponseItem[]
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ImageDeleteResponseItem[]', 'json');
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ImageDeleteNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (409 === $status) {
            throw new \Docker\API\Exception\ImageDeleteConflictException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ImageDeleteInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['force', 'noprune']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['force' => false, 'noprune' => false]);
        $optionsResolver->setAllowedTypes('force', ['bool']);
        $optionsResolver->setAllowedTypes('noprune', ['bool']);

        return $optionsResolver;
    }
}
