<?php

    $connection = mysqli_connect("localhost", 'cedric', 'Falconview_3141', "loginapp");

    if(!$connection) {
        echo "Connection Error";
    }

?>