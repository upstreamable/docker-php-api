<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class PluginConfigInterface
{
    /**
     * @var PluginInterfaceType[]
     */
    protected $types;
    /**
     * @var string
     */
    protected $socket;
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @var string
     */
    protected $protocolScheme;

    /**
     * @return PluginInterfaceType[]|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }

    /**
     * @param PluginInterfaceType[]|null $types
     */
    public function setTypes(?array $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function getSocket(): ?string
    {
        return $this->socket;
    }

    public function setSocket(?string $socket): self
    {
        $this->socket = $socket;

        return $this;
    }

    /**
     * Protocol to use for clients connecting to the plugin.
     */
    public function getProtocolScheme(): ?string
    {
        return $this->protocolScheme;
    }

    /**
     * Protocol to use for clients connecting to the plugin.
     */
    public function setProtocolScheme(?string $protocolScheme): self
    {
        $this->protocolScheme = $protocolScheme;

        return $this;
    }
}
