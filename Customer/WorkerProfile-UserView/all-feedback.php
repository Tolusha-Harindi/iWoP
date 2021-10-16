<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT name,review FROM customerfeedback";

    $result = mysqli_query($con, $query);


    return $result;
    

?>