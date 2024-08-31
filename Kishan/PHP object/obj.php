<?php
class meroclass{
    public $name;
    function set_data($name){
        $this->name=$name;
    }
    function get_data()
    {
        return $this->name;
    }
}

$ob1 = new meroclass();
$ob1->set_data("Jenish");
echo $ob1->get_data();

?>
