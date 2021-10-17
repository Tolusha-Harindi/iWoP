<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="./css/normalize.css"/>
    <link rel="stylesheet" href="./css/footer2.css">
    <link rel="stylesheet" href="./css/body-content.css">
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

        input[type=text] {
            display: inline;
            width: 80%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 35px;
            font-size: 16px;
            background-color: white;
            background-image: url('images/right-arrow.png');
            background-size: 5% 100%;
            background-position: right center;
            background-repeat: no-repeat;
            padding: 12px 45px 12px 5px;
            margin: 0;
        }

        @media (orientation: landscape) {
            .vl {
                border-left: 2px solid silver;
                height: 400px;
                position: absolute;
                left: 30%;
                margin-left: -3px;
                top: 190px;
            }

            #det-por {
                display: none;
            }
        }

        @media (orientation: portrait) {
            .hr-side {
                width: 90%;
                margin: 10px 0;
            }

            #det-lan {
                display: none;
            }

            #det-por {
                display: block;
                color: blue;
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
    <div class="down-row">
        <div class="col-left-30" style="margin: 2px;">
            <center>
                <i class="fas fa-user-circle fa-8x"></i>
            </center>
            <br>
            <center>
                <h4>Pasan Abeysekara</h4>
                <div><a href="tel:94774866554" style="text-decoration: none; color:#000;">077 4866554</a></div>
                <p id="det-por">Last active 5 days ago.</p>
            </center>
            <br>
        </div>
        <div class="vl"></div>
        <div class="col-right-70" style="margin: 2px;">
            <div style="margin: 5px; padding: 10px;">
                <table id="det-lan" style="width: 100%; text-align: left">
                    <tr>
                        <td rowspan="2" style="width: 30%;"><i class="fas fa-user-circle fa-5x"></i></td>
                        <td><h3>Pasan Abeysekara</h3></td>
                    </tr>
                    <tr>
                        <td><p style="color:blue;">Last active 5 days ago.</p></td>
                    </tr>
                </table>
                <hr class="hr-side" style="margin: 10px 0;">
                <br>
                <center>
                    <div style="width: 90%; height: 200px; padding: 10px;">
                        <p style="color:silver">Send a message to start a conversation</p>
                    </div>
                </center>
                <br><br>
                <div>
                    <i class="far fa-image fa-3x" style="display:inline; margin-top: 0;"></i>
                    <input type="text" name="search" placeholder="Search..">
                </div>
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