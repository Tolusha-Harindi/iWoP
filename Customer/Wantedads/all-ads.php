<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT * FROM cutomer_ads";

    $result = mysqli_query($con, $query);


    return $result;
    

?>