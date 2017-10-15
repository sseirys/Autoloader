<?php

include_once(__DIR__."/src/autoloader.php");

$loader = new \src\Autoloader;
$loader->register();

$loader->addNamespace('Animals\Mammals', 'src/lib/Animals/Mammals');
$loader->addNamespace('Objects\Trees', 'src/custom/Objects/Trees');

$DogClass = new \Animals\Mammals\Dog;

$RacoonClass = new \Animals\Mammals\Racoon;

$oak = new \Objects\Trees\Oak;

echo "Loaded Dog, Racoon, Oak classes";

