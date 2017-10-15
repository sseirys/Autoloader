<?php
namespace Objects\Trees;
class Oak
{
    private $init;

    public function __construct()
    {
        $init = "Oak class loaded.<br>".PHP_EOL;
        echo $init;
    }
}