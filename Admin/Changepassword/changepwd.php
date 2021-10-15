<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="changepwd.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
        include '../../Repeating-pages/topnav/topnav4-company.php'
    ?>
<link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">

</head>
<body>
<div class="box1">

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
                    <i class='bx bx-street-view' ></i>
                    <span class="link_name">Managers</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Managers</a></li>
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
                    <i class='bx bxs-spreadsheet' ></i>
                    <span class="link_name">Catogary</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Catogary</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-hand-right' ></i>
                    <span class="link_name">Reports</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Reports</a></li>
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

    <script src="script.js"></script>

</div>

<div class="box2">
    <div class="mainDiv">
        <div class="cardStyle">
            <form action="changePassword.jsp" method="post">
                <img src="key.png" class="floatRight">
                <div class="inputDiv">
                    <label class="inputLabel" for="currnetPassword">Current Password</label>
                    <input type="password" id="current password" name="currentpassword" required>
                </div>
                <div class="inputDiv">
                    <label class="inputLabel" for="password">New Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                </div>

                <div class="buttonWrapper">
                    <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                        <span>Change Password</span>

                    </button>
                </div>
            </form>
        </div>

</div>
</div>

</body>
</html>