<?php

    if(isset($_POST["submit"])) {

        $name = ["Cedric", "Edwin", "Tom", "Maria"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo $username . "<br>";
        echo $password;

        if(strlen($username) < 5){
            echo "username has to be longer than 5";
        }
    
        if(!in_array($username, $name)) {
            echo "not allowed";
        } else {
            echo "welcome";
        }
    }
    

?>