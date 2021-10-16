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
    //$start_date = $_POST['start_date'];
   // $due_date = $_POST['due_date'];
    //$no_of_workers = $_POST['no_of_workers'];
    //$budget = $_POST['budget'];

  
    $sql="INSERT INTO customer_ads VALUES (NULL, '$category',  '$title', '$job', '$nearest_city', '$contact',  )";
        echo $sql;
        $result=mysqli_query($db, $sql);

    if ($result === TRUE) {
        echo "New record created successfully";
        header('location:wantedads.php');
        } 
    else {
        echo "Error: " .$db->error;
        mysqli_close($db);
          }  

}


?>