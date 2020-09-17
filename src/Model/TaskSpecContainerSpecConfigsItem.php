<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecContainerSpecConfigsItem
{
    /**
     * File represents a specific target that is backed by a file.

    > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     *
     * @var TaskSpecContainerSpecConfigsItemFile
     */
    protected $file;
    /**
     * Runtime represents a target that is not mounted into the.

    > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     *
     * @var mixed
     */
    protected $runtime;
    /**
     * ConfigID represents the ID of the specific config that we're.
     *
     * @var string
     */
    protected $configID;
    /**
     * ConfigName is the name of the config that this references,.
     *
     * @var string
     */
    protected $configName;

    /**
     * File represents a specific target that is backed by a file.

    > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     */
    public function getFile(): ?TaskSpecContainerSpecConfigsItemFile
    {
        return $this->file;
    }

    /**
     * File represents a specific target that is backed by a file.

    > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     */
    public function setFile(?TaskSpecContainerSpecConfigsItemFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Runtime represents a target that is not mounted into the.

    > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     *
     * @return mixed
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Runtime represents a target that is not mounted into the.

    > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     *
     * @param mixed $runtime
     */
    public function setRuntime($runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * ConfigID represents the ID of the specific config that we're.
     */
    public function getConfigID(): ?string
    {
        return $this->configID;
    }

    /**
     * ConfigID represents the ID of the specific config that we're.
     */
    public function setConfigID(?string $configID): self
    {
        $this->configID = $configID;

        return $this;
    }

    /**
     * ConfigName is the name of the config that this references,.
     */
    public function getConfigName(): ?string
    {
        return $this->configName;
    }

    /**
     * ConfigName is the name of the config that this references,.
     */
    public function setConfigName(?string $configName): self
    {
        $this->configName = $configName;

        return $this;
    }
}