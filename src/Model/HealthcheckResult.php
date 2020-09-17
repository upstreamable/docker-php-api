<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class HealthcheckResult
{
    /**
     * Date and time at which this check started in.
     *
     * @var \DateTime
     */
    protected $start;
    /**
     * Date and time at which this check ended in.
     *
     * @var string
     */
    protected $end;
    /**
     * ExitCode meanings:.
     *
     * @var int
     */
    protected $exitCode;
    /**
     * Output from last check.
     *
     * @var string
     */
    protected $output;

    /**
     * Date and time at which this check started in.
     */
    public function getStart(): ?\DateTime
    {
        return $this->start;
    }

    /**
     * Date and time at which this check started in.
     */
    public function setStart(?\DateTime $start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Date and time at which this check ended in.
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }

    /**
     * Date and time at which this check ended in.
     */
    public function setEnd(?string $end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * ExitCode meanings:.
     */
    public function getExitCode(): ?int
    {
        return $this->exitCode;
    }

    /**
     * ExitCode meanings:.
     */
    public function setExitCode(?int $exitCode): self
    {
        $this->exitCode = $exitCode;

        return $this;
    }

    /**
     * Output from last check.
     */
    public function getOutput(): ?string
    {
        return $this->output;
    }

    /**
     * Output from last check.
     */
    public function setOutput(?string $output): self
    {
        $this->output = $output;

        return $this;
    }
}