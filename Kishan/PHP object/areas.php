<?php
class area
{
    public $l;
    public $b;
    public $area;
    function set_data($l, $b)
    {
        $this->l = $l;
        $this->b = $b;
    }
    function get_data()
    {
        return ($this->l * $this->b);
    }
}

$obj = new area();
$l = $_GET['n1'];
$b = $_GET['n2'];
$obj->set_data($l, $b);
$result = $obj->get_data();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Area of rectangle :
    <input type="number" name="result" disabled value="<?php echo $result; ?>">
</body>

</html>