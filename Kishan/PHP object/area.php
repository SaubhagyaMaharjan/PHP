<?php
class area{
    private $l;
    private $b;
    function set_data($l , $b){
        $this->l=$l;
        $this->b=$b;
    }
    function get_data()
    {
       return ($this->l*$this->b);
    }
}

$obj1= new area();
$l=$_POST['n1'];
$b=$_POST['n2'];
$obj1->set_data($l,$b);

$result = $obj1->get_data();
echo $result;
header("location:array.php?result=$result");
?>
