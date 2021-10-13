

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

    $Company="SELECT * FROM company WHERE Com_reg_no='$CRN'";
    $ResultCompany=mysqli_query($db,$Company);

    if(mysqli_num_rows($ResultCompany)>0){
        echo "already exists";
        header('location: RegisterCompany.php?error=Company Registration Number already exists');
    }
    else{
        $password = password_hash($password_1, PASSWORD_DEFAULT);

        $sql="INSERT INTO company VALUES ( '$name', '$contact', '$CRN', '$email', '$password')";
        $result=mysqli_query($db, $sql);

        $sql2= "INSERT INTO users values ('$name','$CRN', '$email', '$password', '2')";
        $result1= mysqli_query($db, $sql2);

        if($result && $result1){
            header('location: Login.php'); //page we want to redirect
            //echo "yes";
        }
        else{
            echo "Error:".$db->error;
            mysqli_close($db);
        }
    }

}


?>