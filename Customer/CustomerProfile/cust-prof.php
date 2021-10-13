<?php


include('../Backend/db_connection.php');

//$status=TRUE; 


  // Register function
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password_1=$_POST['password'];

    $Customer="SELECT * FROM customer WHERE contact='$contact'";
    $ResultCustomer=mysqli_query($db,$Customer);

    if(mysqli_num_rows($ResultCustomer)>0){
        echo "already exists";
        header('location: RegisterCustomer.php?error= Contact Number already exists');
    }
    else{
        $password = password_hash($password_1, PASSWORD_DEFAULT);

        $sql="INSERT INTO customer VALUES ('$name', '$contact',  '$email', '$password')";
        echo $sql;
        $result=mysqli_query($db, $sql);
      
        if($result){
            header('location:Login.php'); //page want to redirect
            
        }
        else{
            echo "Error:".$db->error;
            mysqli_close($db);
        }
    }

}


?>