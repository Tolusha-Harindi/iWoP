
<?php
session_start();
if(isset($_SESSION['email'])){

  include '../../Backend/db_connection.php'; //check customer id or not
  $temp= $_SESSION['email']; 
  $sql = "SELECT email FROM admin WHERE email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){ 
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>admin change password</title>
    <link rel="stylesheet" href="changepwd.css">
    <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
        include '../../Repeating-pages/topnav/topnav8-admin.php'
    ?>
<link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">

</head>
<body>
<div class="box1">

<div class="sidebar close">

        <ul class="nav-links">
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
                            <a href="../admin_dashboard/admin_dashboard.php">
                            <i class='bx bx-plus' ></i>
                            <span class="link_name">Dashboard</span>
                            </a>
                            <ul class="sub-menu blank">
                            <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
                            </ul>
                        </li>

            <li>
                <a href="../ManagerPageforAdmin/ManagerPageforAdmin.php">
                    <i class='bx bx-street-view' ></i>
                    <span class="link_name">Managers</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../ManagerPageforAdmin/ManagerPageforAdmin.php">Managers</a></li>
                </ul>
            </li>


            <li>
                <a href="../Changepassword/changepwd.php">
                    <i class='bx bxs-check-shield' ></i>
                    <span class="link_name">Change Password</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Changepassword/changepwd.php">Change Password</a></li>
                </ul>
            </li>

            <li>
                <a href="../Adddeletecategory/Adddelcategory.php">
                    <i class='bx bxs-spreadsheet' ></i>
                    <span class="link_name">Category</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Adddeletecategory/Adddeletecategory.php">Category</a></li>
                </ul>
            </li>

            <li>
                <a href="../Reportpage/reportpage.php">
                    <i class='bx bxs-hand-right' ></i>
                    <span class="link_name">Reports</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Reportpage/reportpage.php">Reports</a></li>
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
<!--------------------------------------------------------------------------------------------------------->

</div>



<!------------------------Form---------------------------->
        <div class="cardStyle"> <p class="heading"> Change Password </p>
            <form action="changePassword.jsp" method="post"></br>
                <img src="key.png" class="floatRight">
                <div class="inputDiv">
                    <label class="inputLabel" for="currnetPassword">Current Password</label> </br>
                    <input type="password" id="current password" name="currentpassword" class="input" required>
                </div>
                <div class="inputDiv">
                    <label class="inputLabel" for="password">New Password</label> </br>
                    <input type="password" id="password" name="password" class="input" required>
                </div> 

                <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Change Password</label> </br>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="input" required>
                </div> </br></br></br> </br>
                
                </br><input type="submit" name="changePassword" id="changePassword" value="Change Password"  class="change">
               
            </form>
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