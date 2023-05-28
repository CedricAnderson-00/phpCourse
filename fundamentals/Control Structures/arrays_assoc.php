<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associated Arrays</title>
</head>

<body>
    <?php

    $number1 = 10;
    $number2 = 20;

    echo $number1 + $number2 . "<br>";

    $array1 = array(10);
    $array2 = array("number1" => 10);

    print_r($array1);

    echo $array2["number1"];

    /*$number = array(10, 20, 49);

    print_r($number) . "<br>";

    $names = array("first_name" => "Cedric", "last_name" => "Anderson");

    echo $names["first_name"] . " " . $names["last_name"];

    // print_r($names);
    */


    ?>


</body>

</html>