<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT worker, reason FROM customerreport";

    $result = mysqli_query($con, $query);


    return $result;
    

?>