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
    <script src="https://kit.fontawesome.com/7badb01122.js" crossorigin="anonymous"></script>
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
    <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap"
            rel="stylesheet"
    />


    <title>Workers</title>


    <style>
         body{
  font-family: 'Poppins', sans-serif;
  background-image: url('../../Images/bg5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
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

        #side-img {
            width: 200px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            width: 100px;
        }

        input[type=button] {
            color: black;
            font-weight: bolder;
            padding: 15px;
            margin-right: 20px;
            margin-bottom: 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            width: 200px;
            border: 1px solid black;
        }

        #tim-low{
            display: none;
        }

        @media (orientation: portrait) {
            #side-img {
                display: none;
            }

            #tim {
                display: none;
            }

            #tim-low{
                display: block;
            }
        }
        .link-a{
            text-decoration:none;
            padding:10px;
            border:1px solid black;
            color:black;
            background:white;
    margin-bottom:25px;
            position:absolute;
            right:168px;
            top:58px;


        }
        .link-b{
            text-decoration:none;
            padding:10px;
            border:1px solid black;
            color:black;
            background:#9e9aa8;
            margin-bottom:25px;
            position:absolute;
            right:22px;
            top:58px;


        }
    </style>

</head>

<body>
<script src="js/app.js" async defer></script>
<header>
    <img src="images/Logo.jpg" alt="Landing" id="image" class="logo" height="80px">
    <nav>
        <a href="../../Manager/ManagerProfile/ManagerProfile.php"><i class="fas fa-user-circle fa-2x"></i> </a>
        <a href="#alladds"> <b>| All Adds </b></a>
        <a href="../../Unregistered-user/Allcategories/categories.php"><b> | Category </b></a>
        <a href="../../Customer/FAQ/FAQ.php"> <b>| Help page </b></a>
        <a href="../../Login/Logout.php"> <b>| Logout </b></a>
    </nav>
    <div>
        <button class="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<div class="main-box">
    <div class="down-row" id="tim" style="padding: 0">
        <div class="col-left-30" style="padding: 0;"></div>
        <div class="col-right-70" style="padding: 0;">
            <!-- <input type="button" value="Pending Registration" style="background-color: #9e9aa8;"> -->
            <!-- <input type="button" value="Workers' List" style="margin-right: 0;"> -->
            <a class="link-a" href="../Worker list/Manager (worker list).php">Worker List</a>
            <a  class="link-b"href="../Worker pending/Manager (Worker pending).php">Worker pending</a>
        </div>
    </div>
    <div class="down-row" style="margin-top: 0; padding-top: 0; margin-top:22px">
        <div class="col-left-30" style="border: 1px solid black; margin: 2px;height: 500px;">
            <div class="box1">
                <div class="sidebar close">
                    <ul class="nav-links">
                        <li>
                            <a href="#">
                                <i class='bx bxs-user'></i>
                                <span class="link_name">My Profile</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="../../Manager/ManagerProfile/ManagerProfile.php">My Profile</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class='bx bxs-check-shield'></i>
                                <span class="link_name">Change Password</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="../Change password/Manager change password.php">Change Password</a></li>
                            </ul>
                        </li>

                        <li class="list-select">
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
                        <i class='bx bx-menu'></i>
                        <!--       <span class="text">Drop Down Sidebar</span>
                 -->
                    </div>
                </section>
            </div>
        </div>
        <div class="col-right-70" style="border: 1px solid black; margin: 2px;">
            <div id="tim-low">
                <!-- <input type="button" value="Pending Registration" style="background-color: #9e9aa8;"> -->
                <!-- <input type="button" value="Workers' List"> -->
            </div>
        <div class="down-row">
            <table width="100%">
                <tr>
                    <td><i class="fas fa-user-circle fa-4x"></i></td>
                    <td>Sunil Perera</td>
                    <td><a href="../Worker GS/Manager (worker GS).php">View Profile</a></td>
                    <td>2h</td>
                </tr>
                <tr>
                    <td colspan="4" style="margin-bottom: 10px">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td><i class="fas fa-user-circle fa-4x"></i></td>
                    <td>Sunil Perera</td>
                    <td><a href="../Worker GS/Manager (worker GS).php">View Profile</a></td>
                    <td>2h</td>
                </tr>
                <tr>
                    <td colspan="4" style="margin-bottom: 10px">
                        <hr>
                    </td>
                </tr>
            </table>
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
                <a href="#">
                    <li>How To Add My Services</li>
                </a>
                <a href="#">
                    <li>How To Select Categories</li>
                </a>
                <a href="#">
                    <li>Banner Advertising</li>
                </a>
            </ul>
        </div>

        <!--  for quick links  -->
        <div class="footer-items">
            <h3>Help & Support</h3>
            <div class="border1"></div> <!--for the underline -->
            <ul>
                <a href="#">
                    <li>FAQ</li>
                </a>
                <a href="#">
                    <li>Contact Us</li>
                </a>
            </ul>
        </div>

        <!--  for some other links -->
        <div class="footer-items">
            <h3>About Us</h3>
            <div class="border1"></div>  <!--for the underline -->
            <ul>
                <a href="#">
                    <li>About Us</li>
                </a>
                <a href="termsandcondition.html">
                    <li>Terms & Condition</li>
                </a>
                <a href="#">
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
