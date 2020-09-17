<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class ImageCreate extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    use \Docker\API\Runtime\Client\EndpointTrait;

    /**
     * Create an image by either pulling it from a registry or importing it.
     *
     * @param string $inputImage Image content if the value `-` has been specified in fromSrc query parameter
     * @param array $queryParameters {
     *     @var string $fromImage Name of the image to pull. The name may include a tag or digest. This parameter may only be used when pulling an image. The pull is cancelled if the HTTP connection is closed.
     *     @var string $fromSrc Source to import. The value may be a URL from which the image can be retrieved or `-` to read the image from the request body. This parameter may only be used when importing an image.
     *     @var string $repo Repository name given to an image when it is imported. The repo may include a tag. This parameter may only be used when importing an image.
     *     @var string $tag Tag or digest. If empty when pulling an image, this causes all tags for the given image to be pulled.
     *     @var string $message Set commit message for imported image.
     *     @var string $platform Platform in the format os[/arch[/variant]]
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration.
     *
     * Refer to the [authentication section](#section/Authentication) for
     * details.
     *
     * }
     */
    public function __construct(string $inputImage, array $queryParameters = [], array $headerParameters = [])
    {
        $this->body = $inputImage;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/images/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], $this->body];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['fromImage', 'fromSrc', 'repo', 'tag', 'message', 'platform']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['platform' => '']);
        $optionsResolver->setAllowedTypes('fromImage', ['string']);
        $optionsResolver->setAllowedTypes('fromSrc', ['string']);
        $optionsResolver->setAllowedTypes('repo', ['string']);
        $optionsResolver->setAllowedTypes('tag', ['string']);
        $optionsResolver->setAllowedTypes('message', ['string']);
        $optionsResolver->setAllowedTypes('platform', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Registry-Auth']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('X-Registry-Auth', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ImageCreateNotFoundException
     * @throws \Docker\API\Exception\ImageCreateInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ImageCreateNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ImageCreateInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
}
