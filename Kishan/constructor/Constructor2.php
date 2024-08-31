<?php
class myclass
{
    public $x;
    public $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        echo " The value of x is $this->x" . "<br>";
        echo " The value of y is $this->y";
    }
}
$c1 = new myclass(5, 6);
