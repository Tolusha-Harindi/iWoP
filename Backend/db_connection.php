<?php
    $db = mysqli_connect("localhost", "root", "", "test1");

    if (mysqli_connect_errno()){
        echo "Failed to connect to DB!"
        .mysqli_connect_error();
    } else {
        echo "DB connection successful!";
        echo "<br>";
    }

    return $db;

?>