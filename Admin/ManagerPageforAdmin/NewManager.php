
<html lang="en" dir="ltr"></html>
    <title> New Manager </title>

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
        <div class ="heading1" > New Manager </div>
           
          <!--------------------Side bar---------------------->
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


<!------------------------------------Form-------------------------------->
              <div class="box2">
                <form name = "reg-w" method="post" action="new_manager.php">
                    <div class="reg-start">
                            <div class="info">
                                    <div class="group">
                                        <p class="field"> <b>Name</b></p>
                                        <input id="name" name="name" type="text" placeholder = "Name" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Contact Number</b></p>
                                        <input id="contact" name="contact"type="tel" placeholder = "Contact Number" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>NIC Number</b></p>
                                        <input id="NIC" name="NIC" type="text" placeholder = "NIC Number" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Email</b> </p>
                                        <input id="email" name="email" type="email" placeholder = "Email" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Password</b></p>
                                        <input id="pass" name="pass" type="password" placeholder= "Password" class="input" data-type="password" required>
                                    </div>
                                    
                        </div>
                    </div>
                    <div>
                      <input type="submit" name="submit" value="Add" class="button4">
                      <input type="reset" name="reset" value="Cancel" class="button5">
                  </div> 
                </form>
              </div>

    </body>

    </html>