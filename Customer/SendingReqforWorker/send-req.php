<?php


include('../../Backend/db_connection.php');

//$status=TRUE; 


  // Register function
if(isset($_POST['submit'])){
   
    $req_time=$_POST['time'];
    $req_date=$_POST['date'];
    $req_category=$_POST['category'];
    $req_location=$_POST['location'];
    $req_budget = $_POST['budget'];
  
    $Customer="SELECT * FROM custreq WHERE req_time ='$req_time' ";
    $ResultRequest=mysqli_query($db,$Customer);

    if(mysqli_num_rows($ResultRequest)>0){
        echo "already exists";
        header('location: SendingReqforWorker.php?error= Book another date');
    }
    else{

        $sql="INSERT INTO custreq VALUES (NULL, '$req_time', '$req_date',  '$req_category', '$req_location', '$req_budget')";
        echo $sql;
        $result=mysqli_query($db, $sql);

        /*$sql2= "INSERT INTO users values ('$name','$contact', '$email', '$password', '1')";
        $result1= mysqli_query($db, $sql2);*/

      
        if($result){
            header('location:SendingReqforWorker.php'); //page want to redirect
            
        }
        else{
            echo "Error:".$db->error;
            mysqli_close($db);
        }
    }

}


?>