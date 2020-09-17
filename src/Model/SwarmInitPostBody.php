<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmInitPostBody
{
    /**
     * Listen address used for inter-manager communication, as well.
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
     * DataPathPort specifies the data path port number for data traffic.
     *
     * @var int
     */
    protected $dataPathPort;
    /**
     * Default Address Pool specifies default subnet pools for global.
     *
     * @var string[]
     */
    protected $defaultAddrPool;
    /**
     * Force creation of a new swarm.
     *
     * @var bool
     */
    protected $forceNewCluster;
    /**
     * SubnetSize specifies the subnet size of the networks created.
     *
     * @var int
     */
    protected $subnetSize;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec
     */
    protected $spec;

    /**
     * Listen address used for inter-manager communication, as well.
     */
    public function getListenAddr(): ?string
    {
        return $this->listenAddr;
    }

    /**
     * Listen address used for inter-manager communication, as well.
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
     * DataPathPort specifies the data path port number for data traffic.
     */
    public function getDataPathPort(): ?int
    {
        return $this->dataPathPort;
    }

    /**
     * DataPathPort specifies the data path port number for data traffic.
     */
    public function setDataPathPort(?int $dataPathPort): self
    {
        $this->dataPathPort = $dataPathPort;

        return $this;
    }

    /**
     * Default Address Pool specifies default subnet pools for global.
     *
     * @return string[]|null
     */
    public function getDefaultAddrPool(): ?array
    {
        return $this->defaultAddrPool;
    }

    /**
     * Default Address Pool specifies default subnet pools for global.
     *
     * @param string[]|null $defaultAddrPool
     */
    public function setDefaultAddrPool(?array $defaultAddrPool): self
    {
        $this->defaultAddrPool = $defaultAddrPool;

        return $this;
    }

    /**
     * Force creation of a new swarm.
     */
    public function getForceNewCluster(): ?bool
    {
        return $this->forceNewCluster;
    }

    /**
     * Force creation of a new swarm.
     */
    public function setForceNewCluster(?bool $forceNewCluster): self
    {
        $this->forceNewCluster = $forceNewCluster;

        return $this;
    }

    /**
     * SubnetSize specifies the subnet size of the networks created.
     */
    public function getSubnetSize(): ?int
    {
        return $this->subnetSize;
    }

    /**
     * SubnetSize specifies the subnet size of the networks created.
     */
    public function setSubnetSize(?int $subnetSize): self
    {
        $this->subnetSize = $subnetSize;

        return $this;
    }

    /**
     * User modifiable swarm configuration.
     */
    public function getSpec(): ?SwarmSpec
    {
        return $this->spec;
    }

    /**
     * User modifiable swarm configuration.
     */
    public function setSpec(?SwarmSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }
}
