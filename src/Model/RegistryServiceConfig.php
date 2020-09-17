<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class RegistryServiceConfig
{
    /**
     * List of IP ranges to which nondistributable artifacts can be pushed,.

    > **Warning**: Nondistributable artifacts typically have restrictions
     *
     * @var string[]
     */
    protected $allowNondistributableArtifactsCIDRs;
    /**
     * List of registry hostnames to which nondistributable artifacts can be.

    > **Warning**: Nondistributable artifacts typically have restrictions
     *
     * @var string[]
     */
    protected $allowNondistributableArtifactsHostnames;
    /**
     * List of IP ranges of insecure registries, using the CIDR syntax.

    > **Warning**: Using this option can be useful when running a local
     *
     * @var string[]
     */
    protected $insecureRegistryCIDRs;
    /**
     * @var IndexInfo[]
     */
    protected $indexConfigs;
    /**
     * List of registry URLs that act as a mirror for the official.
     *
     * @var string[]
     */
    protected $mirrors;

    /**
     * List of IP ranges to which nondistributable artifacts can be pushed,.

    > **Warning**: Nondistributable artifacts typically have restrictions
     *
     * @return string[]|null
     */
    public function getAllowNondistributableArtifactsCIDRs(): ?array
    {
        return $this->allowNondistributableArtifactsCIDRs;
    }

    /**
     * List of IP ranges to which nondistributable artifacts can be pushed,.

    > **Warning**: Nondistributable artifacts typically have restrictions
     *
     * @param string[]|null $allowNondistributableArtifactsCIDRs
     */
    public function setAllowNondistributableArtifactsCIDRs(?array $allowNondistributableArtifactsCIDRs): self
    {
        $this->allowNondistributableArtifactsCIDRs = $allowNondistributableArtifactsCIDRs;

        return $this;
    }

    /**
     * List of registry hostnames to which nondistributable artifacts can be.

    > **Warning**: Nondistributable artifacts typically have restrictions
     *
     * @return string[]|null
     */
    public function getAllowNondistributableArtifactsHostnames(): ?array
    {
        return $this->allowNondistributableArtifactsHostnames;
    }

    /**
     * List of registry hostnames to which nondistributable artifacts can be.

    > **Warning**: Nondistributable artifacts typically have restrictions
     *
     * @param string[]|null $allowNondistributableArtifactsHostnames
     */
    public function setAllowNondistributableArtifactsHostnames(?array $allowNondistributableArtifactsHostnames): self
    {
        $this->allowNondistributableArtifactsHostnames = $allowNondistributableArtifactsHostnames;

        return $this;
    }

    /**
     * List of IP ranges of insecure registries, using the CIDR syntax.

    > **Warning**: Using this option can be useful when running a local
     *
     * @return string[]|null
     */
    public function getInsecureRegistryCIDRs(): ?array
    {
        return $this->insecureRegistryCIDRs;
    }

    /**
     * List of IP ranges of insecure registries, using the CIDR syntax.

    > **Warning**: Using this option can be useful when running a local
     *
     * @param string[]|null $insecureRegistryCIDRs
     */
    public function setInsecureRegistryCIDRs(?array $insecureRegistryCIDRs): self
    {
        $this->insecureRegistryCIDRs = $insecureRegistryCIDRs;

        return $this;
    }

    /**
     * @return IndexInfo[]|null
     */
    public function getIndexConfigs(): ?\ArrayObject
    {
        return $this->indexConfigs;
    }

    /**
     * @param IndexInfo[]|null $indexConfigs
     */
    public function setIndexConfigs(?\ArrayObject $indexConfigs): self
    {
        $this->indexConfigs = $indexConfigs;

        return $this;
    }

    /**
     * List of registry URLs that act as a mirror for the official.
     *
     * @return string[]|null
     */
    public function getMirrors(): ?array
    {
        return $this->mirrors;
    }

    /**
     * List of registry URLs that act as a mirror for the official.
     *
     * @param string[]|null $mirrors
     */
    public function setMirrors(?array $mirrors): self
    {
        $this->mirrors = $mirrors;

        return $this;
    }
}
