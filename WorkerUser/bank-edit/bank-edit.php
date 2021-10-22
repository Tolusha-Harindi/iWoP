<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
    <link rel="stylesheet" href="../navigation bar/sidenavigation.css">  
    <link rel="stylesheet" href="../navigation bar/topnavigation.css"> 
    <link rel="stylesheet" href="../navigation bar/footer.css">
    <link rel="stylesheet" href="bank-edit.css">
     <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!--footer icons-->
    <title>Bank Edit page</title>
</head>
<body>
   <div class="sticky">
   <div class="topnav">
        <div class="logo">
        <input type="image" id="image" alt="Landing" src="../images/logo.jpg">
        </div>
		<a href="../../Login/Logout.php"> <b>| Logout </b></a>
        <a href="../../Customer/FAQ/FAQ.php"> <b>| Help  </b></a> 
        <a href="../../Unregistered-user/Allcategories/categories.php"><b> | Category </b></a> 
        <a href="../payment/payment.php"> <b>| Payment </b></a>
        <a href="../all ads/all ads.php"> <b>| All Adds </b></a>
        <a href="../worker profile/worker profile.php"> <img src="../images/profile.jpg" class="prof"></a>
    </div>
   </div>

    <div class="sidebar close">
    <ul class="nav-links">
    <li>
        <a href="../worker profile/worker profile.php">
        <i class='bx bxs-user' ></i>
        <span class="link_name">My Profile</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="../worker profile/worker profile.php">My Profile</a></li>
        </ul>
    </li>

    <li>
        <a href="../my service/my-service.php">
        <i class='bx bxs-collection' ></i>
        <span class="link_name">My Service</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="../my service/my-service.php">My Service</a></li>
        </ul>
    </li>

    <li>
        <a href="../change password/change-password.php">
        <i class='bx bxs-check-shield' ></i>
        <span class="link_name">Change Password</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="../change password/change-password.php">Change Password</a></li>
        </ul>
    </li>

    <li>
        <a href="../all ads/all ads.php">
        <i class='bx bxs-image' ></i>
        <span class="link_name">Posted Ads</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="../all ads/all ads.php">Posted Ads</a></li>
        </ul>
    </li>

    <li>
        <a href="../job page- worker view/job page-worker view.php">
        <i class='bx bxs-user-check' ></i>
        <span class="link_name">Job Vaccancies</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="../job page- worker view/job page-worker view.php">Job Vaccancies</a></li>
        </ul>
    </li>

    <li>
        <a href="../bank-edit/bank-edit.php">
        <i class='bx bxs-bank' ></i>
        <span class="link_name">Bank Details</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Bank Details</a></li>
        </ul>
    </li>

    <li>
        <a href="../shedule/schedule.php">
        <i class='bx bxs-calendar-event' ></i>
        <span class="link_name">Work Schedule</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="../shedule/schedule.php">Work Schedule</a></li>
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

   <div class="flex-container">
       <h1 class="heading">Bank Details</h1>
       <div class="main-container">
          <form method="POST">
             <div class="item">
                <label for="fname">Full Name</label>
              </div>
              <div class="input">
                <input type="text" id="fname" name="fname" required>
              </div>
              <div class="item">
                <label for="bname">Bank Name</label>
              </div>
              <div class="input">
                <input type="text" id="bname" name="bname" required>
              </div>
              <div class="item">
                <label for="branch">Bank Branch</label>
              </div>
              <div class="input">
                <input type="text" id="branch" name="branch" required>
              </div>
              <div class="item">
                <label for="code">Bank Code</label>
              </div>
              <div class="input">
                <input type="number" id="code" name="code" required>
              </div>
              <div class="item">
                <label for="num">Account No</label>
              </div>
              <div class="input">
                <input type="number" id="num" name="num" required>
             </div>
             <button class="btn" name="update">Update</button>
          </form>
       </div>
   </div>

   <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="footer-col">
                  <h4>How to add services</h4>
                  <ul>
                      <li><a href="#">How to add my services</a></li>
                      <li><a href="#">How to select categories</a></li>
                      <li><a href="#">Banner Advertising </a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>Help & Support</h4>
                  <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Contact Us</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>About Us</h4>
                  <ul>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Terms & condition</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                  </ul>
                  </div>
              <div class="footer-col">
                  <h4>Connect With Us</h4>
                     <div class="social-links">
                      <a href="#"><i class="fab fa-facebook"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                     </div>
              </div>
          </div>

      </div>

  </footer>

    <script src="../navigation bar/sidenavigation.js"></script>


</body>
</html>