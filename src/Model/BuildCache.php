<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class BuildCache
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var string
     */
    protected $parent;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $inUse;
    /**
     * @var bool
     */
    protected $shared;
    /**
     * Amount of disk space used by the build cache (in bytes).
     *
     * @var int
     */
    protected $size;
    /**
     * Date and time at which the build cache was created in.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Date and time at which the build cache was last used in.
     *
     * @var string
     */
    protected $lastUsedAt;
    /**
     * @var int
     */
    protected $usageCount;

    public function getID(): ?string
    {
        return $this->iD;
    }

    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInUse(): ?bool
    {
        return $this->inUse;
    }

    public function setInUse(?bool $inUse): self
    {
        $this->inUse = $inUse;

        return $this;
    }

    public function getShared(): ?bool
    {
        return $this->shared;
    }

    public function setShared(?bool $shared): self
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * Amount of disk space used by the build cache (in bytes).
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * Amount of disk space used by the build cache (in bytes).
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Date and time at which the build cache was created in.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Date and time at which the build cache was created in.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time at which the build cache was last used in.
     */
    public function getLastUsedAt(): ?string
    {
        return $this->lastUsedAt;
    }

    /**
     * Date and time at which the build cache was last used in.
     */
    public function setLastUsedAt(?string $lastUsedAt): self
    {
        $this->lastUsedAt = $lastUsedAt;

        return $this;
    }

    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    public function setUsageCount(?int $usageCount): self
    {
        $this->usageCount = $usageCount;

        return $this;
    }
}
