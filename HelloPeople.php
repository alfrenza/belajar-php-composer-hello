<?php

require_once __DIR__ . '/vendor/autoload.php';

use ProgrammerZamanNow\Data\People;

$people = new People("Eko"); 

echo $people->sayHello("Uya") . PHP_EOL;