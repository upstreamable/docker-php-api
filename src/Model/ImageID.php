<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ImageID
{
    /**
     * @var string
     */
    protected $iD;

    public function getID(): ?string
    {
        return $this->iD;
    }

    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}