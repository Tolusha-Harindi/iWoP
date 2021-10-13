<?php
session_start();
include('../Backend/db_connection.php');

//$status=TRUE;

//login form
if(isset($_POST['submit'])){

    $email=mysqli_real_escape_string($db,$_POST['email'] );
    $password = mysqli_real_escape_string($db,$_POST['password']); //validate punctuation marks
    
  

    $sql_admin = "SELECT * FROM admin WHERE email='$email' LIMIT 1";
    $query_admin = mysqli_query($db, $sql_admin);
    $sql_manager ="SELECT * FROM manager WHERE email='$email' LIMIT 1";
    $query_manager = mysqli_query($db, $sql_manager);
    $sql_customer ="SELECT * FROM customer WHERE email='$email' LIMIT 1";
    $query_customer = mysqli_query($db, $sql_customer);
    $sql_worker ="SELECT * FROM worker WHERE email='$email' LIMIT 1";
    $query_worker = mysqli_query($db, $sql_worker);
    $sql_company ="SELECT * FROM company WHERE email='$email' LIMIT 1";
    $query_company = mysqli_query($db, $sql_company);
    

    if(empty($email)) {
        header('location:Login.php?error=Email is required');
        exit();
      }
    else if (empty($password)) {
        header('location:Login.php?error=Password is required');
        exit();
    }
    else{
        /*------------------------admin-------------------------*/
        if(mysqli_num_rows($query_admin)===1){
            $usertypes=mysqli_fetch_assoc($query_admin);

            if($usertypes['email']==$email && $usertypes['password']==$password)
            {
                $_SESSION['admin_ID']=$usertypes['admin_ID'];
                
                header('location: ../Admin/ManagerPageforAdmin/NewManager.php');
                exit();
            }
            else{
                header('location:Login.php?error= Incorrect email or password');
                exit();
            }
        }

        /*--------------------------manager-----------------------*/
        else if(mysqli_num_rows($query_manager)===1){

            $usertypes=mysqli_fetch_assoc($query_manager); //fetch data to array

            if($usertypes['email']==$email && $usertypes['password']==$password)
            {
                $_SESSION['manager_ID']=$usertypes['manager_ID'];
                $_SESSION['name']=$usertypes['name'];
                $_SESSION['email']=$usertypes['email'];
                $_SESSION['contact_No']=$usertypes['contact_No'];
               
                header('location:../Manager/ManagerProfile/ManagerProfile.php');
                exit();
            }
            else{
                header('location:Login.php?error= Incorrect email or password');
                exit();
            }
        }

        /*---------------------------------customer-----------------------------*/
        else if(mysqli_num_rows($query_customer)===1){

            $usertypes=mysqli_fetch_assoc($query_customer); //fetch data to array
            
            if($usertypes['email']==$email && password_verify($password, $usertypes['password']))
            {
                $_SESSION['name']=$usertypes['name'];
                $_SESSION['email']=$usertypes['email'];
                $_SESSION['contact_No']=$usertypes['contact_No'];

                header('location:../Customer/CustomerProfile/customerprofile.php');
                exit();
            }
            else{
                header('location:Login.php?error= Incorrect email or password');
                exit();
            }
        }


            /*------------------------worker---------------------- */
        else if(mysqli_num_rows($query_worker)===1){

            $usertypes=mysqli_fetch_assoc($query_worker); //fetch data to array
            
            if($usertypes['email']==$email && password_verify($password, $usertypes['password']))
            {
                
                $_SESSION['name']=$usertypes['name'];
                $_SESSION['contact']=$usertypes['contact'];
                $_SESSION['NIC']=$usertypes['NIC'];
                $_SESSION['email']=$usertypes['email'];

                header('location:../Worker/WorkerProfile/workerprofile.php');
                exit();
            }
            else{
                header('location:Login.php?error= Incorrect email or password');
                exit();
            }
        }

            /*-------------------------company-------------------------*/
        else if(mysqli_num_rows($query_company)===1){

            $usertypes=mysqli_fetch_assoc($query_company); //fetch data to array
            
            if($usertypes['email']==$email && password_verify($password, $usertypes['password']))
            {
                $_SESSION['Name']=$usertypes['name'];
                $_SESSION['contact']=$usertypes['contact'];
                $_SESSION['Com_reg_no']=$usertypes['Com_reg_no'];
                $_SESSION['Email']=$usertypes['email'];

                header('location:../Company/CompanyProfile/CompanyProfile.php');
                exit();
            }
            else{
                header('location:Login.php?error= Incorrect email or password');
                exit();
            }
        }
        
    } 
}
    else{
       
        header('Location: Login.php?error=Invalid Password');
    }

  
    
    /*if(password_verify($password, $usertypes['password'])){
        $_SESSION['role'] = $usertypes['role'];
        $_SESSION['email'] = $email;
        if($usertypes['role'] == "5")
        {
           
            header('Location: ../Admin/AdminProfile/adminprofile.php');
        }
        else if($usertypes['role'] == "4")
        {
           
            header('Location: ../Manager/ManagerProfile/managerprofile.php');
        }
        else if($usertypes['role'] == "3")
        {
           
            header('Location: ../Worker/WorkerProfile/workerprofile.php');
        }
        else if($usertypes['role'] == "2")
        {
            
            header('Location: ../Comapany/CompanyProfile/companyprofile.php');
        }
        else if($usertypes['role'] == "1")
        {
           
            header('Location: ../Customer/CustomerProfile/customerprofile.php');
        }


    } else{
       
        header('Location: Login.php?error=Invalid Password');
    }
      

}*/




?>