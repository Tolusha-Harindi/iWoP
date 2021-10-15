
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

        <div class="sticky">
          <div class="topnav">
              <div class="logo"> 
                  <input type="image" id="image" alt="Landing" src="../../Images/Logo.jpg">
              </div>
              <a href="../../Landing/Landing.html"> <b>| Logout  </b></a> 
              <a href="#help"> <b>| Help page  </b></a> 
              <a href="#category"><b> | Category </b></a> 
              <a href="#alladds"> <b>| All Adds </b></a> 
              <a href="#postadds"> <b>| Post Adds </b></a>
              <a href="#"><i class="fa fa-user-circle-o fa-2x"></i> </a>
            </div> 
      </div> 

    </head>

    <body>
        <div class ="heading1" > New Manager </div>
           
          <!--------------------Side bar---------------------->
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


<!------------------- Mnagers table-------------------->

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



    </body>

    </html>