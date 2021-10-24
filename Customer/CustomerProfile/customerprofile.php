
<?php
session_start();
if(isset($_SESSION['email'])){

  include '../../Backend/db_connection.php'; //check customer id or not
  $temp= $_SESSION['email']; 
  $sql = "SELECT email FROM customer WHERE email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="customerprofile.css">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
    <?php 
          include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>

</head>
<body>
<div class="box1">

        <!--------------------Side bar---------------------->
        <div class="sidebar close">

        <ul class="nav-links">

        <li>
            <a href="../admin_dashboard/admin_dashboard.php">
            <i class='bx bxs-dashboard' ></i>
            <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
            </ul>
        </li>

        <li>
            <a href="../Adminprofile/Adminprofile.php">
                <i class='bx bxs-user' ></i>
                <span class="link_name">My Profile</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="../Adminprofile/Adminprofile.php">My Profile</a></li>
            </ul>
        </li>


        <li>
        <a  href="../ManagerPageforAdmin/NewManager.php">
            <i class='bx bx-street-view' ></i>
            <span class="link_name">Managers</span>
            </a>
            <ul class="sub-menu blank">
            <!-- <li><a class="link_name" href="../ManagerPageforAdmin/ManagerPageforAdmin.php">Managers</a></li> -->
            <li><a class="link_name" href="../ManagerPageforAdmin/NewManager.php">Managers</a></li>
            </ul>
        </li>

        <li>
            <a href="../Adddeletecategory/adddelcategory.php">
            <i class='bx bxs-spreadsheet' ></i>
            <span class="link_name">Categories</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="../Adddeletecategory/adddelcategory.php">Categories</a></li>
            </ul>
        </li>

        <li>
            <a href="../category/category.php">
            <i class='bx bxs-user-check' ></i>
            <span class="link_name">Registered Users</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="../category/category.php">Registered Users</a></li>
            </ul>
        </li>

        <li>
            <a href="../Reportpage/reportpage.php">
            <i class='bx bxs-hand-right' ></i>
            <span class="link_name">Complaints</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Complaints</a></li>
            </ul>
        </li> </li>
        </ul>
        </div>
        <section class="home-section">
        <div class="home-content">
        <i class='bx bx-menu' ></i>
        <!--       <span class="text">Drop Down Sidebar</span>
        -->    </div>
        </section>

        <script src="../../Repeating-pages/sidenav/sidenavigation.js"></script>

<!--------------------------End of side nav------------------------------------->


</div>
<div class="box2">
  <div class="txt">  Profile </div> </br>
    <div class="mainDiv">
        <div class="cardStyle">
            <form action="" method="post">


                <img src="../../Images/propic.jpg" class="userimg">
                <input type="file" id="myFile" name="filename">

               
                <!--<img src="camere.png" alt="camera" class="camera">-->
                <div class="inputDiv">
                    <label class="inputLabel" for="name">Name</label> </br>
                    <input type="text" id="name" placeholder="Kasun Perera" name="name" class="input" required>
                </div>


                <div class="inputDiv">
                    <label class="inputLabel" for="email">Email</label> </br>
                    <input type="email" id="email" placeholder="kasun128@gmail.com" name="email" class="input" required>
                </div>

                <div class="inputDiv">
                    <label class="inputLabel" for="email"> Current Password</label> </br>
                    <input type="password" id="email" name="email" class="input" required>
                </div>

                <div class="inputDiv">
                    <label class="inputLabel" for="email">New Password </label> </br>
                    <input type="password" id="email" name="email" class="input" required>
                </div>

                <div class="inputDiv">
                    <label class="inputLabel" for="email">Change Password </label> </br>
                    <input type="password" id="email" name="email" class="input" required>
                </div>

                <button type="submit" id="submitButton" onclick="validateSignupForm()" class="update">
                    <span>Update details</span>

                </button>



            </form>
        </div>
    </div>

</div>

</body>
</html>

    <?php 
  }
  else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>'; //redirect to previous page
    exit();
  }
 
  
}


    else{
        header('location:../../Login/Login.php');
        exit();
    }
?>