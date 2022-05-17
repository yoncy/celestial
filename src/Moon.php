<?php

declare(strict_types=1);

namespace Quickweb\Library;

class Moon extends CelestialObject
{
    /** @var string */
    private $objectType = self::OBJECT_TYPE_NOCTURNAL;

    public function objectRise(): bool
    {
        return !$this->getIsDay();
    }

    public function objectSet(): void
    {
        $this->setIsDay(false);
    }
}

