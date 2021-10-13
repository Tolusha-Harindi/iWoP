

<?php

//db connection
include('../../Backend/db_connection.php');

//$status=TRUE; 


  // Register function
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $NIC = $_POST['NIC'];
    $email=$_POST['email'];
    $password_1=$_POST['password'];

    $Worker="SELECT * FROM worker WHERE NIC='$NIC'";
    $ResultWorker=mysqli_query($db,$Worker);

    if(mysqli_num_rows($ResultWorker)>0){
        echo "already exists";
        header('location: RegisterWorker.php?error= NIC Number already exists');
    }
    else{
        $password = password_hash($password_1, PASSWORD_DEFAULT);

        $sql="INSERT INTO worker VALUES ( '$name', '$contact', '$NIC', '$email', '$password')";
        $result=mysqli_query($db, $sql);

        if($result){
            //header('location: ../Worker/WorkerProfile/WorkerProfile.php'); //page want to redirect
            header('location: Login.php');
        }
        else{
            echo "Error:".$db->error;
            mysqli_close($db);
        }
    }

}


?>