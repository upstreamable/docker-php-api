<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmJoinPostBody
{
    /**
     * Listen address used for inter-manager communication if the node.
     *
     * @var string
     */
    protected $listenAddr;
    /**
     * Externally reachable address advertised to other nodes. This.
     *
     * @var string
     */
    protected $advertiseAddr;
    /**
     * Address or interface to use for data path traffic (format:.
     *
     * @var string
     */
    protected $dataPathAddr;
    /**
     * Addresses of manager nodes already participating in the swarm.
     *
     * @var string[]
     */
    protected $remoteAddrs;
    /**
     * Secret token for joining this swarm.
     *
     * @var string
     */
    protected $joinToken;

    /**
     * Listen address used for inter-manager communication if the node.
     */
    public function getListenAddr(): ?string
    {
        return $this->listenAddr;
    }

    /**
     * Listen address used for inter-manager communication if the node.
     */
    public function setListenAddr(?string $listenAddr): self
    {
        $this->listenAddr = $listenAddr;

        return $this;
    }

    /**
     * Externally reachable address advertised to other nodes. This.
     */
    public function getAdvertiseAddr(): ?string
    {
        return $this->advertiseAddr;
    }

    /**
     * Externally reachable address advertised to other nodes. This.
     */
    public function setAdvertiseAddr(?string $advertiseAddr): self
    {
        $this->advertiseAddr = $advertiseAddr;

        return $this;
    }

    /**
     * Address or interface to use for data path traffic (format:.
     */
    public function getDataPathAddr(): ?string
    {
        return $this->dataPathAddr;
    }

    /**
     * Address or interface to use for data path traffic (format:.
     */
    public function setDataPathAddr(?string $dataPathAddr): self
    {
        $this->dataPathAddr = $dataPathAddr;

        return $this;
    }

    /**
     * Addresses of manager nodes already participating in the swarm.
     *
     * @return string[]|null
     */
    public function getRemoteAddrs(): ?array
    {
        return $this->remoteAddrs;
    }

    /**
     * Addresses of manager nodes already participating in the swarm.
     *
     * @param string[]|null $remoteAddrs
     */
    public function setRemoteAddrs(?array $remoteAddrs): self
    {
        $this->remoteAddrs = $remoteAddrs;

        return $this;
    }

    /**
     * Secret token for joining this swarm.
     */
    public function getJoinToken(): ?string
    {
        return $this->joinToken;
    }

    /**
     * Secret token for joining this swarm.
     */
    public function setJoinToken(?string $joinToken): self
    {
        $this->joinToken = $joinToken;

        return $this;
    }
}
