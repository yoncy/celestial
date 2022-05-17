<?php

declare(strict_types=1);

namespace Quickweb\Library;

use DateTime;

abstract class CelestialObject
{
    public const OBJECT_TYPE_DIURNAL = 'diurnal';
    public const OBJECT_TYPE_NOCTURNAL = 'nocturnal';

    public const OBJECT_TYPES = [
        self::OBJECT_TYPE_DIURNAL,
        self::OBJECT_TYPE_NOCTURNAL,
    ];
    /** @var bool */
    private $isDay;

    /** @var string */
    private $objectType;

    /** @var bool */
    private $saved;

    /** @var bool */
    private $stolen;

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return static::class;
    }

    /**
     * @return bool
     */
    public function getIsDay(): bool
    {
        $now = new DateTime('now');
        $currentHour = $now->format('H');
        if ($currentHour > 7 && $currentHour < 20) {
            $this->isDay = true;
        } else {
            $this->isDay = false;
        }

        return $this->isDay;
    }

    /**
     * @return string
     */
    public function getObjectType(): string
    {
        return $this->objectType;
    }

    /**
     * @return bool
     */
    public function isSaved(): bool
    {
        return $this->saved;
    }

    /**
     * @return bool
     */
    public function isStolen(): bool
    {
        return $this->stolen;
    }

    abstract public function objectRise();

    abstract public function objectSet();

    /**
     * @param bool $isDay
     */
    public function setIsDay(bool $isDay): void
    {
        $this->isDay = $isDay;
    }

    /**
     * @param string $objectType
     */
    public function setObjectType(string $objectType): void
    {
        $this->objectType = $objectType;
    }

    /**
     * @param bool $saved
     */
    public function setSaved(bool $saved): void
    {
        $this->saved = $saved;
        $this->stolen = !$saved;
    }

    /**
     * @param bool $stolen
     */
    public function setStolen(bool $stolen): void
    {
        $this->stolen = $stolen;
        $this->saved = !$stolen;
    }
}


