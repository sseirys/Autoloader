<?php
namespace Animals\Mammals;
class Dog
{
    private $init;

    public function __construct()
    {
        $init = "Dog class loaded.<br>".PHP_EOL;
        echo $init;
    }
}