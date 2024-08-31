<?php
class myclass
{
    public $x, $y;
    function __construct()
    {
        echo "I am a constructor.<br>";
    }
    function __destruct()
    {
        echo "I am a destructor.<br>";
    }
}
$c1 = new myclass();
