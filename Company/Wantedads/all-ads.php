<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT * FROM company_ads";

    $result = mysqli_query($con, $query);


    return $result;
    

?>