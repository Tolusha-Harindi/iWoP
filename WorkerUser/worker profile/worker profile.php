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
    <link rel="stylesheet" href="worker-profile.css">
     <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> <!--upload icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!--footer icons-->
    <title>Worker Profile</title>
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
       <h1 class="heading">Profile</h1>
       <div class="main-container">
          <div class="mainbox">
              <img src="../images/profile.jpg">
          </div>
          <div class="mainbox-side">
            <form action="worker profile.php">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>
              <br/><br/><br/><br/>
              <label for="address">Address</label>
              <input type="text" id="address" name="address" required>
              <br/><br/><br/><br/>
              <label for="district">District</label>
              <input type="text" id="district" name="district" required>
              <br/><br/><br/><br/>
              <label for="city">City</label>
              <input type="text" id="city" name="city" required>
              <br/><br/><br/><br/>
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required>
              <br/><br/><br/><br/>
              <label for="num1">Contact No 1</label>
              <input type="text" id="num1" name="num1" required>
              <br/><br/><br/><br/>
              <label for="num2">Contact No 2</label>
              <input type="text" id="num2" name="num2" required>
              <br/><br/><br/><br/>
              <label for="nic">NIC No</label>
              <input type="text" id="nic" name="nic" required>
              <br/><br/><br/><br/>
              <label for="copy">Scan Copy of NIC</label></br>
              <div class="one">
                 <input type="file" id="front" name="front" placeholder="Front Copy" hidden required>
                 <!--<i class="fas fa-file-upload"></i>-->
              </div>
              <div class="two">
                 <input type="file" id="back" name="back" placeholder="Back Copy" hidden required>
                 <!--<i class="fas fa-file-upload"></i>-->
              </div>
              <br/><br/><br/><br/>
               <button class="btn1">Update</button>
               <button class="btn2" onclick="">Delete </button>
            </form>
          </div>
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