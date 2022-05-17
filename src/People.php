<?php

declare(strict_types=1);

namespace Quickweb\Library;

abstract class People
{
    /** @var string */
    private $name;

    /** @var bool */
    private $withFeelings;

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return static::class;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return People
     */
    public function setName(string $name): People
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isWithFeelings(): bool
    {
        return $this->withFeelings;
    }

    /**
     * @param bool $withFeelings
     *
     * @return People
     */
    public function setWithFeelings(bool $withFeelings): People
    {
        $this->withFeelings = $withFeelings;

        return $this;
    }
}

