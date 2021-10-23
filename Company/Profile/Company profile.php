<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="./css/normalize.css"/>
    <link rel="stylesheet" href="./css/footer2.css">
    <link rel="stylesheet" href="./css/body-content.css">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
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
    <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap"
            rel="stylesheet"
    />
    <?php
        include '../../Repeating-pages/topnav/topnav4-company.php'
        ?>

    <title>Profile</title>


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

        #side-img {
            width: 200px;
        }

        input[type=button] {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            width: 100px;
        }

        @media (orientation: portrait) {
            #side-img{
                display: none;
            }
        }
    </style>

</head>

<body>
<script src="js/app.js" async defer></script>


<div class="main-box">
    <div class="down-row" style="padding: 40px;">
        <div class="col-left-30" style="padding: 0;"></div>
        <div class="col-right-70" style="padding: 0;">
            <h3>Profile</h3>
        </div>
    </div>
    <div class="down-row">
        <div class="col-left-30" style="border: 1px solid black; margin: 2px;">
            <div class="box1">
                <div class="sidebar close">
                    <ul class="nav-links">
                        <li class="list-select">
                            <a href="#">
                                <i class='bx bxs-user'></i>
                                <span class="link_name">My Profile</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">My Profile</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class='bx bxs-check-shield'></i>
                                <span class="link_name">Change Password</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Change Password</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class='bx bxs-image'></i>
                                <span class="link_name">Post Your Ads</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Post Your Ads</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class='bx bxs-share' ></i>
                                <span class="link_name">Responses</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Responses</a></li>
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
            <div class="down-row">
                <div class="col-left-30">
                    <img src="images/user.png" alt="user" id="side-img">
                </div>
                <div class="col-right-70" style="padding: 0;">
                    <label for="cPassword">Company Name <i class="red-s">*</i></label>
                    <input type="text" id="cPassword" name="cPassword" required>
                    <label for="nPassword">Company Owner Name <i class="red-s">*</i></label>
                    <input type="text" id="nPassword" name="nPassword" required>
                    <label for="ccPassword">Company Registered No <i class="red-s">*</i></label>
                    <input type="text" id="ccPassword" name="ccPassword" required>
                    <label for="ccPassword">Address <i class="red-s">*</i></label>
                    <input type="text" id="ccPassword" name="ccPassword" required>
                    <label for="ccPassword">Email No <i class="red-s">*</i></label>
                    <input type="text" id="ccPassword" name="ccPassword" required>
                    <label for="ccPassword">Contact No <i class="red-s">*</i></label>
                    <input type="text" id="ccPassword" name="ccPassword" required>
                    <label for="ccPassword">GS Certificate <i class="red-s">*</i></label>
                    <input type="text" id="ccPassword" name="ccPassword" required>
                    <label for="ccPassword">Company Registered Certificate <i class="red-s">*</i></label>
                    <input type="text" id="ccPassword" name="ccPassword" required>
                    <input type="button" value="Save">
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
