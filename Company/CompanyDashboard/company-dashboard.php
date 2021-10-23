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
    <link rel="stylesheet" href="./css/chart.css"/>
    <link rel="stylesheet" href="./css/pie-chart.css"/>
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


    <title>Company Dashboard</title>


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

        input[type=text] {
            display: inline;
            width: 80%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            /*border-radius: 35px;*/
            font-size: 16px;
            background-color: white;
            background-image: url('images/search-2.png');
            background-size: 10% 80%;
            background-position: right center;
            background-repeat: no-repeat;
            padding: 12px 45px 12px 5px;
            margin: 5px;
        }

        #tim-low {
            display: none;
        }

        @media (orientation: portrait) {
            #side-img {
                display: none;
            }

            #tim {
                display: none;
            }

            #tim-low {
                display: block;
            }

            input[type=text] {
                width: 100%;
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
    <div class="down-row" id="tim" style="padding: 0">
        <div class="col-left-70" style="padding: 0;"></div>
        <div class="col-right-30" style="padding: 0;">
            <div>
                <input type="text" name="search" placeholder="Search..">
            </div>
        </div>
    </div>
    <div class="down-row" style="margin-top: 0; padding-top: 0">
        <div class="col-left-30" style="margin: 2px;height: 500px;">
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
                                <i class='bx bxs-check-shield'></i>
                                <span class="link_name">Change Password</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Change Password</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class='bx bxs-briefcase'></i>
                                <span class="link_name">Workers</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Workers</a></li>
                            </ul>
                        </li>

                        <li class="list-select">
                            <a href="#">
                                <i class='bx bxs-business'></i>
                                <span class="link_name">Company</span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="#">Company</a></li>
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
            <div id="tim-low">
                <div>
                    <input type="text" name="search" placeholder="Search..">
                </div>
            </div>
            <div class="down-row" style="width: 100%;">
                <div class="col">
                    <center>
                        <div style="border: 1px solid mediumpurple; padding: 10px; margin: 10px; background: mediumpurple; width: 250px; height: 80px; text-align: center;">
                            <div>Accept count</div>
                        </div>
                        <div>

                            <div class="slds-p-top--medium" style="width: 100%;">
                                <div>
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" class="quiz-graph">
                                        <defs>
                                            <pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
                                                <path d="M 50 0 L 0 0 0 50" fill="none" stroke="#e5e5e5"
                                                      stroke-width="1"></path>
                                            </pattern>
                                        </defs>
                                        <rect x="50" width="calc(100% - 50px)" height="300px" fill="url(#grid)"
                                              stroke="gray"></rect>

                                        <g class="label-title">
                                            <text x="-160" y="5" transform="rotate(-90)">Participants</text>
                                        </g>
                                        <g class="label-title">
                                            <text x="50%" y="350">Questions</text>
                                        </g>
                                        <g class="x-labels">
                                            <text x="150" y="320">Q1</text>
                                            <text x="250" y="320">Q2</text>
                                            <text x="350" y="320">Q3</text>
                                            <text x="450" y="320">Q4</text>
                                            <text x="550" y="320">Q5</text>
                                            <text x="650" y="320">Q6</text>
                                            <text x="750" y="320">Complited</text>
                                        </g>
                                        <g class="y-labels">
                                            <text x="42" y="5">300</text>
                                            <text x="42" y="55">250</text>
                                            <text x="42" y="105">200</text>
                                            <text x="42" y="155">150</text>
                                            <text x="42" y="205">100</text>
                                            <text x="42" y="255">50</text>
                                            <text x="42" y="305">0</text>
                                        </g>
                                        <linearGradient id="grad" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%"
                                                  style="stop-color:rgba(99,224,238,.5);stop-opacity:1"></stop>
                                            <stop offset="100%" style="stop-color:white;stop-opacity:0"></stop>
                                        </linearGradient>
                                        <polyline fill="url(#grad)" stroke="#34becd" stroke-width="0" points="
            50,300
            51,0
            150,100
            250,80
            350,160
            450,100
            550,100
            650,150
            750,200
            750,300
            "></polyline>

                                        <polyline fill="none" stroke="#34becd" stroke-width="2" points="
            50,0
            150,100
            250,80
            350,160
            450,100
            550,100
            650,150
            750,200
            "></polyline>
                                        <g>
                                            <circle class="quiz-graph-start-dot" cx="50" cy="0" data-value="7.2"
                                                    r="6"></circle>
                                            <circle class="quiz-graph-dot" cx="150" cy="100" data-value="8.1" r="6"
                                                    q-title="Q1" answer-count="200" percent-value="66%"></circle>
                                            <circle class="quiz-graph-dot" cx="250" cy="80" data-value="7.7" r="6"
                                                    q-title="Q2" answer-count="220" percent-value="73%"></circle>
                                            <circle class="quiz-graph-dot" cx="350" cy="160" data-value="6.8" r="6"
                                                    q-title="Q3" answer-count="140" percent-value="46%"></circle>
                                            <circle class="quiz-graph-dot" cx="450" cy="100" data-value="6.7" r="6"
                                                    q-title="Q4" answer-count="200" percent-value="66%"></circle>
                                            <circle class="quiz-graph-dot" cx="550" cy="100" data-value="6.7" r="6"
                                                    q-title="Q5" answer-count="200" percent-value="66%"></circle>
                                            <circle class="quiz-graph-dot" cx="650" cy="150" data-value="6.7" r="6"
                                                    q-title="Q6" answer-count="150" percent-value="50%"></circle>
                                            <circle class="quiz-graph-dot" cx="750" cy="200" data-value="6.7" r="6"
                                                    q-title="Complited Quiz" answer-count="100"
                                                    percent-value="33%"></circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: left; width: 100%; padding: 10px 50px;">
                            <center>
                                <h4>Top Workers</h4>
                                <ol type="1" style="list-style-type: decimal !important;">
                                    <li>Nimal Perera</li>
                                    <li>Nimal Perera</li>
                                    <li>Nimal Perera</li>
                                    <li>Nimal Perera</li>
                                    <li>Nimal Perera</li>
                                </ol>
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col">
                    <center>
                        <div style="border: 1px solid indianred; padding: 10px; margin: 10px; background: indianred; width: 250px; height: 80px; text-align: center;">
                            <div>Reject count</div>
                            <div>250</div>
                        </div>
                        <div>

                            <div class="slds-p-top--medium">
                                <div>
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" class="quiz-graph">
                                        <defs>
                                            <pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
                                                <path d="M 50 0 L 0 0 0 50" fill="none" stroke="#e5e5e5"
                                                      stroke-width="1"></path>
                                            </pattern>
                                        </defs>
                                        <rect x="50" width="calc(100% - 50px)" height="300px" fill="url(#grid)"
                                              stroke="gray"></rect>

                                        <g class="label-title">
                                            <text x="-160" y="5" transform="rotate(-90)">Participants</text>
                                        </g>
                                        <g class="label-title">
                                            <text x="50%" y="350">Questions</text>
                                        </g>
                                        <g class="x-labels">
                                            <text x="150" y="320">Q1</text>
                                            <text x="250" y="320">Q2</text>
                                            <text x="350" y="320">Q3</text>
                                            <text x="450" y="320">Q4</text>
                                            <text x="550" y="320">Q5</text>
                                            <text x="650" y="320">Q6</text>
                                            <text x="750" y="320">Complited</text>
                                        </g>
                                        <g class="y-labels">
                                            <text x="42" y="5">300</text>
                                            <text x="42" y="55">250</text>
                                            <text x="42" y="105">200</text>
                                            <text x="42" y="155">150</text>
                                            <text x="42" y="205">100</text>
                                            <text x="42" y="255">50</text>
                                            <text x="42" y="305">0</text>
                                        </g>
                                        <linearGradient id="grad" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%"
                                                  style="stop-color:rgba(99,224,238,.5);stop-opacity:1"></stop>
                                            <stop offset="100%" style="stop-color:white;stop-opacity:0"></stop>
                                        </linearGradient>
                                        <polyline fill="url(#grad)" stroke="#34becd" stroke-width="0" points="
            50,300
            51,0
            150,100
            250,80
            350,160
            450,100
            550,100
            650,150
            750,200
            750,300
            "></polyline>

                                        <polyline fill="none" stroke="#34becd" stroke-width="2" points="
            50,0
            150,100
            250,80
            350,160
            450,100
            550,100
            650,150
            750,200
            "></polyline>
                                        <g>
                                            <circle class="quiz-graph-start-dot" cx="50" cy="0" data-value="7.2"
                                                    r="6"></circle>
                                            <circle class="quiz-graph-dot" cx="150" cy="100" data-value="8.1" r="6"
                                                    q-title="Q1" answer-count="200" percent-value="66%"></circle>
                                            <circle class="quiz-graph-dot" cx="250" cy="80" data-value="7.7" r="6"
                                                    q-title="Q2" answer-count="220" percent-value="73%"></circle>
                                            <circle class="quiz-graph-dot" cx="350" cy="160" data-value="6.8" r="6"
                                                    q-title="Q3" answer-count="140" percent-value="46%"></circle>
                                            <circle class="quiz-graph-dot" cx="450" cy="100" data-value="6.7" r="6"
                                                    q-title="Q4" answer-count="200" percent-value="66%"></circle>
                                            <circle class="quiz-graph-dot" cx="550" cy="100" data-value="6.7" r="6"
                                                    q-title="Q5" answer-count="200" percent-value="66%"></circle>
                                            <circle class="quiz-graph-dot" cx="650" cy="150" data-value="6.7" r="6"
                                                    q-title="Q6" answer-count="150" percent-value="50%"></circle>
                                            <circle class="quiz-graph-dot" cx="750" cy="200" data-value="6.7" r="6"
                                                    q-title="Complited Quiz" answer-count="100"
                                                    percent-value="33%"></circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: left; width: 100%; padding: 10px 50px;">
                            <center>
                                <h4>Top Job Categories</h4>
                                <ol type="1" style="list-style-type: decimal !important;">
                                    <li>Plumber</li>
                                    <li>Plumber</li>
                                    <li>Plumber</li>
                                    <li>Plumber</li>
                                    <li>Plumber</li>
                                </ol>
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col">
                    <center>
                        <div style="border: 1px solid cornflowerblue; padding: 10px; margin: 10px; background: cornflowerblue; width: 250px; height: 80px; text-align: center;">
                            <div>Number of workers hire</div>
                        </div>
                        <div>
                            <div>My Demo pie chart</div>
                            <div class="manzoku">
                                <p class=right><span>One</span><br>80%</p>
                                <p class=left><span>Two</span><br>20%</p>

                            </div>
                        </div>
                    </center>
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
                <li><i class='bx bxl-facebook-circle'></i>Facebook</li>
                <li><i class='bx bxl-twitter'></i>Twitter</li>
                <li><i class='bx bxl-instagram'></i>Instagram</li>
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
