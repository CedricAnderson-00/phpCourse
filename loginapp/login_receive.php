<?php include "db.php";

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

if ($connection) {
    echo "Connected";
} else {
    echo "Connection Error";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="col-sm-6">
            <form action="db.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">No special characters</small>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">0-12</small>
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row["id"];
                                
                            echo "<option value='$id'>$id</option>";
                            }

                        ?>
                    </select>
                </div>

                <input type="submit" name="submit" id="button" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>


</body>

</html>