<?php

include('../../Backend/db_connection.php');

//$status=TRUE;


if(isset($_POST['delete'])){
    $ad_id=$_POST['adId'];


    $sql="DELETE FROM customer_ads WHERE ads_id= '$ad_id'";  
    $result=$db->query($sql);

    if($result){   
        header("Location: ApplyforJob-customerview.php");
    }
    else{
        echo "Error:".$db->error;
        mysqli_close($db);
    }
}
?>