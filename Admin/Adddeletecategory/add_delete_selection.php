<?php 

    $con = require '../../Backend/db_connection.php';

    $query = "SELECT category_name, file_url FROM add_or_delete_category";

    $result = mysqli_query($con, $query);


    return $result;
    

?>