<?php

include('../Backend/db_connection.php');

//$status=TRUE; 


  // Register function
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $CRN = $_POST['CRN'];
    $email=$_POST['email'];
    $password_1=$_POST['password'];
    $password_2=$_POST['repassword'];

    //$password = password_hash($password, PASSWORD_DEFAULT);

   

    $sql="INSERT INTO company VALUES ( '$name', '$contact', '$CRN', '$email', '$password_1','$password_2')";

    $result=$db->query($sql);
    if($result){
        ("Location: ../Company/CompanyProfile/CompanyProfile.php"); //page we want to redirect
        echo "yes";
    }
    else{
        echo "Error:".$db->error;
        mysqli_close($db);
    }

}
}

?>