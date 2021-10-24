
<?php
// session_start();
// if(isset($_SESSION['email'])){

//   include '../../Backend/db_connection.php'; //check mangers id or not
//   $temp= $_SESSION['email']; 
//   $sql = "SELECT email FROM manager WHERE email='$temp'";
//   $result = mysqli_query($db,$sql);
//   if(mysqli_num_rows($result)>0){

  
?>
<head>
 <style>
  body{
  font-family: 'Poppins', sans-serif;
  background-image: url('../../Images/bg5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

</head>


<html lang="en" dir="ltr"></html>
    <title> Manager profile </title>

    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
        <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
        <link rel="stylesheet" href="ManagerProfile.css">
         <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <div class="sticky">
            <div class="topnav">
                <div class="logo"> 
                    <input type="image" id="image" alt="Landing" src="../../Images/Logo.jpg">
                </div>
                <a href="../../Login/Logout.php"> <b>| Logout  </b></a> 
                <a href="../../Customer/FAQ/FAQ.php"> <b>| Help page  </b></a> 
                <a href="../../Unregistered-user/Allcategories/categories.php"><b> | Category </b></a> 
                <a href="../../all ads/all ads.php"> <b>| All Adds </b></a>
                <a href="../../Manager/ManagerProfile/ManagerProfile.php"><i class="fa fa-user-circle-o fa-2x"></i> </a>
            </div> 
        </div>
    </head>

    <body>
        <div class ="heading1" > Profile
  

 <!-----------------------------------Side navigation--------------------------------------------->

   <div class="sidebar close">
 
     <ul class="nav-links">
       <li>
         <a href="#">
           <i class='bx bxs-user' ></i>
           <span class="link_name">My Profile</span>
         </a>
         <ul class="sub-menu blank">
           <li><a class="link_name" href="../../Manager/ManagerProfile/ManagerProfile.php">My Profile</a></li>
         </ul>
       </li>
 
       
       <li>
         <a href="#">
           <i class='bx bxs-check-shield' ></i>
           <span class="link_name">Change Password</span>
         </a>
         <ul class="sub-menu blank">
           <li><a class="link_name" href="../Change password/Manager change password.php">Change Password</a></li>
         </ul>
       </li>
 
       <li>
         <a href="#">
           <i class='bx bxs-briefcase' ></i>
           <span class="link_name">Workers</span>
         </a>
         <ul class="sub-menu blank">
           <li><a class="link_name" href="../worker list/Manager (worker list).php">Workers</a></li>
         </ul>
       </li>
 
       <li>
         <a href="#">
           <i class='bx bxs-business' ></i>
           <span class="link_name">Company</span>
         </a>
         <ul class="sub-menu blank">
           <li><a class="link_name" href="../Company list/Manager (company list).php">Company</a></li>
         </ul>
       </li>
 
 </li>
 </ul>
   </div>
   <section class="home-section">
     <div class="home-content">
       <i class='bx bx-menu' ></i>
 <!--       <span class="text">Drop Down Sidebar</span>
  -->    </div>
   </section>
 

            <script src="../../Repeating-pages/sidenav/sidenavigation.js"></script>


 <!-----------------------------Form------------------------------------------>
              <div>
                <img src="../../Images/img.png" class="floatRight">
              <div > 
                    <input type="image" id="cam" alt="camera" src="../../Images/cam.png" class="cam">
                </div>
                <form name = "reg-w"  method="post">
                    <div class="reg-start">
                            <div class="info">
                                    <div class="group">
                                        <p class="field"> <b>Name</b></p>
                                        <input id="name" name="name" type="text" placeholder = "Name" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>NIC Number</b></p>
                                        <input id="NIC" name="NIC" type="text" placeholder = "NIC Number" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Email</b> </p>
                                        <input id="email" name="email" type="email" placeholder = "Email" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Contact Number</b></p>
                                        <input id="contact" name="contact" type="tel" placeholder = "Contact Number" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>  
                        </div>
                    </div>
                </form>
              </div>

              <div>
                <a href="#" input type="submit" value="submit"  class="button4"> Update </a> 
            </div> 
    </div>
    </body>

    </html>

<?php 
//   }
//   else{
//     echo '<script type="text/javascript">javascript:history.go(-1)</script>'; //redirect to previous page
//     exit();
//   }
 
  
// }


// else{
//   header('location:../../Login/Login.php');
//   exit();
// }
?>