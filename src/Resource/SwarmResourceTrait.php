<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

trait SwarmResourceTrait
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SwarmInspectNotFoundException
     * @throws \Docker\API\Exception\SwarmInspectInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Swarm|\Psr\Http\Message\ResponseInterface
     */
    public function swarmInspect(string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\SwarmInspect();

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param \Docker\API\Model\SwarmInitPostBody $body
     * @param string                              $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SwarmInitBadRequestException
     * @throws \Docker\API\Exception\SwarmInitInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmInitServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmInit(\Docker\API\Model\SwarmInitPostBody $body, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\SwarmInit($body);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param \Docker\API\Model\SwarmJoinPostBody $body
     * @param string                              $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SwarmJoinBadRequestException
     * @throws \Docker\API\Exception\SwarmJoinInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmJoinServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmJoin(\Docker\API\Model\SwarmJoinPostBody $body, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\SwarmJoin($body);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var bool $force Force leave swarm, even if this is the last manager or that it will break the cluster.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SwarmLeaveInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmLeaveServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmLeave(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\SwarmLeave($queryParameters);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param \Docker\API\Model\SwarmSpec $body
     * @param array                       $queryParameters {
     *
     *     @var int $version The version number of the swarm object being updated. This is required to avoid conflicting writes.
     *     @var bool $rotateWorkerToken rotate the worker join token
     *     @var bool $rotateManagerToken rotate the manager join token
     *     @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SwarmUpdateBadRequestException
     * @throws \Docker\API\Exception\SwarmUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUpdateServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmUpdate(\Docker\API\Model\SwarmSpec $body, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\SwarmUpdate($body, $queryParameters);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SwarmUnlockkeyInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUnlockkeyServiceUnavailableException
     *
     * @return null|\Docker\API\Model\SwarmUnlockkeyGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function swarmUnlockkey(string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\SwarmUnlockkey();

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param \Docker\API\Model\SwarmUnlockPostBody $body
     * @param string                                $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SwarmUnlockInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUnlockServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmUnlock(\Docker\API\Model\SwarmUnlockPostBody $body, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\SwarmUnlock($body);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }
}
