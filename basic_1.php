<?php
//set title of page in head to $title var
$title = "Basic PHP";
//set heading of html body using php variable
$heading = "<h1>PHP Heading Variable</h1>";
//Data Types
$var = "This is a String ";
$intVar = 4;
$floatVar = 1.23;
$boolVar = true;
//Indexed Array
$arrayVar = array(1, 2, 3, 4);
//Keys are assigned to values
$associativeArray = array(
    "R" => "Red",
    "O" => "Orange",
    "Y" => "Yellow"
);
//Multidimensional Array
$mDimension = array(
    array("Peter", "Martin", "Michael"),
    array("Laura", "Anthony", "Paula"),
    array("Alice" => "alice@gmail.com", "Elizabeth" => "ebeth@gmail.com", "Sabrina" => "sab@gmail.com")
);

/*Array Functions
number of specific occurences of values in array
$repeatArray = array(1, 1, 1, 2, 2, 3, 4, 4, 5, 6);
print_r(array_count_values($repeatArray));
*/

//view Structure and Values of variables.
//print_r();
//more descriptive => var_dump();

//Classes
class civic
{
    //properties
    public $brand = "Honda";
    public $mileage = 0;
    //methods
    public function drive($dist)
    {
        return $this->mileage = $this->mileage + $dist;
    }
    public function dispMileage()
    {
        echo $this->mileage;
    }
};

class sneaker
{
    public $size;
    public $color;
    public $brand;
    public $brandMenu = array("nike", "vans", "adidas");
    public function setBrand($brandfrmMenu)
    {
        return $this->brand = $brandfrmMenu;
    }
    public function setColor($color)
    {
        return $this->color = $color;
    }
    public function setSize($size)
    {
        return $this->size = $size;
    }
    public function displayProps()
    {
        echo $this->size, $this->color, $this->brand;
    }
}

//instantiate class + accessing methods + editing a property of object
$myCar = new civic;
$myCar->drive(30);
$myCar->dispMileage();
$myCar->brand = "BMW </br>";
echo $myCar->brand;

$myNike = new sneaker;
$myNike->setColor("Red");
$myNike->setSize(13);
$myNike->setBrand($myNike->brandMenu[0]);

//conditional display
if ($myNike->size == 13) {
    $myNike->displayProps();
} else {
    echo "Cannot display Sneaker Size";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
    <!--Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>
            PHP basics 1.
        </h1>
        <ul>
            <li>Data Types</li>
            <li>Classes</li>
            <li>Objects</li>
            <li>Methods/Properties</li>
        </ul>
    </div>
</body>

</html>