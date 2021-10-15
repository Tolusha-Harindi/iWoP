<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT name,review FROM cutomerfeedback";

    $result = mysqli_query($con, $query);


    return $result;
    

?>