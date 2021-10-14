
<?php
session_start();
if(isset($_SESSION['email'])){

  include '../../Backend/db_connection.php'; //check mangers id or not
  $temp= $_SESSION['email']; 
  $sql = "SELECT email FROM customer WHERE email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){ 
?>

<html lang="en" dir="ltr"></html>
    <title> Customer profile </title>

    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
        <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
        <link rel="stylesheet" href="customerprofile.css">
         <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>

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
                    <li><a class="link_name" href="#">My Profile</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                    <i class='bx bxs-check-shield' ></i>
                    <span class="link_name">Change Password</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Change Password</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                    <i class='bx bxs-image' ></i>
                    <span class="link_name">Post Your Ads</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Post Your Ads</a></li>
                    </ul>
                </li>

                <li>
                    <div class="iocn-link">
                    <a href="#">
                        <i class= 'bx bxs-share'></i>
                        <span class="link_name">Responses</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                    </div>
                    <ul class="sub-menu">
                    <li><a class="link_name" href="#">Responses</a></li>
                    <li><a href="#">Job invite Requests</a></li>
                    <li><a href="#">Posted Ads</a></li>
                    <!-- <li><a href="#">PHP & MySQL</a></li>-->
                    </ul>
                </li>
                <li>
                    <a href="#">
                    <i class= 'bx bxs-group'></i>
                    <span class="link_name">Recent Workers</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Recent Workers</a></li>
                    </ul>
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
              <div class=box1>
                <img src="../../Images/img.png" class="floatRight">
                <div > 
                    <input type="image" id="cam" alt="camera" src="../../Images/cam.png" class="cam">
                </div>
                <form name = "reg-w" id ="reg-w" action="cust-prof.php" method="post">
                    <div class="reg-start">
                            <div class="info">
                                    <div class="group">
                                        <p class="field"> <b>Name</b></p>
                                        <input id="name" type="text" placeholder = "Name" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Address</b></p>
                                        <input id="Address" type="text" placeholder = "Address" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Email</b> </p>
                                        <input id="email" type="email" placeholder = "Email" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Contact Number</b></p>
                                        <input id="contact" type="tel" placeholder = "Contact Number" class="input" required>
                                        <input type="image" id="edit" alt="edit" src="../../Images/edit.png" class="edit"> 
                                    </div>  
                        </div>
                    </div>
                </form>
              </div>

              <div>
                <input type="submit" value="Save"  class="button4"> 
                <input type="reset" value="Delete Account" class="button5"> 
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