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
            <?php
            $page_heading = "PHP basics 2";
            echo $page_heading; ?>
        </h1>
        <ul>
            <li>Math</li>
            <li>Array Operations</li>
            <li>Loops</li>
            <li>Conditionals</li>
            <li>Private class props</li>
        </ul>
        <hr>
        <p>
            <?php
            echo "Php Starts Here: <br>";
            //Class calc calculates basic math operations on 2 ints and returns the data in a table.
            class calc
            {
                public function calculate($x, $y)
                {
                    $sum = $x + $y;
                    $difference = $x - $y;
                    $product = $x * $y;
                    $quotient = $x / $y;
                    //echo table with results + display integers used;
                    echo ("
                    Numbers used : $x, $y. (Respectively)<br>
                    <table class='table'>
                    <thead>
                    <tr>
                    <th scope='col'></th>
                      <th scope='col'>Sum</th>
                      <th scope='col'>Difference</th>
                      <th scope='col'>Product</th>
                      <th scope='col'>Quotient</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <th scope='row'>Results</th>
                      <td>$sum</td>
                      <td>$difference</td>
                      <td>$product</td>
                      <td>$quotient</td>
                    </tr>
                    </tbody>
                  </table>");
                }
            };

            $compute = new calc;
            $compute->calculate(5, 4);
            $compute->calculate(10, 20);
            ?>
        </p>
    </div>
</body>

</html>