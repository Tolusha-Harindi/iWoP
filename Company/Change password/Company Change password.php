<?php
session_start();
if(isset($_SESSION['Email'])){

  include '../../Backend/db_connection.php'; //check company id or not
  $temp= $_SESSION['Email']; 
  $sql = "SELECT Email FROM company WHERE Email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){ 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="./css/normalize.css"/>
    <link rel="stylesheet" href="./css/footer2.css">
    <link rel="stylesheet" href="./css/body-content.css">

    <link rel="stylesheet" href="./css/side-bar.css"/>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link
            href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
            rel="stylesheet"
    />

    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/core/globals.css"/>
    <link rel="stylesheet" href="css/layout/header.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    

    <title>Change Password</title>


    <style>
        .menu-dash {

        }

        .menu-dash > li {
            padding: 15px;
            border-bottom: 1px solid black;
            height: 50px;
        }

        .menu-dash > li:hover {
            background: orange;
            cursor: pointer;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 5px 0px 8px;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid black;
        }

        @media (orientation: portrait) {
            #side-img {
                display: none;
            }

            #cont-box {
                margin-top: 20px;
            }
        }
    </style>
      <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
      <!--------------------------Top nav----------------------------------------->
      <?php
        include '../../Repeating-pages/topnav/topnav4-company.php'
       ?>
</head>

<body>
<script src="js/app.js" async defer></script>


<div class="main-box">
    <div class="down-row" style="padding: 50;">
        <div class="col-left-30" style="padding: 10;">
     </div>
        <div class="col-right-70" style="padding: 10;">
            <h3>Password Change</h3>
        </div>
    </div>
    <!--------------------------------------- side navigation ------------------------------------>
    <!-- box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
         background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.3); /* Black background with 0.5 opacity */ -->
    <div class="down-row">
        <div class="col-left-30" style=" margin: 2px; height: 500px;
        
        color: white; /* White text */
        margin-top:0px;">
            <div class="box1">
                <div class="sidebar close">
                    <ul class="nav-links">

                     
                        <li>

                            <a href="../CompanyDashboard/Company-dashboard.php">
                                <i class='bx bxs-dashboard'></i>
                                <span class="link_name">Dashboard</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="../CompanyDashboard/Companydashboard.php">Dashboard</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="../CompanyProfile/Companyprofile.php">
                                <i class='bx bxs-user'></i>
                                <span class="link_name">My Profile</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="../CompanyProfile/Companyprofile.php">My Profile</a></li>
                            </ul>
                        </li>

                        <li class="list-select">
                            <a href="../Change password/Company Change password.php">
                                <i class='bx bxs-check-shield'></i>
                                <span class="link_name">Change Password</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="../Change password/Company Change password.php">Change Password</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="../Wantedads/wantedads.php">
                                <i class='bx bxs-image'></i>
                                <span class="link_name">Post Your Ads</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="../Wantedads/wantedads.php">Post Your Ads</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="../ApplyforJob-Responses/ApplyforJob-companyview.php">
                                <i class='bx bxs-share' ></i>
                                <span class="link_name">Responses</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="../ApplyforJob-Responses/ApplyforJob-companyview.php">Responses</a></li>
                            </ul>
                        </li>
                     </li>
                    </ul>
                </div>
                <section class="home-section">
                    <div class="home-content">
                        <i class='bx bx-menu'></i>
                        <!--       <span class="text">Drop Down Sidebar</span>
                 -->
                    </div>
                </section>
            </div>
        </div>
        <div class="col-right-70" id="cont-box" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: 2px;">
            <div class="down-row">
                <div class="col-left-30">
                    <img src="images/key.png" alt="Key" id="side-img">
                </div>
                <div class="col-right-70" style="padding: 20;">
                    <label for="cPassword" id="currentpwd">Current Password <i class="red-s">*</i></label>
                    <input type="text" id="cPassword" name="cPassword" required>
                    <label for="nPassword" id ="newpwd">New Password <i class="red-s">*</i></label>
                    <input type="text" id="nPassword" name="nPassword" required>
                    <label for="ccPassword" id="conpwd">Confirm Password <i class="red-s">*</i></label>
                    <input type="text" id="ccPassword" name="ccPassword" required>
                    <input type="button" value="Change Password"
                           style=" padding: 15px 32px ; background: #2eab2b; color:#ffffff; border: none; cursor: pointer;text-align: center;text-decoration: none;
                            display: inline-block;
                            margin-top:20px;
                            font-size:23px" >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="separator-div"></div>

<!--  FOOTER START -->

<div class="footer">
    <div class="inner-footer">

        <!--  for company name and description -->
        <div class="footer-items">
            <h3>How To Add Services</h3>
            <div class="border1"></div> <!--for the underline -->
            <ul>
                <a href="../../Unregistered-user/Enter Service/other (enter service).php">
                    <li>How To Add My Services</li>
                </a>
                <a href="#">
                    <li>How To Select Categories</li>
                </a>
                <a href="../../Unregistered-user/Advertiesment/Other (advertiesment).php">
                    <li>Banner Advertising</li>
                </a>
            </ul>
        </div>

        <!--  for quick links  -->
        <div class="footer-items">
            <h3>Help & Support</h3>
            <div class="border1"></div> <!--for the underline -->
            <ul>
                <a href="../../Repeating-pages/FAQ/FAQ.php">
                    <li>FAQ</li>
                </a>
                <a href="../../Unregistered-user/Contactus/contactus.php">
                    <li>Contact Us</li>
                </a>
            </ul>
        </div>

        <!--  for some other links -->
        <div class="footer-items">
            <h3>About Us</h3>
            <div class="border1"></div>  <!--for the underline -->
            <ul>
                <a href="../../Unregistered-user/Aboutus/aboutus.php">
                    <li>About Us</li>
                </a>
                <a href="../../Unregistered-user/Terms&conditions/Other(terms&conditions).php">
                    <li>Terms & Condition</li>
                </a>
                <a href="../../Unregistered-user/Privacy Policy/Other(privacy policy).php">
                    <li>Privacy Policy</li>
                </a>
            </ul>
        </div>

        <!--  for contact us info -->
        <div class="footer-items">
            <h3>Connect With Us</h3>
            <div class="border1"></div>
            <ul>
                <li><i class='bx bxl-facebook-circle' ></i>Facebook</li>
                <li><i class='bx bxl-twitter' ></i>Twitter</li>
                <li><i class='bx bxl-instagram' ></i>Instagram</li>
            </ul>
        </div>
    </div>

    <!--   Footer Bottom start  -->
    <div class="footer-bottom">
        Copyright &copy; iWoP 2021
    </div>
</div>

<!--   Footer Bottom end -->

<!--   FOOTER END -->

<script src="./js/script.js"></script>
<script src="./js/app.js"></script>
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