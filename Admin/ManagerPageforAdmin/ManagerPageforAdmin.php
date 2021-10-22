<html lang="en" dir="ltr"></html>
    <title> Manager page for Admin </title>

    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
        <link rel="stylesheet" href="ManagerPageforAdmin.css"> 
        <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css">
         <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <?php 
          include '../../Repeating-pages/topnav/topnav8-admin.php'
        ?>

    </head>

    <body>
        <div class ="heading1" > Manager
            <div>
                <a href="NewManager.php" input type="button" value="button" class="button1"> Add New Manager </a>
           
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
                    <a href="../admin_dashboard/admin_dashboard.php">
                      <i class='bx bx-plus' ></i>
                      <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
                    </ul>
                  </li>
            
                  <li>
                    <a href="ManagerPageforAdmin.php">
                      <i class='bx bx-street-view' ></i>
                      <span class="link_name">Managers</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="ManagerPageforAdmin.php">Managers</a></li>
                    </ul>
                  </li>
            
            
                  <!-- <li>
                <a href="../Changepassword/changepwd.php">
                    <i class='bx bxs-check-shield' ></i>
                    <span class="link_name">Change Password</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Changepassword/changepwd.php">Change Password</a></li>
                </ul>
            </li> -->

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

              <div class="box1">
                <image src="../../Images/img.png" width="160px" height="160px" alt="profile image" class="profimg"></image>
                <!------<p clas="detail"> Manager Name </p>--------->
                <a href="../../Manager/ManagerProfile/ManagerProfile.php" input type="button" value="button" class="button2"> View profile </a>
                <a href="#" input type="button" value="button" class="button3"> Remove </a>
            </div>
    </div>
    </body>

    </html>