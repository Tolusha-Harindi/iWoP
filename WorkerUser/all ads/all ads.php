<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="all ads.css">
        <link rel="stylesheet" href="../navigation bar/topnavigation.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="../navigation bar/footer.css">
        <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><!--footer icon-->
    <script src="https://kit.fontawesome.com/8a31a46eb4.js" crossorigin="anonymous"></script>
    <title>All Wanted Ads</title>
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
      <!--<a href="../worker profile/worker profile.php"><img src="../images/Arrow.jpg"  height="20" width="25"></a>-->
      <a href="../worker profile/worker profile.php"><i class="fas fa-long-arrow-alt-left  fa-4x" style="color:white; margin-top:-35%;"></i></a>
      <h1>Ads</h1>
      <div class="left">
         <h3>Sort By Results</h3>
         <div class="drop1">
            <select>
                <option value="0"><b>All Categories</b></option>
                <option value="1">Plumber</option>
                <option value="2">Masons</option>
                <option value="3">Tile</option>
                <option value="4">Carpenter</option>
                <option value="5">Painters</option>
                <option value="6">Electricians</option>
                <option value="7">Landscaping</option>
                <option value="8">Contractors</option>
                <option value="9">Professionals</option>
                <option value="10">Stone/Sand/Soil</option>
                <option value="11">Concrete Slab</option>
                <option value="12">Equipment Repairing</option>
                <option value="13">A/C</option>
                <option value="14">Welding</option>
                <option value="15">Cooking</option>
                <option value="16">Cusion Works</option>
                <option value="17">Vehicle Repairs</option>
                <option value="18">Cleaners</option>
                <option value="19">CCTV</option>
                <option value="20">Ceiling</option>
                <option value="21">Well</option>
                <option value="22">Chair Weavers</option>
                <option value="23">Rent Tools</option>
                <option value="24">Curtains</option>
                <option value="25">Solar Panel fixing</option>
                <option value="26">Demolishing</option>
                <option value="27">Pest Control</option>
                <option value="28">Designer</option>
                <option value="29">Movers</option>
                <option value="30">Aluminium</option>
                <option value="31">Catering</option>
            </select>
         </div>
         <div class="drop2">
            <select>
                <option value="0"><b>Districts</b></option>
                <option value="1">Colombo</option>
                <option value="2">Kalutara</option>
                <option value="3">Galle</option>
                <option value="4">Kandy</option>
                <option value="5">Matara</option>
                <option value="6">Jaffna</option>
                <option value="7">Trincomalee</option>
                <option value="8">Batticallo</option>
                <option value="9">Anurathapura</option>
            </select>
         </div>
         <div class="drop3">
            <input type="date" name="deadline" placeholder="Deadline">
         </div>
         <button class="btn">Search</button>
      </div>

      <div class="right">
        <div class="mainbox">

          <div class="box1">
            <h2 style="color:blue; text-align:left; margin-left:2%;">Title</h2>
            <div style="margin-top: 2%; margin-bottom: 1%;">
               <img style="padding-right: 10px" src="../images/masons.png" alt="Masons" height="40px" width="45px" > <span> Mason </span>
            </div>
            <p><span style="font-weight:bold; margin-top:10px; padding-bottom: 25px;">Description :</span>  ......aaaaaa.......aaaaaaaaaaaaaaa..........aaaaaa....</p>
            <div class="eye">
              <a href="../customer profile- worker view/customer profile-worker view.php" style="text-decoration: none; color:black;"><i class="far fa-eye" style="padding:5px"></i>view</a>
            </div>
            <div class="com">
              <a href="../comment-worker/comment-worker.php" style="text-decoration: none; color:black;"><i class="far fa-comments" style="padding:5px"></i>comment</a>
            </div>
          </div>

          <div class="vl"></div>

          <div class="box2">
            <div class="loc">
              <i class="fas fa-map-marker-alt"></i> <b>Colombo</b>
            </div>
            <h3>Posted By: Kamal Perera</h3>
            <h3><b>2 Weeks ago </b></h3>
            <button> 0774572106</button>
          </div>
         
          <div class="box1">
            <h2 style="color:blue; text-align:left; margin-left:2%;">Title</h2>
            <div style="margin-top: 2%; margin-bottom: 1%;">
               <img style="padding-right: 10px" src="../images/masons.png" alt="Masons" height="40px" width="45px" > <span> Mason </span>
            </div>
            <p><span style="font-weight:bold; margin-top:10px; padding-bottom: 25px;">Description :</span>  ......aaaaaa.......aaaaaaaaaaaaaaa..........aaaaaa....</p>
            <div class="eye">
              <a href="../customer profile- worker view/customer profile-worker view.php" style="text-decoration: none; color:black;"><i class="far fa-eye" style="padding:5px"></i>view</a>
            </div>
            <div class="com">
              <a href="../comment-worker/comment-worker.php" style="text-decoration: none; color:black;"><i class="far fa-comments" style="padding:5px"></i>comment</a>
            </div>
          </div>

          <div class="vl"></div>

          <div class="box2">
            <div class="loc">
              <i class="fas fa-map-marker-alt"></i> <b>Colombo</b>
            </div>
            <h3>Posted By: Kamal Perera</h3>
            <h3><b>2 Weeks ago </b></h3>
            <button> 0774572106</button>
          </div>
        </div>
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