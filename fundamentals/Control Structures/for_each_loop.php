<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loops</title>
</head>

<body>
    <?php
    
    $numbers = array(345, 22, 16, 12);

    foreach($numbers as $number){
        echo $number . "<br>";
    }

    ?>

</body>

</html>