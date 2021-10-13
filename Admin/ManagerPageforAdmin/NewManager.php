<html lang="en" dir="ltr"></html>
    <title> New Manager </title>

    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->
        <link rel="stylesheet" href="ManagerPageforAdmin.css"> 
        <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
         <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

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

              <div>
                <form name = "reg-w" onsubmit="return validation()" method="post">
                    <div class="reg-start">
                            <div class="info">
                                    <div class="group">
                                        <p class="field"> <b>Name</b></p>
                                        <input id="name" type="text" placeholder = "Name" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Contact Number</b></p>
                                        <input id="contact" type="tel" placeholder = "Contact Number" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>NIC Number</b></p>
                                        <input id="NIC" type="text" placeholder = "NIC Number" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Email</b> </p>
                                        <input id="email" type="email" placeholder = "Email" class="input" required>
                                    </div>
                                    <div class="group">
                                        <p class="field"> <b>Password</b></p>
                                        <input id="pass" type="password" placeholder= "Password" class="input" data-type="password" required>
                                    </div>
                                    
                        </div>
                    </div>
                </form>
              </div>

              <div>
                <input type="submit" value="Add" class="button4">
                <input type="button" value="Cancel" class="button5">
            </div> 
   
    </body>

    </html>