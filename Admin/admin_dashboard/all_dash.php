<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT name,contact_No, email, NIC FROM manager";

    $result = mysqli_query($con, $query);


    return $result;
    

?>