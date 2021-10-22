
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
                      <a href="../Adminprofile/Adminprofile.php">
                          <i class='bx bxs-user' ></i>
                          <span class="link_name">My Profile</span>
                      </a>
                      <ul class="sub-menu blank">
                          <li><a class="link_name" href="../Adminprofile/Adminprofile.php">My Profile</a></li>
                      </ul>
                  </li>


                  <li>
                    <a href="../admin_dashboard/admin_dashboard.php">
                      <i class='bx bx-plus' ></i>
                      <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
                    </ul>
                  </li>
            
                  <li>
                    <a href="../ManagerPageforAdmin/ManagerPageforAdmin.php">
                      <i class='bx bx-street-view' ></i>
                      <span class="link_name">Managers</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../ManagerPageforAdmin/ManagerPageforAdmin.php">Managers</a></li>
                    </ul>
                  </li>
            
            
                  <li>
                    <a href="../Changepassword/changepwd.php">
                      <i class='bx bxs-check-shield' ></i>
                      <span class="link_name">Change Password</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../Changepassword/changepwd.php">Change Password</a></li>
                    </ul>
                  </li>
            
                  <li>
                    <a href="../Adddeletecategory/Adddelcategory.php">
                      <i class='bx bxs-spreadsheet' ></i>
                      <span class="link_name">Category</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../Adddeletecategory/Adddelcategory.php">Category</a></li>
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
<b class="dashboard"> Dashboard </b> </br>

<div class="box3">  <div class="txt5"> Category Count </div> </div>
<div class="box4"> <div class="txt6"> Complaints </div>  </div>
<div class="box5">  </div>



<!------------------- Mnagers table-------------------->
<div class ="heading1" > Managers </div>
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



    </body>

    </html>
   