<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="adminreportpage.css">
    <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <?php
        include '../../Repeating-pages/topnav/topnav8-admin.php'
    ?>
<link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">

</head>
<body>
<div class="box1">
<div class="sidebar close">

<ul class="nav-links">
    <li>
        <a href="../Adminprofile/Adminprofile.php">
            <i class='bx bxs-user' ></i>
            <span class="link_name">My Profile</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="../Adminprofile/Adminprofile.php">My Profile</a></li>
        </ul>
    </li>

    <li>
                    <a href="../admin_dashboard/admin_dashboard.php">
                      <i class='bx bx-plus' ></i>
                      <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
                    </ul>
                  </li>

    <li>
        <a href="../ManagerPageforAdmin/ManagerPageforAdmin.php">
            <i class='bx bx-street-view' ></i>
            <span class="link_name">Managers</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="../ManagerPageforAdmin/ManagerPageforAdmin.php">Managers</a></li>
        </ul>
    </li>


    <li>
        <a href="../Changepassword/changepwd.php">
            <i class='bx bxs-check-shield' ></i>
            <span class="link_name">Change Password</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="../Changepassword/changepwd.php">Change Password</a></li>
        </ul>
    </li>

    <li>
        <a href="../Adddeletecategory/Adddelcategory.php">
            <i class='bx bxs-spreadsheet' ></i>
            <span class="link_name">Category</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="../Adddeletecategory/Adddeletecategory.php">Category</a></li>
        </ul>
    </li>

    <li>
        <a href="../Reportpage/reportpage.php">
            <i class='bx bxs-hand-right' ></i>
            <span class="link_name">Reports</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="../Reportpage/reportpage.php">Reports</a></li>
        </ul>
    </li> </li>
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


<!-----------------------------viewing reports sent by customers and workers----------------------------------->
<div class="box2">
    <div class="tabs">
        <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone">Customer</label>
        <div class="tab">
            <div class="descipdiv">
                <div class="descipdivleft">
                <img src="../../Images/img.png" alt="user" id="userimg">
                <h4 > Name:  Kasun Perera</h4>
                <h4> Reason:  Budget is high</h4>
                </div>
                <div class="descipdivright">
                <button id="view">
                    View Profile
                </button>
                    <button id="remove">
                        Remove
                    </button>
                    <button id="suspend">
                       Suspend
                    </button>
                </div>
            </div>
            <div class="descipdiv">
                <div class="descipdivleft">
                    <img src="../../Images/img.png" alt="user" id="userimg">
                    <h4 > Name: Kasun Perera</h4>
                    <h4> Reason:  Budget is high</h4>
                </div>
                <div class="descipdivright">
                    <button id="view">
                        View Profile
                    </button>
                    <button id="remove">
                        Remove
                    </button>
                    <button id="suspend">
                        Suspend
                    </button>
                </div>
            </div>
            <div class="descipdiv">
                <div class="descipdivleft">
                    <img src="../../Images/img.png" alt="user" id="userimg">
                    <h4 > Name: Kasun Perera</h4>
                    <h4> Reason:  Budget is high</h4>
                </div>
                <div class="descipdivright">
                    <button id="view">
                        View Profile
                    </button>
                    <button id="remove">
                        Remove
                    </button>
                    <button id="suspend">
                        Suspend
                    </button>
                </div>
            </div>
        </div>

        <input type="radio" name="tabs" id="tabtwo">
        <label for="tabtwo">Worker</label>
        <div class="tab">
            <div class="descipdiv">
                <div class="descipdivleft">
                    <img src="../../Images/img.png" alt="user" id="userimg">
                    <h4 > Name:  Kasun Perera</h4>
                    <h4> Reason: Budget is high</h4>
                </div>
                <div class="descipdivright">
                    <button id="view">
                        View Profile
                    </button>
                    <button id="remove">
                        Remove
                    </button>
                    <button id="suspend">
                        Suspend
                    </button>
                </div>
            </div>
            <div class="descipdiv">
                <div class="descipdivleft">
                    <img src="../../Images/img.png" alt="user" id="userimg">
                    <h4 > Name: Kasun Perera</h4>
                    <h4> Reason: Budget is high</h4>
                </div>
                <div class="descipdivright">
                    <button id="view">
                        View Profile
                    </button>
                    <button id="remove">
                        Remove
                    </button>
                    <button id="suspend">
                        Suspend
                    </button>
                </div>
            </div>
            <div class="descipdiv">
                <div class="descipdivleft">
                    <img src="../../Images/img.png" alt="user" id="userimg">
                    <h4 > Name: Kasun Perera</h4>
                    <h4> Reason: Budget is high</h4>
                </div>
                <div class="descipdivright">
                    <button id="view">
                        View Profile
                    </button>
                    <button id="remove">
                        Remove
                    </button>
                    <button id="suspend">
                        Suspend
                    </button>
                </div>
            </div>
        </div>


    </div>
</div>

</body>
</html>