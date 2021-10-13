<?php

include('../Backend/db_connection.php');

//$status=TRUE; 

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);


    $sql="INSERT INTO customer VALUES ( '$name', '$contact',  '$email', '$password')";
    $result=$db->query($sql);
    if($result){
        ("Location: ../Customer/CustomerProfile/customerprofile.php"); //page we want to redirect
        echo "yes";
    }else{
        echo "Error:".$db->error;
        mysqli_close($db);
    }

}




?>