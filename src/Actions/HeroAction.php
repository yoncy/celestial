<?php

declare(strict_types=1);

use Quickweb\Library\Database\Connection;
use Quickweb\Library\Hero;

require_once '../../vendor/autoload.php';

$connection = new Connection();
$heroInstance = Hero::createHero();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sanitizedData = array_map(static function ($value) {
        return htmlspecialchars($value);
    }, $_POST);

    $data = [
        /** @var $hero Hero */
        'class' => (string) $heroInstance->getClassname(),
        'action' => (string) $heroInstance->fight(),
        'value' => json_encode(['age' => $heroInstance::getAge(), 'height' => $heroInstance::getHeight()])
    ];

    $connection->insertLogs($data);
}

