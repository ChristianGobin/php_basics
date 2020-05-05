<?php
$page_heading = "PHP basics 2";
//Mathematical Operators
function add($x, $y)
{
    $result = $x + $y;
    return $result;
}

function subtract($x, $y)
{
    if ($x > $y) {
        return $result = $x / $y;
    } elseif ($y > $x) {
        return $result = $y / $x;
    } else {
        return 0;
    }
}

function multi($x, $y)
{
    $result = $x * $y;
    return $result;
}

function divide($x, $y)
{
    $result = $x / $y;
    return $result;
}



?>
<html>

<head>
    <title>
        PHP Basic 2
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>
            <?php echo $page_heading ?>
        </h1>
        <ul>
            <li>Math</li>
            <li>Array Operations</li>
            <li>Loops</li>
            <li>Conditionals</li>
            <li>Private class props</li>
        </ul>
    </div>
</body>

</html>