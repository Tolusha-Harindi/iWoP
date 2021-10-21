﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->  
    <link rel="stylesheet" href="../navigation bar/topnavigation.css"> 
    <link rel="stylesheet" href="schedule.css">
    <link rel="stylesheet" href="../navigation bar/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><!--footer icon-->
     <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Work Schedule</title>
</head>
<body>
   <div class="sticky">
     <div class="topnav">
        <div class="logo">
        <input type="image" id="image" alt="Landing" src="../images/logo.jpg">
        </div>
		<a href="#logout"> <b>| Logout </b></a>
        <a href="#help"> <b>| Help  </b></a> 
        <a href="#category"><b> | Category </b></a> 
        <a href="../payment/payment.php"> <b>| Payment </b></a>
        <a href="../all ads/all ads.php"> <b>| All Adds </b></a>
        <a href="../worker profile/worker profile.php"> <img src="../images/profile.jpg" class="prof"></a>
     </div>
   </div>

   <div class="flex-container">
     <a href="../worker profile/worker profile.php"><img src="../images/Arrow.jpg"></a>
     <div class="left">
       <label class="got-work">No of works got</label><br/><br/>
       <input type="number" id="got-work">
       <br/><br/><br/><br/>
       <label class="pending">Pending works</label><br/></br>
       <input type="number" id="pending">
       <br/><br/><br/><br/>
       <label class="complete">Works completed</label><br/><br/>
       <input type="number" id="complete">
       <br/><br/><br/><br/>
       <button onclick="myFunction()">Pending Works</button>
       <script>
         function myFunction() {
           window.location.href="../pending work/pendingwork.php";  
         }
       </script>
     </div>

     <div class="center">
       <h3 class="heading">Scheduler</h3>
       <div class="mainbox">
         <img src="../images/scheduler.png">
       </div>
     </div>

     <div class="right">
       <h3 class="heading" style="font-size:27px">Requests</h3>
       <div class="subbox">
          <img src="../images/request.png"><br/>
          <img src="../images/request.png">
       </div>
       <button class="btn1">Accept</button>
       <button class="btn2">Reject</button>
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
</body>
</html>