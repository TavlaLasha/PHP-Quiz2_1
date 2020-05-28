<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "book_shop";

    $connection = mysqli_connect($server, $user, $password, $dbname);
    if(!$connection)
        die("Connection Error!!");
    echo "<script> console.log('Connection Successful')</script>";
?>