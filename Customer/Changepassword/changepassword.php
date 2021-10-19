<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="changepwd.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <!--------------------------Top nav----------------------------------------->
    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>
    

</head>

<body>
    <div class="box1"> 
            <!-----------------------------------Side navigation--------------------------------------------->
        <div class="sidebar close">

        <ul class="nav-links">
        <li>
            <a href="../CustomerProfile/customerprofile.php">
            <i class='bx bxs-user' ></i>
            <span class="link_name">My Profile</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="../CustomerProfile/customerprofile.php">My Profile</a></li>
            </ul>
        </li>

        <li>
            <a href="../Changepassword/changepassword.php">
            <i class='bx bxs-check-shield' ></i>
            <span class="link_name">Change Password</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="../Changepassword/changepassword.php">Change Password</a></li>
            </ul>
        </li>

        <li>
            <a href="../Wantedads/wantedads.php">
            <i class='bx bxs-image' ></i>
            <span class="link_name">Post Your Ads</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="../Wantedads/wantedads.php">Post Your Ads</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn-link">
            <a href="#">
                <i class= 'bx bxs-share'></i>
                <span class="link_name">Responses</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
            <li><a class="link_name" href="#">Responses</a></li>
            <li><a href="../ResponsesByWorkers/ResponsesbyWorkers.php">Job invite Requests</a></li>
            <li><a href="../ApplyforJob-Responses/ApplyforJob-customerview.php">Posted Ads</a></li>
            <!-- <li><a href="#">PHP & MySQL</a></li>-->
            </ul>
        </li>
        <li>
            <a href="../RecentWorkers/RecentWorkers.php">
            <i class= 'bx bxs-group'></i>
            <span class="link_name">Recent Workers</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="../RecentWorkers/RecentWorkers.php">Recent Workers</a></li>
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

    <script src="../../Repeating-pages/sidenav/sidenavigation.js"></script>

    </div>

    <div class="changepwd">
    Change Password </br>
    </div>
    <div class="box2">

        <div class="mainDiv">
            <div class="cardStyle">
                <form action="" method="post">
                <div id="imgdiv"> <img src="../../Images/key.png" class="floatRight"></div> 
                    <div class="inputDiv">
                        <label class="inputLabel" for="currnet Password">Current Password <b class="red"> * </b> </label>
                        <input type="password" id="current password" name="currentpassword" required>
                    </div>
                    <div class="inputDiv">
                        <label class="inputLabel" for="password">New Password <b class="red"> *</b></label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="confirmPassword">Confirm Password <b class="red"> * </b></label>
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