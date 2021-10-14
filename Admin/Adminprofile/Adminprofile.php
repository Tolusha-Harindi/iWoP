<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminprof11.css">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
   <?php
        include '../../Repeating-pages/topnav/topnav4-company.php'
    ?>
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
<div class="box2">
<div class="mainDiv">
    <div class="cardStyle">
        <form action="" method="post">
            <img src="user.png" class="userimg">
            <img src="camere.png" alt="camera" class="camera">
            <div class="inputDiv">
                <label class="inputLabel" for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

           <div class="inputDiv">
                <label class="inputLabel" for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>

            <button type="submit" id="submitButton" onclick="validateSignupForm()" class="update">
                <span>Update details</span>

            </button>



        </form>
    </div>
</div>

</div>
</body>
</html>