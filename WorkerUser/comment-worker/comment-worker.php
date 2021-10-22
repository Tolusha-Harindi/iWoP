<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->  
    <link rel="stylesheet" href="../navigation bar/topnavigation.css"> 
    <link rel="stylesheet" href="comment-worker.css">
    <link rel="stylesheet" href="../navigation bar/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!--footer icons-->
    <title>Comment Page</title>
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

   <div class="flex-container">
     <div class="left">
       <div class="pic">
         <img src="../images/profile.jpg">
       </div>
       <h2>Krishnakanth Aathiran</h2><br/>
       <div class="icon">
          <img src="../images/location.png">
       </div>
     </div>
     <div class="vl"></div>
     <div class="right">
       <div class="heading">
          <label> Need a Electrician</label>
          <!--<input type"text" name="work">-->
        </div>
       <div class="apply">
         <div class="detail">
         </div>
         <button class="btn">Apply</button>
       </div>
       <div class="lb-1">
          <label><b> Category </b> </label>
          <input type="text" name="category">
       </div>
       <hr class="line1">
       <div class="lb-2">
          <div class="due">
             <label class="date1"><b>Due Date</b></label><br/><br/><br/><br/>
             <input type="date" name="due">
          </div>
          <div class="start">
             <label class="date2"><b>Starting Date</b></label><br/><br/><br/><br/>
             <input type="date" name="start">
          </div>
       </div>
       <hr class="line2">
       <div class="lb-3">
          <div class="dis">
             <label><b> Description </b> </label><br/><br/><br/><br/>
             <input type="text" name="description">
          </div>
          <div class="number">
             <label><b> Number of Workers </b> </label><br/><br/><br/><br/>
             <input type="number" name="number">
          </div>
       </div>
       <hr class="line2">
       <div class="lb-4">
         <label><b> Comment </b></label><br/><br/><br/><br/>
         <input type="text" name="comment" placeholder="write a comment......">
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
</body>
</html>