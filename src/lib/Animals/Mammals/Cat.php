<?php
namespace Animals\Mammals;
class Cat
{
    private $init;

    public function __construct()
    {
        $init = "Cat class loaded.<br>".PHP_EOL;
        echo $init;
    }
}