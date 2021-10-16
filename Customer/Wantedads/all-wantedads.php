<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT category, title, job, nearest_city, contact, startDate, dueDate, noOfWorkers FROM customer_ads";

    $result = mysqli_query($con, $query);


    return $result;
    

?>