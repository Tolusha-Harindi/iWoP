<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="workerprof10.css">
     
     <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   
<?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
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
              <i class='bx bxs-collection' ></i>
              <span class="link_name">My Services</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">My Services</a></li>
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
              <span class="link_name">Posted Ads</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Posted Ads</a></li>
            </ul>
          </li>
    
          <li>
            <a href="#">
              <i class='bx bxs-user-check' ></i>
              <span class="link_name">Job Vacancies</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Job Vacancies</a></li>
            </ul>
          </li>
    
           <li>
            <a href="#">
              <i class='bx bxs-bank' ></i>
              <span class="link_name">Bank Details</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Bank Details</a></li>
            </ul>
          </li>
    
          <li>
            <a href="#">
              <i class='bx bxs-calendar-event' ></i>
              <span class="link_name">Work Schedule</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Work Schedule</a></li>
            </ul>
          </li>
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
        <form action="" method="post">
            <img src="user.png" class="floatRight">
            <img src="camere.png" alt="camera" class="camera">
            <div class="inputDiv">
                <label class="inputLabel" for="name">Company Name</label>
                <input type="text" id="comname" name="companyname" required>
            </div>
            <div class="inputDiv">
                <label class="inputLabel" for="address">Company Owner Name</label>
                <input type="text" id="address" name="comowner" required>
            </div>

            <div class="inputDiv">
                <label class="inputLabel" for="district">Company Registered Number</label>
                <input type="text" id="district" name="comregnumber">
            </div>

            <div class="inputDiv">
                <label class="inputLabel" for="city">Address</label>
                <input type="text" id="city" name="address">
            </div>

            <div class="inputDiv">
                <label class="inputLabel" for="city">Email</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="inputDiv">
                <label class="inputLabel" for="city">Contact No1</label>
                <input type="tel" id="contactno1" name="contactno1">
            </div>

            <div class="inputDiv">
                <label class="inputLabel" for="city">GS certificate</label>
                <input type="file" id="img1" name="img" accept="image/*">
            </div>

            <div class="inputDiv">
                <label class="inputLabel" for="city">Company Registered  Certificate</label>
                <input type="file" id="img1" name="img2" accept="image/*">
            </div>


            
            


                <button type="submit" id="submitButton" onclick="validateSignupForm()" class="update">
                    <span>Save</span>
                </button>
               



    </form>
   </div>
</div>
</div>
</body>
</html>