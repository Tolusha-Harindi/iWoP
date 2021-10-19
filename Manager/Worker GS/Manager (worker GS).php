<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="./css/normalize.css"/>
    <link rel="stylesheet" href="./css/footer2.css">
    <link rel="stylesheet" href="./css/body-content.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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


    <title>Detail Page</title>


    <style>

        .hr-side {
            width: 100%;
        }

        .btn-lg {
            width: 150px;
            height: 50px;
            margin: 10px;
            color: white;
            cursor: pointer;
        }

        @media (orientation: landscape) {
            .vl {
                border-left: 2px solid silver;
                height: 1300px;
                position: absolute;
                left: 50%;
                margin-left: -3px;
                top: 190px;
            }
        }

        @media (orientation: portrait) {
            .hr-side {
                width: 90%;
                margin: 10px 0;
            }
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
    <div id="head-title">
        <div style="margin-left: 40px; cursor: pointer; display: inline">
            <i class="fas fa-long-arrow-alt-left  fa-4x"></i>
        </div>
        <div>
            <center>
                <h2>Detail Page</h2>
            </center>
        </div>
    </div>
    <div class="down-row">
        <div class="col-left" style="margin: 2px;">
            <center>
                <i class="fas fa-user-circle fa-8x"></i>
            </center>
            <br>
            <center>
                <i class="fas fa-briefcase" style="display: inline; margin: 10px;"></i>
                <h4 style="display: inline; margin: 10px;">Employee</h4>
                <div style="display: inline; margin: 10px;">5 years</div>
            </center>
            <br>
            <center>
                <div style="border: 1px solid silver; text-align: left; padding: 5px; margin: 10px;">
                    <h3 style="color:blue;">Working Days</h3>
                    <table width="80%">
                        <tr>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                        </tr>
                    </table>
                    <br>
                    <h3 style="color:blue;">Working Time</h3>
                    <table width="80%">
                        <tr>
                            <td>8.00am - 5.00pm</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    <h3 style="color:blue;">Best Time to Call</h3>
                    <table width="80%">
                        <tr>
                            <td>6.00pm - 9.00pm</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                </div>
            </center>
            <br><br>
            <center>
                <div style="text-align: left; padding: 5px; margin: 10px;">
                    <h3>Scan copy of Nic</h3>
                    <div style="border: 1px solid silver; width: 90%; height: 200px; padding: 10px;">
                        <p style="color:silver;">Font side</p>
                    </div>
                    <br>
                    <div style="border: 1px solid silver; width: 90%; height: 200px; padding: 10px;">
                        <p style="color:silver;">Back side</p>
                    </div>
                    <br><br>
                    <h3>GS Certificate</h3>
                    <div style="border: 1px solid silver; width: 90%; height: 200px; padding: 10px;">
                        <center>
                            <i class="far fa-image fa-10x"></i>
                        </center>
                    </div>
                    <br>
                </div>
            </center>
        </div>
        <div class="vl"></div>
        <div class="col-right" style="margin: 2px;">
            <div style="margin: 5px; padding: 10px;">
                <h3>Kamal Perera</h3>
                <hr class="hr-side" style="margin: 10px 0;">
                <div class="down-row">
                    <div class="col-left">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
                    <div class="col-right" style="text-align: left">
                        Colombo
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <i class="fas fa-user-tie fa-3x"></i>
                    </div>
                    <div class="col-right" style="text-align: left">
                        Electrician
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <i class="fas fa-address-book fa-3x"></i>
                    </div>
                    <div class="col-right" style="text-align: left">
                        <a href="tel:94774866554" style="text-decoration: none; color:#000;">077 48 66 55 4</a>
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>NIC No</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        984521756V
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Email</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        <a href="mailto:pasan.lahiru123@gmail.com" style="text-decoration: none; color:#000;">pasan.lahiru123@gmail.com</a>
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Qualifications</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        NVQ level 1
                    </div>
                </div>
                <hr class="hr-side">
            </div>
            <br>
            <center>
                <div style="border: 1px solid silver; width: 90%; height: 200px; padding: 10px;">
                    <p style="color:silver; text-align: left">Past Experience</p>
                    <center>
                        <i class="far fa-image fa-10x"></i>
                        &nbsp;&nbsp;
                        <i class="far fa-image fa-10x"></i>
                    </center>
                </div>
            </center>
            <br><br>
            <center>
                <button class="btn-lg" style="background: green">Approve</button>
                <button class="btn-lg" style="background: red">Reject</button>
            </center>
            <br>
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
