<?php


include('../../Backend/db_connection.php');

//$status=TRUE; 


  // Register function
if(isset($_POST['submit'])){

    $time=$_POST['time'];
    $date=$_POST['date'];
    $category=$_POST['category'];
    $location=$_POST['location'];
    $budget = $_POST['budget'];
  
    $Customer="SELECT * FROM custreq WHERE time ='$time' ";
    $ResultRequest=mysqli_query($db,$Customer);

    if(mysqli_num_rows($ResultRequest)>0){
        echo "already exists";
        header('location: SendingReqforWorker.php?error= Book another date');
    }
    else{

        $sql="INSERT INTO custreq VALUES ('$time', '$date',  '$category', '$location', '$budget')";
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