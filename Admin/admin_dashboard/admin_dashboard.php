
<?php
session_start();
if(isset($_SESSION['email'])){

  include '../../Backend/db_connection.php'; //check customer id or not
  $temp= $_SESSION['email']; 
  $sql = "SELECT email FROM admin WHERE email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){ 
?>

<html lang="en" dir="ltr"></html>
    <title> New Manager </title>

    <head> 

    <?php
      $result = require 'all_dash.php';
    ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
        <link rel="stylesheet" href="admin_dashboard.css"> 
        <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
         <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'><!------------side nav icons----->
        
        <?php 
          include '../../Repeating-pages/topnav/topnav8-admin.php'
        ?>

    </head>

    <body>
        <div class ="heading1" >  </div>
           
          <!--------------------Side bar---------------------->
            <div class="sidebar close">

                <ul class="nav-links">

                <li>
                    <a href="../admin_dashboard/admin_dashboard.php">
                      <i class='bx bxs-dashboard' ></i>
                      <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
                    </ul>
                  </li>

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
                  <a  href="../ManagerPageforAdmin/NewManager.php">
                      <i class='bx bx-street-view' ></i>
                      <span class="link_name">Managers</span>
                    </a>
                    <ul class="sub-menu blank">
                      <!-- <li><a class="link_name" href="../ManagerPageforAdmin/ManagerPageforAdmin.php">Managers</a></li> -->
                      <li><a class="link_name" href="../ManagerPageforAdmin/NewManager.php">Managers</a></li>
                    </ul>
                  </li>
            
                  <li>
                    <a href="../Adddeletecategory/adddelcategory.php">
                      <i class='bx bxs-spreadsheet' ></i>
                      <span class="link_name">Categories</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../Adddeletecategory/adddelcategory.php">Categories</a></li>
                    </ul>
                  </li>

                  <li>
                    <a href="../category/category.php">
                      <i class='bx bxs-user-check' ></i>
                      <span class="link_name">Registered Users</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../category/category.php">Registered Users</a></li>
                    </ul>
                  </li>
            
                  <li>
                    <a href="../Reportpage/reportpage.php">
                      <i class='bx bxs-hand-right' ></i>
                      <span class="link_name">Complaints</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="#">Complaints</a></li>
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


<!----------------Dashboard------------------------------->
<div class="heading1"> Dashboard </div> </br>

<div class="tile-line">
  <div class="row1">
    <div class="dash-card" id="card1">
      <h1>Complaints Count</h1>
      <h3> 28 </h3>
      <img src="../../Images/complain.png" alt="">
    </div>
  
    <div class="dash-card" id="card2">
      <h1>Workers Count</h1>
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




<!------------------- Mnagers table-------------------->
<div class ="heading1"> Managers </div>
        <div class= "container"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>NIC</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php
            while ($rows = mysqli_fetch_array($result)){
                echo "<tr>
                    <td>".$rows['name']."</td>
                    <td>".$rows['contact_No']."</td>
                    <td>".$rows['email']."</td>
                    <td>".$rows['NIC']."</td>
                    
                </tr>";
            }
          ?>
                    
                </tbody>
            </table> 
    </div> 

    

    <!---------------------Added categories------------------>
    <div class ="heading1" > Added categories </div>
    <div class= "container"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Added Date</th>
                    </tr>
                </thead>
                <tbody>

                  <tr>
                      <td> Pottery </td>
                      <td> <img src="../../Images/category/waiter.png" class="image"> </td>
                      <td> 10/10/2021 </td>
                  </tr>
                
                    <?php
            // while ($rows = mysqli_fetch_array($result)){
            //     echo "<tr>
            //         <td>".$rows['name']."</td>
            //         <td>".$rows['contact_No']."</td>
            //         <td>".$rows['email']."</td>
            //         <td>".$rows['NIC']."</td>
                    
            //     </tr>";
            // }
          ?>
                    
                </tbody>
            </table>
    </div> </br>

     <!---------------------Deleted categories------------------>
     <div class ="heading1" > Deleted categories </div>
    <div class= "container"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Deleted Date</th>
                    </tr>
                </thead>
                <tbody>

                  <tr>
                      <td> Lanscaping </td>
                      <td> <img src="../../Images/category/planting.png" class="image"> </td>
                      <td> 18/09/2021 </td>
                  </tr>
                
                    <?php
            // while ($rows = mysqli_fetch_array($result)){
            //     echo "<tr>
            //         <td>".$rows['name']."</td>
            //         <td>".$rows['contact_No']."</td>
            //         <td>".$rows['email']."</td>
            //         <td>".$rows['NIC']."</td>
                    
            //     </tr>";
            // }
          ?>
                    
                </tbody>
            </table>
    </div> </br>



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
   