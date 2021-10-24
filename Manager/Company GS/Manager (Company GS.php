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
         body{
  font-family: 'Poppins', sans-serif;
  background-image: url('../../Images/bg5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

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


<div class="main-box">
    <div id="head-title">
        <div style="margin-left: 40px; cursor: pointer; display: inline">
            <i class="fas fa-long-arrow-alt-left  fa-4x"></i>
        </div>
        <div>
            <center>
                <h2 style= "margin-top:100px">Detail Page</h2>
            </center>
        </div>
    </div>
    <div class="down-row">
        <div class="col-left-30" style="margin: 0px; margin-top:20px">
            <center>
                <i class="far fa-image fa-10x"></i>
            </center>
        </div>
        <div class="col-right-70" style="margin: 2px;">
            <div style="margin: 5px; padding: 10px;">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Company Name</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        Electro
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Company Owner's Name</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        Dayan Bidags
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Company Registered No</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        DTG/FN/Busin/Reg/01258
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Address</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        Panadura, Sri Lanka
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Email</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        <a href="mailto:info@solutions.gowoma.com" style="text-decoration: none; color:#000;">Electro@gmail.com</a>
                    </div>
                </div>
                <hr class="hr-side">
                <div class="down-row">
                    <div class="col-left">
                        <h4>Contact No</h4>
                    </div>
                    <div class="col-right" style="text-align: left">
                        <a href="tel:94710688369" style="text-decoration: none; color:#000;">071 0 688 369</a>
                    </div>
                </div>
                <hr class="hr-side">
            </div>
            <br>
            <center>
                <div style="text-align: left; padding: 5px; margin: 10px;">
                    <h3>GS Certificate</h3>
                    <div style="border: 1px solid silver; width: 90%; height: 200px; padding: 10px;">
                    </div>
                    <br>
                    <h3>Company Register Certificate</h3>
                    <div style="border: 1px solid silver; width: 90%; height: 200px; padding: 10px;">
                    </div>
                    <br>
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
