<?php

//database connection

include '../../Backend/db_connection.php';

//report sending
if (isset($_POST['send'])) {
    echo  "recieve";
    $report_id = uniqid("r_");
    $nic=$_POST['nic'];
    $name=$_POST['name'];
    $report =$_POST['comment'];
    $other= $_POST['other'];

    if(empty($report)){
        $report=$other;
    }
    
    $sql = "INSERT INTO customerreport (report_id, worker_nic, worker, reason) VALUES ('$report_id', '$nic' , '$name' , '$report' )";

    if (mysqli_query($db, $sql)) {
        echo "New record created successfully !";
        header('location: reportpagebycustomer.php');
    } else {
        echo "Error: " . $db->error;
        mysqli_close($db);
    }
}
