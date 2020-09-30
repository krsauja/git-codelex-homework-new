<?php declare(strict_types=1);

require_once __DIR__ . '/Choice/Spices.php';
require_once __DIR__ . '/Choice/Salt.php';
require_once __DIR__ . '/Choice/Pepper.php';
require_once __DIR__ . '/Choice/Paprika.php';

use app\Choice\{
    Salt,
    Pepper,
    Paprika
};

$spices = [
    new Salt(),
    new Pepper(),
    new Paprika(),
];

foreach ($spices as $spice) {
    echo '× ' . $spice->getName() . ' ×' . "\n";
}

