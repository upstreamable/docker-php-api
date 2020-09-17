<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ServiceSpecMode
{
    /**
     * @var ServiceSpecModeReplicated
     */
    protected $replicated;
    /**
     * @var mixed
     */
    protected $global;

    public function getReplicated(): ?ServiceSpecModeReplicated
    {
        return $this->replicated;
    }

    public function setReplicated(?ServiceSpecModeReplicated $replicated): self
    {
        $this->replicated = $replicated;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * @param mixed $global
     */
    public function setGlobal($global): self
    {
        $this->global = $global;

        return $this;
    }
}
