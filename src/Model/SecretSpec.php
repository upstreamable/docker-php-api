<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SecretSpec
{
    /**
     * User-defined name of the secret.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5)).
     *
     * @var string
     */
    protected $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $driver;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $templating;

    /**
     * User-defined name of the secret.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * User-defined name of the secret.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]|null
     */
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[]|null $labels
     */
    public function setLabels(?\ArrayObject $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5)).
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5)).
     */
    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     */
    public function getDriver(): ?Driver
    {
        return $this->driver;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     */
    public function setDriver(?Driver $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     */
    public function getTemplating(): ?Driver
    {
        return $this->templating;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     */
    public function setTemplating(?Driver $templating): self
    {
        $this->templating = $templating;

        return $this;
    }
}
