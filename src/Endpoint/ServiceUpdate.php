<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class ServiceUpdate extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    use \Docker\API\Runtime\Client\EndpointTrait;

    protected $id;

    /**
     *
     *
     * @param string $id ID or name of service.
     * @param \Docker\API\Model\ServicesIdUpdatePostBody $body
     * @param array $queryParameters {
     *     @var int $version The version number of the service object being updated. This is
     * required to avoid conflicting writes.
     * This version number should be the value as currently set on the
     * service *before* the update. You can find the current version by
     * calling `GET /services/{id}`
     *
     *     @var string $registryAuthFrom If the `X-Registry-Auth` header is not specified, this parameter
     * indicates where to find registry authorization credentials.
     *
     *     @var string $rollback Set to this parameter to `previous` to cause a server-side rollback
     * to the previous service spec. The supplied spec will be ignored in
     * this case.
     *
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration for pulling from private
     * registries.
     *
     * Refer to the [authentication section](#section/Authentication) for
     * details.
     *
     * }
     */
    public function __construct(string $id, \Docker\API\Model\ServicesIdUpdatePostBody $body, array $queryParameters = [], array $headerParameters = [])
    {
        $this->id = $id;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/services/{id}/update');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
        $optionsResolver->setDefined(['version', 'registryAuthFrom', 'rollback']);
        $optionsResolver->setRequired(['version']);
        $optionsResolver->setDefaults(['registryAuthFrom' => 'spec']);
        $optionsResolver->setAllowedTypes('version', ['int']);
        $optionsResolver->setAllowedTypes('registryAuthFrom', ['string']);
        $optionsResolver->setAllowedTypes('rollback', ['string']);

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
     * @throws \Docker\API\Exception\ServiceUpdateBadRequestException
     * @throws \Docker\API\Exception\ServiceUpdateNotFoundException
     * @throws \Docker\API\Exception\ServiceUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceUpdateServiceUnavailableException
     *
     * @return null|\Docker\API\Model\ServiceUpdateResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ServiceUpdateResponse', 'json');
        }
        if (400 === $status) {
            throw new \Docker\API\Exception\ServiceUpdateBadRequestException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ServiceUpdateNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ServiceUpdateInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Docker\API\Exception\ServiceUpdateServiceUnavailableException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
}
