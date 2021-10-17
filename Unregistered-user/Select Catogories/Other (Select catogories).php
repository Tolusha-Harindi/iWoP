<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="./css/normalize.css"/>
    <link rel="stylesheet" href="./css/body-content.css">
    <link rel="stylesheet" href="./css/footer2.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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

    <style>
        .down-row  p, ul, dl{
            color: black;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            margin: 10px;
        }

        .down-row  ul dl{
            padding-left: 15px;
        }
    </style>


    <title>How to select categories</title>
</head>

<body>
<script src="js/app.js" async defer></script>
<header>
    <img src="images/Logo.jpg" alt="Landing" id="image" class="logo" height="80px">
    <nav>
        <a href="#alladds"> <b>| All Adds </b></a>
        <a href="#category"><b> | Category </b></a>
        <a href="#help"> <b>| Help page </b></a>
        <a href="#Logout" style="border-radius: 35px; border: 1px solid blue; padding: 10px; background: blue; color: white;"> <b>| Register </b></a>
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
    <div class="top-row">
        <div id="title-img">
            <img src="images/back-img-1.jpg" alt="Snow">
            <center>
                <h1 id="title-head">Choosing the categories of serves</h1>
            </center>
        </div>
    </div>
    <div class="down-row">
        <div>
            <div style="background: #9e9aa8">
                <p>Our goal is to provide services required by you in a timely and convenient manner. You are able to
                    use
                    the search option on our iWoP website to easily search for the services you require.</p>
                <p>
                <ul style="color:#000 !important;">
                    <li>
                        - Chose the search option on your Main Menu. to type of services required.
                        <dl>
                            <dt></dt>
                            <dd>Ex: If you are looking for a Carpenter type in 'Carpenter'</dd>
                        </dl>
                    </li>
                </ul>
                </p>
            </div>
            <div>
                <p>
                <ul style="color:#000 !important;">
                    <li>
                        - You can also use the 'select category' option to choose already entered. You are then allowed to
                        select the location services are required by clicking on the 'Select Area' button
                    </li>
                </ul>
                </p>
                <p>Another easy method of selecting required services introduced on the website is the Category
                    icon.</p>
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
                <a href="how-to-select-categories.html">
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
                <a href="#">
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
