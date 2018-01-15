<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

trait VolumeAsyncResourceTrait
{
    /**
     * @param array $queryParameters {
     *
     *     @var string $filters JSON encoded value of the filters (a `map[string][]string`) to
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\VolumeListInternalServerErrorException
     *
     * @return null|\Docker\API\Model\VolumesGetResponse200|\Amp\Artax\Response
     */
    public function volumeList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\VolumeList($queryParameters);

        return $this->executeArtaxEndpoint($endpoint, $fetch);
    }

    /**
     * @param \Docker\API\Model\VolumesCreatePostBody $volumeConfig Volume configuration
     * @param string                                  $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\VolumeCreateInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Volume|\Amp\Artax\Response
     */
    public function volumeCreate(\Docker\API\Model\VolumesCreatePostBody $volumeConfig, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\VolumeCreate($volumeConfig);

        return $this->executeArtaxEndpoint($endpoint, $fetch);
    }

    /**
     * Instruct the driver to remove the volume.
     *
     * @param string $name            Volume name or ID
     * @param array  $queryParameters {
     *
     *     @var bool $force Force the removal of the volume
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\VolumeDeleteNotFoundException
     * @throws \Docker\API\Exception\VolumeDeleteConflictException
     * @throws \Docker\API\Exception\VolumeDeleteInternalServerErrorException
     *
     * @return null|\Amp\Artax\Response
     */
    public function volumeDelete(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\VolumeDelete($name, $queryParameters);

        return $this->executeArtaxEndpoint($endpoint, $fetch);
    }

    /**
     * @param string $name  Volume name or ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\VolumeInspectNotFoundException
     * @throws \Docker\API\Exception\VolumeInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Volume|\Amp\Artax\Response
     */
    public function volumeInspect(string $name, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\VolumeInspect($name);

        return $this->executeArtaxEndpoint($endpoint, $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $filters filters to process on the prune list, encoded as JSON (a `map[string][]string`)

     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\VolumePruneInternalServerErrorException
     *
     * @return null|\Docker\API\Model\VolumesPrunePostResponse200|\Amp\Artax\Response
     */
    public function volumePrune(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\VolumePrune($queryParameters);

        return $this->executeArtaxEndpoint($endpoint, $fetch);
    }
}
