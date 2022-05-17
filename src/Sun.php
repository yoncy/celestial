<?php

declare(strict_types=1);

namespace Quickweb\Library;

class Sun extends CelestialObject
{
    /** @var string */
    private $objectType = self::OBJECT_TYPE_DIURNAL;

    public function objectRise(): bool
    {
        return $this->getIsDay();
    }

    public function objectSet(): void
    {
        $this->setIsDay(true);
    }
}


