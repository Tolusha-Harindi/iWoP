<html lang="en" dir="ltr"></html>
<title> Recent Workers </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="RecentWorkers.css">
    <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>

</head>

<body>
        
  <!-----------------------------------Side navigation--------------------------------------------->
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
        <i class='bx bxs-check-shield' ></i>
        <span class="link_name">Change Password</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Change Password</a></li>
        </ul>
    </li>

    <li>
        <a href="#">
        <i class='bx bxs-image' ></i>
        <span class="link_name">Post Your Ads</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Post Your Ads</a></li>
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
        <li><a href="#">Job invite Requests</a></li>
        <li><a href="#">Posted Ads</a></li>
        <!-- <li><a href="#">PHP & MySQL</a></li>-->
        </ul>
    </li>
    <li>
        <a href="#">
        <i class= 'bx bxs-group'></i>
        <span class="link_name">Recent Workers</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Recent Workers</a></li>
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

<!----------------------------------------------------Recent workers---------------------------------------->
  
    <div class= "container">
        <h2 class="box-heading"> Recent Workers</h2> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Profession</th>
                        <th>Paid or Not</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <a href="#">Name</a></td>
                        <td> Profession</td>
                        <td> <p class="txt1">Paid</p></td>
                        <td> 08 / 10 / 2021</td>
                    </tr>
                    <tr>
                        <td> <a href="#">Name </a></td>
                        <td> Profession</td>
                        <td> <p class="txt1">Paid</p></td>
                        <td> 08 / 10 / 2021</td>
                    </tr>
                    <tr>
                        <td><a href="#"> Name</a></td>
                        <td> Profession</td>
                        <td> <p class="txt2">Due Payments</p></td>
                        <td> 08 / 10 / 2021</td>
                    </tr>
                    <tr>
                        <td> <a href="#">Name </a></td>
                        <td> Profession</td>
                        <td> <p class="txt1">Paid</p></td>
                        <td> 08 / 10 / 2021</td>
                    </tr>
                    <tr>
                        <td> <a href="#">Name </a></td>
                        <td> Profession</td>
                        <td> <p class="txt2">Due Payments</p></td>
                        <td> 08 / 10 / 2021</td>
                    </tr>
                    <tr>
                        <td><a href="#"> Name</a></td>
                        <td> Profession</td>
                        <td> <p class="txt1">Paid</p></td>
                        <td> 08 / 10 / 2021</td>
                    </tr>
                    <tr>
                        <td><a href="#">Name</a> </td>
                        <td> Profession</td>
                        <td> <p class="txt1">Paid</p></td>
                        <td> 08 / 10 / 2021</td>
                    </tr>
                    
                </tbody>
            </table>
    </div>
</body>
</html>