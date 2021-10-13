<?php

include('../Backend/db_connection.php');

//$status=TRUE; 

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $NIC = $_POST['NIC'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql="INSERT INTO worker VALUES ( '$name', '$contact', '$CRN', '$email', '$password')";
    $result=$db->query($sql);
    if($result){
        ("Location: ../Worker/WorkerProfile/WorkerProfile.php"); //page we want to redirect
        echo "yes";
    }else{
        echo "Error:".$db->error;
        mysqli_close($db);
    }

}




?>