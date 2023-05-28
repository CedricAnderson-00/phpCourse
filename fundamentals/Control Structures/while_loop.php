<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>

<body>
    <?php
    
    $number = 100;

    $counter = 0;
    while($counter < 10) {
        echo $counter;
        $counter += 2;
    } 
    echo "end of loop";

    ?>

</body>

</html>