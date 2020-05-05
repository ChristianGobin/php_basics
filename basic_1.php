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

//instantiate class + accessing methods + editing a property of object
$myCar = new civic;
$myCar->drive(30);
$myCar->dispMileage();
$myCar->brand = "BMW";
echo $myCar->brand;
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
        <?php echo $heading ?>
        <p>
            Sabrinas email is <?php echo $mDimension[2]["Sabrina"]; ?>
        </p>
    </div>
</body>

</html>