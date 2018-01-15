<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

trait SessionExperimentalResourceTrait
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Docker\API\Exception\SessionBadRequestException
     * @throws \Docker\API\Exception\SessionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function session(string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Docker\API\Endpoint\Session();

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }
}
