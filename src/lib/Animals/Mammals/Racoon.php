<?php
namespace Animals\Mammals;
class Racoon
{
    private $init;

    public function __construct()
    {
        $init = "Racoon class loaded.<br>".PHP_EOL;
        echo $init;
    }
}