<!-- write a php program to find simple interest by using class and object. -->

<?php
class interest
{
    public $simple_interest;
    public $p;
    public $r;
    public $t;

    function set_data($p, $r, $t)
    {

        $this->p = $p;
        $this->r = $r;
        $this->t = $t;
    }
    function get_data()
    {
        echo "Simple interest :";
        echo ($this->p * $this->r * $this->t) / 100;
    }
}
$obj1 = new interest();
$obj1->set_data(1000, 13, 5);
$obj1->get_data();
?>