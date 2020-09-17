<?php

declare(strict_types=1);

namespace Docker\API\Model;

class SystemVersionPlatform
{
    /**
     *
     *
     * @var string|null
     */
    protected $name;

    /**
     *
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
