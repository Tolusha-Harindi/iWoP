<html lang="en" dir="ltr">

</html>
<title> Manager page for Admin </title>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!----Profile---->
  <link rel="stylesheet" href="ManagerPageforAdmin.css">
  <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css">
  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <?php
  include '../../Repeating-pages/topnav/topnav8-admin.php'
  ?>

</head>

<body>
  <div class="heading1"> Manager </div>
  <a href="NewManager.php" input type="button" value="button" class="button1"> Add New Manager </a>

  <!--------------------Side bar---------------------->
  <div class="sidebar close">

    <ul class="nav-links">

      <li>
        <a href="../admin_dashboard/admin_dashboard.php">
          <i class='bx bxs-dashboard'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
        </ul>
      </li>

      <li>
        <a href="../Adminprofile/Adminprofile.php">
          <i class='bx bxs-user'></i>
          <span class="link_name">My Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../Adminprofile/Adminprofile.php">My Profile</a></li>
        </ul>
      </li>


      <li>
     <a  href="../ManagerPageforAdmin/NewManager.php">
          <i class='bx bx-street-view'></i>
          <span class="link_name">Managers</span>
        </a>
        <ul class="sub-menu blank">
          <!-- <li><a class="link_name" href="../ManagerPageforAdmin/ManagerPageforAdmin.php">Managers</a></li> -->
          <li><a class="link_name" href="NewManager.php">Managers</a></li>
        </ul>
      </li>

      <li>
        <a href="../Adddeletecategory/adddelcategory.php">
          <i class='bx bxs-spreadsheet'></i>
          <span class="link_name">Categories</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../Adddeletecategory/adddelcategory.php">Categories</a></li>
        </ul>
      </li>

      <li>
        <a href="../category/category.php">
          <i class='bx bxs-user-check'></i>
          <span class="link_name">Registered Users</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../category/category.php">Registered Users</a></li>
        </ul>
      </li>

      <li>
        <a href="../Reportpage/reportpage.php">
          <i class='bx bxs-hand-right'></i>
          <span class="link_name">Complaints</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Complaints</a></li>
        </ul>
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

  <script src="../../Repeating-pages/sidenav/sidenavigation.js"></script>

  
        <image src="../../Images/manager.jpg" width="160px" height="160px" alt="profile image" class="profimg"></image>
        <button class="button3"> View Profile </button> 
        <button class="button2"> Remove </button> 

</body>

</html>