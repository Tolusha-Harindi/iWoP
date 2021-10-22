<?php  

function insertData($conn){
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $bname = $_POST['bname'];
        $branch = $_POST['branch'];
        $code = $_POST['code'];
        $anum = $_POST['anum'];
        $qry = "insert into bank (full_name,bank_name,branch,code,account_no) values('$fname','$bname','$branch','$code','$anum')";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $qry)) {
          header("location: ../bank-detail/bank-detail.php?error=stmtfailed");
          exit();
        }
    
        $result=mysqli_stmt_execute($stmt);
        
    
        
        if ($result) {
         return true;
        }
        else
        {
         return false;
        }
         mysqli_stmt_close($stmt);
       }
      
}

?>