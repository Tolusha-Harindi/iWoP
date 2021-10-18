<?php


include('../../Backend/db_connection.php');

//$status=TRUE; 


  // Post ads function
if(isset($_POST['submit'])){
   
  $category=$_POST['category'];
    $title=$_POST['title'];
    $job=$_POST['job'];
    $nearest_city=$_POST['nearest_city'];
    $contact = $_POST['contact'];
    $startDate = $_POST['startDate'];
    $dueDate = $_POST['dueDate'];
    $noOfWorkers = $_POST['noOfWorkers'];
    $budget = $_POST['budget'];

  
    $sql="INSERT INTO company_ads VALUES (NULL, '$category',  '$title', '$job', '$nearest_city', '$contact', '$startDate','$dueDate','$noOfWorkers', ' $budget', curdate())";
        echo $sql;
        $result=mysqli_query($db, $sql);

    if ($result === TRUE) {
        echo "created successfully";
        header('location:wantedads.php');
        } 
    else {
        echo "Error: " .$db->error;
        mysqli_close($db);
          }  

}


?>