<?php
//connect with my sql
$con= mysqli_connect('127.0.0.1','root','');
//select database
mysqli_select_db($con,'iwop');

//update query
$sql = "UPDATE company SET com_name='$_POST[com_name]',owner_name='$_POST[com_name]',contact='$_POST[contact]',email='$_POST[email]',address='$_POST[address]' WHERE reg_no=$_POST[reg_no]";

//Execute the query
if(mysqli_query($con,$sql)){
	echo" update"; 
   header("refresh:1; url=company_profile.php");}
  else
    echo"not update"; 
?>