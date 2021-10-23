<?php
  require_once 'db.con.php';
  $_SESSION['email']=$_POST['email'];
  $email=$_SESSION['email'];
  $qry="SELECT full_name,bank_name,branch,code,account_no FROM bank WHERE email='$email'";
  $execute=mysqli_query($conn,$qry);
  while($rows=mysqli_fetch_array($execute))
  {
	$fname= $rows['full_Name'];					
    $bname= $rows['bank_name'];
    $branch= $rows['branch'];
    $code=$rows['code'];
    $anum=$rows['account_no'];
  }	
?>


<?php
require_once 'db.con.php';

	if (isset($_POST['update']))
    {
       $fname= $_POST['fname'];
       $bname= $_POST['bname'];
       $branch= $_POST['branch'];
       $code= $_POST['code'];
	   $anum= $_POST['anum'];
         
       $qry="UPDATE bank SET full_Name='$fname', bank_name='$bname', branch='$branch', code='$code', account_no='$anum' WHERE email='$email'";
	   $result=mysqli_query($conn,$qry);
	   if($result)
	   {
          header("location ../bank-edit/bank-edit.php?msg=successfully updated");
		  exit();
		}
    
}
?>