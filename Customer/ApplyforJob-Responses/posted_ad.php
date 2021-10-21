<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT category, title, job, budget FROM customer_ads";

    $result = mysqli_query($con, $query);


    return $result;
    
   
?>