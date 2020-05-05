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
            <li>Array Iteration using Loops</li>
            <li>Handling User Input </li>
        </ul>
        <hr>
        <p>
            <h6>PHP Math.</h6>
            <?php
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
            ?>
        </p>
        <hr>
        <p>
            <h6>Array Iteration & Loops</h6>
            <?php
            $basicArray = array(12, 44, 10, 27, 65);
            //echo array using for loop
            function printArray($array)
            {
                for ($x = 0; $x < count($array); $x++) {
                    echo ("<li>$array[$x]</li>");
                };
            }
            //echo array using foreach
            function useForEach($array)
            {
                foreach ($array as $value) {
                    echo ("<li> $value </li>");
                };
            };
            echo "For Loop Iteration: <br>";
            printArray($basicArray);
            echo "ForEach Iteration: <br>";
            useForEach($basicArray);
            ?>
        </p>
        <h6>Handling User Input with a Form</h6>
        <form method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment</label>
                <textarea class="form-control" id="comment" rows="3"></textarea>
                <button type="submit">Submit</button>
            </div>
        </form>
        <div class="comments">
            <?php

            ?>
        </div>
    </div>
</body>

</html>