<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ResourceObject
{
    /**
     * @var int
     */
    protected $nanoCPUs;
    /**
     * @var int
     */
    protected $memoryBytes;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or.
     *
     * @var GenericResourcesItem[]
     */
    protected $genericResources;

    public function getNanoCPUs(): ?int
    {
        return $this->nanoCPUs;
    }

    public function setNanoCPUs(?int $nanoCPUs): self
    {
        $this->nanoCPUs = $nanoCPUs;

        return $this;
    }

    public function getMemoryBytes(): ?int
    {
        return $this->memoryBytes;
    }

    public function setMemoryBytes(?int $memoryBytes): self
    {
        $this->memoryBytes = $memoryBytes;

        return $this;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or.
     *
     * @return GenericResourcesItem[]|null
     */
    public function getGenericResources(): ?array
    {
        return $this->genericResources;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or.
     *
     * @param GenericResourcesItem[]|null $genericResources
     */
    public function setGenericResources(?array $genericResources): self
    {
        $this->genericResources = $genericResources;

        return $this;
    }
}