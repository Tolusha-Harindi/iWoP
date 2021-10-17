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
    <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap"
            rel="stylesheet"
    />


    <title>Bank details</title>


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
            width: 90%;
            padding: 12px 20px;
            margin: 5px 0px 8px;
            box-sizing: border-box;
            border: 2px solid silver;
        }

        label {
            width: 100%;
            padding: 12px 20px;
            margin: 5px 0px 8px;
            box-sizing: border-box;
            display: inline-block;
        }

        input[type=button] {
            background-color: #4CAF50;
            color: white;
            padding: 20px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
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
<header>
    <img src="images/Logo.jpg" alt="Landing" id="image" class="logo" height="80px">
    <nav>
        <a href="#"><i class="fas fa-user-circle fa-2x"></i> </a>
        <a href="#alladds"> <b>| All Adds </b></a>
        <a href="#payments"> <b>| Payments </b></a>
        <a href="#category"><b> | Category </b></a>
        <a href="#help"> <b>| Help page </b></a>
        <a href="#Logout"> <b>| Logout </b></a>
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
    <div class="down-row" style="padding: 0;">
        <div class="col-left-30" style="padding: 0;"></div>
        <div class="col-right-70" style="padding: 0;">
            <h3>Bank Details</h3>
        </div>
    </div>
    <div class="down-row">
        <div class="col-left-30" style="border: 1px solid black; margin: 2px; height: 500px;">
            <div class="box1">
                <div class="sidebar close">
                    <ul class="nav-links">
                        <li>
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
                                <i class='bx bxs-collection' ></i>
                                <span class="link_name">My Services</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">My Services</a></li>
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
                                <i class='bx bx-image' ></i>
                                <span class="link_name">Posted Ads</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Posted Ads</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class='bx bxs-user-check' ></i>
                                <span class="link_name">Job Vacancies</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Job Vacancies</a></li>
                            </ul>
                        </li>

                        <li class="list-select">
                            <a href="#">
                                <i class='bx bxs-bank'></i>
                                <span class="link_name">Bank Details</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Bank Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class='bx bxs-calendar-event'></i>
                                <span class="link_name">Work Schedule</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Work Schedule</a></li>
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
        <div class="col-right-70" style="margin: 2px;">
            <div class="down-row">
                <div class="col-left-30">
                    <label for="nPassword">Bank Name</label>
                    <label for="ccPassword">Bank Branch</label>
                    <label for="ccPassword">Bank Code</label>
                    <label for="ccPassword">Account No</label>
                </div>
                <div class="col-right-70" style="padding: 0;">

                    <input type="text" id="nPassword" name="nPassword" required> <i class="fas fa-pen"></i>

                    <input type="text" id="ccPassword" name="ccPassword" required> <i class="fas fa-pen"></i>

                    <input type="text" id="ccPassword" name="ccPassword" required> <i class="fas fa-pen"></i>

                    <input type="text" id="ccPassword" name="ccPassword" required> <i class="fas fa-pen"></i>
                    <br><br>
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
