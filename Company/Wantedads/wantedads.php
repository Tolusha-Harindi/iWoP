<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Post ads</title>
    <link rel="stylesheet" href="wantedadscss.css">
   <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
<link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

   <!--------------------------Top nav----------------------------------------->

    <?php
        include '../../Repeating-pages/topnav/topnav4-company.php';
        // view posted ads as results
        $result = require 'all-wantedads.php';
        
    ?>


</head>
<body>

<div class="heading1"> Post your Ads</div>
<div class="box1">

    <!-----------------------------------Side navigation--------------------------------------------->

    <div class="sidebar close">
              
         <ul class="nav-links">

                 <li>
                        <a href="../CompanyDashboard/Companydashboard.php">
                           <i class='bx bxs-dashboard'></i>
                            <span class="link_name">Dashboard</span>
                       </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="../CompanyDashboard/Companydashboard.php">Dashboard</a></li>
                        </ul>
                 </li>


                <li>
                  <a href="../CompanyProfile/Companyprofile.php">
                    <i class='bx bxs-user' ></i>
                    <span class="link_name">My Profile</span>
                  </a>
                  <ul class="sub-menu blank">
                    <li><a class="link_name" href="../CompanyProfile/Companyprofile.php">My Profile</a></li>
                  </ul>
                </li>
          
                
                <li>
                  <a href="../Change password/Company change password.php">
                    <i class='bx bxs-check-shield' ></i>
                    <span class="link_name">Change Password</span>
                  </a>
                  <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Change password/Company change password.php">Change Password</a></li>
                  </ul>
                </li>
          
                <li>
                  <a href="../Wantedads/wantedads.php">
                    <i class='bx bxs-image' ></i>
                    <span class="link_name">Post your Ads</span>
                  </a>
                  <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Wantedads/wantedads.php">Post your Ads</a></li>
                  </ul>
                </li>
          
                <li>
                  <a href="../ApplyforJob-Responses/ApplyforJob-companyview.php">
                    <i class='bx bxs-share' ></i>
                    <span class="link_name">Responses</span>
                  </a>
                  <ul class="sub-menu blank">
                    <li><a class="link_name" href="../ApplyforJob-Responses/ApplyforJob-companyview.php">Responses</a></li>
                  </ul>
                </li>
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
        
    <script >
   let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
    });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
});
</script>
</div>
<div class="box2">


    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'NewAd')" >Post a New Ad</button>
        <button class="tablinks" onclick="openCity(event, 'Posted')">Posted Ads</button>

    </div>


        <!----------------------------Form - Post a ad------------------------------------->
    <div id="NewAd" class="tabcontent">
        <div class="mainDiv">
            <div class="cardStyle">
                <form action="wanted_ads.php" method="post" name="signupForm" id="signupForm">

                    <h2 class="formTitle">
                        Post your Ads
                    </h2>
                    <div class="inputDiv">
                        <label class="inputLabel" for="category">Category</label>
                        <select name="category" id="lang" >
                            <option value="Plumber">Plumber</option>
                            <option value="Masons">Masons</option>
                            <option value="Tile">Tile</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Painter">Painter</option>
                            <option value="Electrician">Electrician</option>
                            <option value="Landscaping">Landscaping</option>
                            <option value="Contractors">  Contractors</option>
                            <option value="Professionals">  Professionals</option>
                            <option value="Stones/Sand/soil"> Stones/Sand/soil</option>
                            <option value="Concrete slab">Concrete slab</option>
                            <option value="Equipment Repairing"> Equipment Repairing</option>
                            <option value="A/C"> A/C</option>
                            <option value="Welding"> Welding</option>
                            <option value="Cooking">Cooking</option>
                            <option value="Cushion works">Cushion works</option>
                            <option value="Vehicle repairs">Vehicle repairs</option>
                            <option value="Cleaners">Cleaners</option>
                            <option value="CCTV">CCTV</option>
                            <option value="Ceiling">Ceiling</option>
                            <option value="Well">Well</option>
                            <option value="Chair weavers"> Chair weavers</option>
                            <option value="Solar panel fixing">Solar panel fixing</option>
                            <option value="Demolishing"> Demolishing</option>
                            <option value=" Pest control"> Pest control</option>
                            <option value="Mug Designer">Mug Designer</option>
                            <option value="Movers">Movers</option>
                            <option value="Aluminium"> Aluminium</option>
                            <option value="Catering">Catering</option>
                            <option value="Makeup Artists">Makeup Artists</option>
                            <option value=""></option>
                        </select>


                    </div>


                    <div class="inputDiv">
                        <label class="inputLabel" for="title">Title</label>
                        <input type="text" name="title" id="title"  required>
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="jobdescription">Job description</label>
                        <input type="text"name="job" id="jobdescription" required>
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="city">Nearest City or Town</label>
                        <input type="text" name="nearest_city" id="city" required>
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="phonenum">Phone Number</label>
                        <input type="tel" name="contact" id="phonenum" required>
                    </div>
                    <div class="inputDiv">
                        <label class="inputLabel" for="jobdescription">Starting Date</label>
                        <input type="date" name="startDate" id="start_date">
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="duedate">Due Date</label>
                        <input type="date"name="dueDate" id="duedate">
                    </div>
                    <div class="inputDiv">
                        <label class="inputLabel" for="numofworkers">Number of Workers</label>
                        <input type="number" name="noOfWorkers" id="no_of_workers" >
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="budget">Budget</label>
                        <input type="text"  datatype="currency" id="budget" name="budget" placeholder="Rs.">
                    </div>

                    <div class="buttonWrapper">
                        <button type="submit" name="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                            <span>Submit</span>

                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

   <!------ <div id="Posted" class="tabcontent">
        <img class="img" src="job.png" alt="job" width="100px" height="100px" style = "position:relative; left:350px; top:30px; right:100px" >
        <h2 class="anyads">You don't have any ads yet</h2>
        <h3 class="post">Click the "Post a New add" button to post your add</h3>
        <a href="wantedads.php" class="postButton"> Post a new Add</a>
    </div>  -------------------------------->


    <div id="Posted" class="tabcontent posted">
        
            <!---------------------------View posted ads deatils------------------------------->
            

             <?php
                    while($row=mysqli_fetch_array($result)){
            ?>
            <div class="box3">
                <div class="column">
                    <div class="txt1"> <?php echo $row['title'];?></div>
                    <div class="txt2"> <?php echo $row ['category']; ?></div>
                    <div class="txt2"><i><?php echo $row['job']; ?></i></div>
                </div>
                <div class="column">
                    <img src="../../Images/location-red.png" alt="location" class="location-red"> 
                    <div class="txt3"> <b> Posted by :</b> </div>
                </div>
                <div class="column">
                    <div class="txt4"> Dasun Peiris</div>
                    <div class="txt4"><?php echo $row['nearest_city']; ?></div>
                    <div class="txt4"> 2 weeks ago</div>
                </div>
                <div class="box4">
                    <div class="txt5"><?php echo $row['contact']; ?></div> 
                </div>
            </div> 
            <?php
                 }    
            ?> 

    <script src="tabs.js">

    </script>
</div>

</body>
</html>