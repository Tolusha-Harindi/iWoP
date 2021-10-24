<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->  
    <link rel="stylesheet" href="../navigation bar/topnavigation.css"> 
    <link rel="stylesheet" href="my-service.css">
    <link rel="stylesheet" href="../navigation bar/sidenavigation.css"> 
    <link rel="stylesheet" href="../navigation bar/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   
    <title>My Service</title>
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
        <li><a class="link_name" href="../bank-edit/bank-edit.php">Bank Details</a></li>
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
      <h2>Service</h2>
      <div class="main-container">
         <div class="category">
            <img src="../images/categories.png">
         </div>
         <div class="select-c1">
            <label> Selected Category 1 <span style="color:red">*</span></label><br/>
            <select>
               <option value="0">1.</option>
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

         <div class="select-c1">
            <label> Selected Category 2 <span style="color:red">*</span></label><br/>
            <select>
               <option value="0">2.</option>
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

         <div class="select-c1">
            <label> Selected Category 3 <span style="color:red">*</span></label><br/>
            <select>
               <option value="0">3.</option>
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

          <div class="select-c1">
            <label> Selected Category 4 <span style="color:red">*</span></label><br/>
            <select>
               <option value="0">4.</option>
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

          <div class="select-c1">
            <label> Selected Category 5 <span style="color:red">*</span></label><br/>
              <select>
                <option value="0">5.</option>
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

         <div class="area">
            <p><b>Working Areas</b> <span style="color:red">*</span></p>
            <div class="select-c1">
              <label> Working Districts <span style="color:red">*</span></label><br/>
              <select style="width:500px; height:40px;">
                <option value="0">Districts</option>
                <option value="1">Anuradhapura</option>
                <option value="2">Ampara</option>
                <option value="3">Batticaloa</option>
                <option value="4">Badulla</option>
                <option value="5">Colombo</option>
                <option value="6">Gampaha</option>
                <option value="7">Galle</option>
                <option value="8">Hambanthota</option>
                <option value="9">Jaffna</option>
                <option value="10">Kalutara</option>
                <option value="11">Kandy</option>
                <option value="12">Kilinochchi</option>
                <option value="13">Kurunegala</option>
                <option value="14">Kegalle</option>
                <option value="15">Matale</option>
                <option value="16">Matara</option>
                <option value="17">Mannar</option>
                <option value="18">Mulathivu</option>
                <option value="19">Monaragala</option>
                <option value="20">Nuwera-Eliya</option>
                <option value="21">Puttalam</option>
                <option value="22">Polonnaruwa</option>
                <option value="23">Rathnapura</option>
                <option value="24">Trincomalee</option>
                <option value="25">Vavuniya</option>
              </select>
            </div>

            <div class="select-c1">
              <label> Working Cities <span style="color:red">*</span></label><br/>
              <select style="width:500px; height:40px;">
                <option value="0">Cities</option>
                <option value="1">Anuradhapura</option>
                <option value="2">Ampara</option>
                <option value="3">Batticaloa</option>
                <option value="4">Badulla</option>
                <option value="5">Colombo</option>
                <option value="6">Gampaha</option>
                <option value="7">Galle</option>
                <option value="8">Hambanthota</option>
                <option value="9">Jaffna</option>
                <option value="10">Kalutara</option>
                <option value="11">Kandy</option>
                <option value="12">Kilinochchi</option>
                <option value="13">Kurunegala</option>
                <option value="14">Kegalle</option>
                <option value="15">Matale</option>
                <option value="16">Matara</option>
                <option value="17">Mannar</option>
                <option value="18">Mulathivu</option>
                <option value="19">Monaragala</option>
                <option value="20">Nuwera-Eliya</option>
                <option value="21">Puttalam</option>
                <option value="22">Polonnaruwa</option>
                <option value="23">Rathnapura</option>
                <option value="24">Trincomalee</option>
                <option value="25">Vavuniya</option>
              </select>
            </div>
         </div>

         <div class="verification">
            <p><b>Verification</b> <span style="color:red">*</span></p>
            <div class="select-2">
              <label>Qualifications </label><br/>
              <input type="file" name="quali">
            </div>
            <div class="select-2">
              <label>GS Certificate </label><br/>
              <input type="file" name="certi">
            </div>
         </div>

         <div class="time">
            <p><b>Working Details</b> <span style="color:red">*</span></p>
            <div class="t1">
              <label>Experience (Years)</label><br/>
              <input type="number" name="year">
            </div>
            <div class="t2">
              <label>Working Hours</label><br/>
              <input type="number" name="hour" min="1" max="24">
            </div>
            <div class="t3">
              <label>Best time to call</label><br/>
              <select>
                <option value="0"></option>
                <option value="1">Anuradhapura</option>
                <option value="2">Ampara</option>
                <option value="3">Batticaloa</option>
                <option value="4">Badulla</option>
                <option value="5">Colombo</option>
                <option value="6">Gampaha</option>
                <option value="7">Galle</option>
                <option value="8">Hambanthota</option>
                <option value="9">Jaffna</option>
                <option value="10">Kalutara</option>
                <option value="11">Kandy</option>
                <option value="12">Kilinochchi</option>
                <option value="13">Kurunegala</option>
                <option value="14">Kegalle</option>
                <option value="15">Matale</option>
                <option value="16">Matara</option>
                <option value="17">Mannar</option>
                <option value="18">Mulathivu</option>
                <option value="19">Monaragala</option>
                <option value="20">Nuwera-Eliya</option>
                <option value="21">Puttalam</option>
                <option value="22">Polonnaruwa</option>
                <option value="23">Rathnapura</option>
                <option value="24">Trincomalee</option>
                <option value="25">Vavuniya</option>
              </select>
            </div>
         </div>

         <div class="days">
            <p style="color:#082690"><b>Working Details</b> <span style="color:red">*</span></p>
            <div class="c1">
              <input type="checkbox" name="mon">
              <label>Monday</label>
            </div>
            <div class="c2">
              <input type="checkbox" name="tues">
              <label>Tuesday</label>
            </div>
            <div class="c3">
              <input type="checkbox" name="wed">
              <label>Wednesday</label>
            </div>
            <div class="c4">
              <input type="checkbox" name="thurs">
              <label>Thursday</label>
            </div>
            <div class="c5">
              <input type="checkbox" name="fri">
              <label>Friday</label>
            </div>
            <div class="c6">
              <input type="checkbox" name="sat">
              <label>Saturday</label>
            </div>
            <div class="c7">
              <input type="checkbox" name="sun">
              <label>Sunday</label>
            </div>
         </div>

         <div class="past">
             <label>Past Experience</label><br/>
             <input type="file" accept=" image/*" /><br/>
             <input type="file" accept=" video/*" />
         </div>

         <button class="add" type="submit">Add</button>
         <button class="edit" type="submit">Edit</button>

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