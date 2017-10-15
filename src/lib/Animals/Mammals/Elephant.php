<?php
namespace Animals\Mammals;
class Elephant
{
    private $init;

    public function __construct()
    {
        $init = "Elephant class loaded.<br>".PHP_EOL;
        echo $init;
    }
}