<?php

require_once 'Choice/Spice.php';
require_once 'Choice/Salt.php';
require_once 'Choice/Pepper.php';
require_once 'Choice/Paprika.php';

use app\Choice\{Salt, Pepper, Paprika};

$spices = [
    new Salt(),
    new Pepper(),
    new Paprika(),
];

foreach ($spices as $spice) {
    echo '× ' . $spice->getToTell() . ' ×' . "\n";
}

