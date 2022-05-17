<?php

declare(strict_types=1);

namespace Quickweb\Library;

class Hero
{
    /**
     * @var Hero
     */
    private static $hero;

    /** @var int */
    private static $age;

    /** @var numeric */
    private static $height;

    final private function __construct()
    {
        self::$age = 0;
    }

    public static function createHero(): Hero
    {
        if (!isset(self::$hero)) {
            self::$hero = new Hero();
        }

        return self::$hero;
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return static::class;
    }

    public function fight(): string
    {
        return 'Is a fighter';
    }

    public function run(): string
    {
        return 'Runner';
    }

    /**
     * @return Hero
     */
    public static function getHero(): Hero
    {
        return self::$hero;
    }

    /**
     * @param Hero $hero
     */
    public static function setHero(Hero $hero): void
    {
        self::$hero = $hero;
    }

    /**
     * @return int
     */
    public static function getAge(): int
    {
        return self::$age;
    }

    /**
     * @param int $age
     */
    public static function setAge(int $age): void
    {
        self::$age = $age;
    }

    /**
     * @return float|int|string
     */
    public static function getHeight()
    {
        return self::$height;
    }

    /**
     * @param float|int|string $height
     */
    public static function setHeight($height): void
    {
        self::$height = $height;
    }
}


