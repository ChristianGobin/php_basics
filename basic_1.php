<?php

//Variables
$var = "This is a String ";
$intVar = 4;
//set title of page in head to $title var
$title = "Basic PHP";
//set heading of html body using php variable
$heading = "<h1>PHP Heading Variable</h1>";
//Data Types


//Built in methods, manipulating data
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php echo $heading ?>
</body>

</html>