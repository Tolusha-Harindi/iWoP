<?php


include('../../Backend/db_connection.php');

//$status=TRUE; 


  // Add new manager
  if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $NIC=$_POST['NIC'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $password = password_hash($pass, PASSWORD_DEFAULT);

    $sql="INSERT INTO manager VALUES (NULL, '$name', '$contact','$email', '$NIC','$password')";
        echo $sql;
        $result=mysqli_query($db, $sql);

    if ($result === TRUE) {
        echo "New record created successfully";
        header('location:NewManager.php');
        } 
    else {
        echo "Error: " .$db->error;
        mysqli_close($db);
          }     
  }

  ?>
