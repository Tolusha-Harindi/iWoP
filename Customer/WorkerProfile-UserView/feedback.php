<?php


include('../../Backend/db_connection.php');

//$status=TRUE; 


  // Feedbcak function
  if(isset($_POST['submit'])){

    $rating=$_POST['rating'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $review=$_POST['review'];

    $sql="INSERT INTO customerfeedback VALUES (NULL, '$rating', '$name',  '$email', '$review')";
        echo $sql;
        $result=mysqli_query($db, $sql);

    if ($result === TRUE) {
        echo "New record created successfully";
        header('location:Worker-Profile-Userview.php');
        } 
    else {
        echo "Error: " .$db->error;
        mysqli_close($db);
          }     
  }

  ?>
