
<?php
session_start();
if(isset($_SESSION['email'])){

  include '../../Backend/db_connection.php'; //check customer id or not
  $temp= $_SESSION['email']; 
  $sql = "SELECT email FROM customer WHERE email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){ 
?>


<html lang="en" dir="ltr"></html>
    <title> New Manager </title>

    <head> 

   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
        <link rel="stylesheet" href="customer_dashboard.css"> 
        <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
         <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'><!------------side nav icons----->
        
        <?php 
          include '../../Repeating-pages/topnav/topnav2-customer.php'
        ?>

    </head>

    <body>
    </br> </br> </br> </br> </br> </br>
    <!-----------------------------------Side navigation--------------------------------------------->
    <div class="sidebar close">

<ul class="nav-links">
<li>
    <a href="../CustomerProfile/customerprofile.php">
    <i class='bx bxs-user' ></i>
    <span class="link_name">My Profile</span>
    </a>
    <ul class="sub-menu blank">
    <li><a class="link_name" href="../CustomerProfile/customerprofile.php">My Profile</a></li>
    </ul>
</li>

<li>
    <a href="../customer_dashboard/customer_dashboard.php">
    <i class='bx bxs-dashboard' ></i>
    <span class="link_name">Dashboard</span>
    </a>
    <ul class="sub-menu blank">
    <li><a class="link_name" href="../customer_dashboard/customer_dashboard.php">Dashboard</a></li>
    </ul>
</li>

<li>
    <a href="../Wantedads/wantedads.php">
    <i class='bx bxs-image' ></i>
    <span class="link_name">Post Your Ads</span>
    </a>
    <ul class="sub-menu blank">
    <li><a class="link_name" href="../Wantedads/wantedads.php">Post Your Ads</a></li>
    </ul>
</li>

<li>
    <div class="iocn-link">
    <a href="#">
        <i class= 'bx bxs-share'></i>
        <span class="link_name">Responses</span>
    </a>
    <i class='bx bxs-chevron-down arrow' ></i>
    </div>
    <ul class="sub-menu">
    <li><a class="link_name" href="#">Responses</a></li>
    <li><a href="../ResponsesByWorkers/ResponsesbyWorkers.php">Job invite Requests</a></li>
    <li><a href="../ApplyforJob-Responses/ApplyforJob-customerview.php">Posted Ads</a></li>
    <!-- <li><a href="#">PHP & MySQL</a></li>-->
    </ul>
</li>
<li>
    <a href="../RecentWorkers/RecentWorkers.php">
    <i class= 'bx bxs-group'></i>
    <span class="link_name">Recent Workers</span>
    </a>
    <ul class="sub-menu blank">
    <li><a class="link_name" href="../RecentWorkers/RecentWorkers.php">Recent Workers</a></li>
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

<script src="../../Repeating-pages/sidenav/sidenavigation.js"></script>

<!--------------------------End of side nav------------------------------------->


<!----------------Dashboard------------------------------->

<div class="heading1">  </div> 
 

<div class="heading1">  Dashboard</div> </br>

    <div class="tile-line">
      <div class="row1">
        <div class="dash-card" id="card1">
          <h1>Responses Count for Ads</h1>
          <h3> 8 </h3>
          <img src="../../Images/complain.png" alt="">
        </div>
      
        <div class="dash-card" id="card2">
          <h1>Accepted count by workers</h1>
          <h3> 255 </h3>
          <img src="../../Images/worker.png" alt="">
        </div>
      </div>

      <div class="row2">
        <div class="dash-card" id="card3">
          <h1>Customers Count</h1>
          <h3> 208 </h3>
          <img src="../../Images/customer.png" alt="">
        </div>
      
        <div class="dash-card" id="card4">
          <h1>Company Count</h1>
          <h3> 150 </h3>
          <img src="../../Images/company.png" alt="">
        </div>
      </div> </br> </br>

      <div class="row3"> 
        <div class="dash-card" id="card5">
          <h1> Posted Ads</h1>
          <h3> 28 </h3>
          <img src="../../Images/ads1.png" alt="">
        </div>
      
        <div class="dash-card" id="card6">
          <h1> Deleted Ads</h1>
          <h3> 30 </h3>
          <img src="../../Images/trash-bin.png" alt="">
        </div>
      </div>
    </div>
    <!-- <div class="tiles">
      <div class="box3"> 
        <div class="dash-card">
          <h1>Pending Stock</h1>
          <img src="/img/icons/stock.png" alt="">
        </div>
      </div>
      <div class="box4"> 
        <div class="dash-card">
          <h1>Pending Requests</h1>
          <img src="/img/icons/offer.png" alt="">
    </div>
  </div>
  <div class="box5"> 
    <div class="dash-card">
        <h1>Reports</h1>
        <img src="/img/icons/earn.png" alt="">
    </div>
  </div>
</div> -->



    </body>

    </html>

    <?php 
  }
  else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>'; //redirect to previous page
    exit();
  }
 
  
}


    else{
        header('location:../../Login/Login.php');
        exit();
    }
?>
   