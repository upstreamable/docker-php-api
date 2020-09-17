<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SystemVersion
{
    /**
     * @var SystemVersionPlatform
     */
    protected $platform;
    /**
     * Information about system components.
     *
     * @var SystemVersionComponentsItem[]
     */
    protected $components;
    /**
     * The version of the daemon.
     *
     * @var string
     */
    protected $version;
    /**
     * The default (and highest) API version that is supported by the daemon.
     *
     * @var string
     */
    protected $apiVersion;
    /**
     * The minimum API version that is supported by the daemon.
     *
     * @var string
     */
    protected $minAPIVersion;
    /**
     * The Git commit of the source code that was used to build the daemon.
     *
     * @var string
     */
    protected $gitCommit;
    /**
     * The version Go used to compile the daemon, and the version of the Go.
     *
     * @var string
     */
    protected $goVersion;
    /**
     * The operating system that the daemon is running on ("linux" or "windows").
     *
     * @var string
     */
    protected $os;
    /**
     * The architecture that the daemon is running on.
     *
     * @var string
     */
    protected $arch;
    /**
     * The kernel version (`uname -r`) that the daemon is running on.
     *
     * @var string
     */
    protected $kernelVersion;
    /**
     * Indicates if the daemon is started with experimental features enabled.
     *
     * @var bool
     */
    protected $experimental;
    /**
     * The date and time that the daemon was compiled.
     *
     * @var string
     */
    protected $buildTime;

    public function getPlatform(): ?SystemVersionPlatform
    {
        return $this->platform;
    }

    public function setPlatform(?SystemVersionPlatform $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Information about system components.
     *
     * @return SystemVersionComponentsItem[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Information about system components.
     *
     * @param SystemVersionComponentsItem[]|null $components
     */
    public function setComponents(?array $components): self
    {
        $this->components = $components;

        return $this;
    }

    /**
     * The version of the daemon.
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * The version of the daemon.
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * The default (and highest) API version that is supported by the daemon.
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * The default (and highest) API version that is supported by the daemon.
     */
    public function setApiVersion(?string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * The minimum API version that is supported by the daemon.
     */
    public function getMinAPIVersion(): ?string
    {
        return $this->minAPIVersion;
    }

    /**
     * The minimum API version that is supported by the daemon.
     */
    public function setMinAPIVersion(?string $minAPIVersion): self
    {
        $this->minAPIVersion = $minAPIVersion;

        return $this;
    }

    /**
     * The Git commit of the source code that was used to build the daemon.
     */
    public function getGitCommit(): ?string
    {
        return $this->gitCommit;
    }

    /**
     * The Git commit of the source code that was used to build the daemon.
     */
    public function setGitCommit(?string $gitCommit): self
    {
        $this->gitCommit = $gitCommit;

        return $this;
    }

    /**
     * The version Go used to compile the daemon, and the version of the Go.
     */
    public function getGoVersion(): ?string
    {
        return $this->goVersion;
    }

    /**
     * The version Go used to compile the daemon, and the version of the Go.
     */
    public function setGoVersion(?string $goVersion): self
    {
        $this->goVersion = $goVersion;

        return $this;
    }

    /**
     * The operating system that the daemon is running on ("linux" or "windows").
     */
    public function getOs(): ?string
    {
        return $this->os;
    }

    /**
     * The operating system that the daemon is running on ("linux" or "windows").
     */
    public function setOs(?string $os): self
    {
        $this->os = $os;

        return $this;
    }

    /**
     * The architecture that the daemon is running on.
     */
    public function getArch(): ?string
    {
        return $this->arch;
    }

    /**
     * The architecture that the daemon is running on.
     */
    public function setArch(?string $arch): self
    {
        $this->arch = $arch;

        return $this;
    }

    /**
     * The kernel version (`uname -r`) that the daemon is running on.
     */
    public function getKernelVersion(): ?string
    {
        return $this->kernelVersion;
    }

    /**
     * The kernel version (`uname -r`) that the daemon is running on.
     */
    public function setKernelVersion(?string $kernelVersion): self
    {
        $this->kernelVersion = $kernelVersion;

        return $this;
    }

    /**
     * Indicates if the daemon is started with experimental features enabled.
     */
    public function getExperimental(): ?bool
    {
        return $this->experimental;
    }

    /**
     * Indicates if the daemon is started with experimental features enabled.
     */
    public function setExperimental(?bool $experimental): self
    {
        $this->experimental = $experimental;

        return $this;
    }

    /**
     * The date and time that the daemon was compiled.
     */
    public function getBuildTime(): ?string
    {
        return $this->buildTime;
    }

    /**
     * The date and time that the daemon was compiled.
     */
    public function setBuildTime(?string $buildTime): self
    {
        $this->buildTime = $buildTime;

        return $this;
    }
}
