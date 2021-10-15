<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="wantedadscss.css">
   <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
<link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

   <!--------------------------Top nav----------------------------------------->
    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>


</head>
<body>

<div class="heading1"> Post your Ads</div>
<div class="box1">

     <!-----------------------------------Side navigation--------------------------------------------->
     <div class="sidebar close">

<ul class="nav-links">
<li>
    <a href="../CustomerProfile/customerprofile">
    <i class='bx bxs-user' ></i>
    <span class="link_name">My Profile</span>
    </a>
    <ul class="sub-menu blank">
    <li><a class="link_name" href="../CustomerProfile/customerprofile">My Profile</a></li>
    </ul>
</li>

<li>
    <a href="../Changepassword/changepassword.php">
    <i class='bx bxs-check-shield' ></i>
    <span class="link_name">Change Password</span>
    </a>
    <ul class="sub-menu blank">
    <li><a class="link_name" href="../Changepassword/changepassword.php">Change Password</a></li>
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

    <div id="NewAd" class="tabcontent">
        <div class="mainDiv">
            <div class="cardStyle">
                <form action="" method="post" name="signupForm" id="signupForm">

                    <h2 class="formTitle">
                        Post your Ads
                    </h2>
                    <div class="inputDiv">
                        <label class="inputLabel" for="category">Category</label>
                        <select name="deletecategory" id="lang" >
                            <option value="">Plumber</option>
                            <option value="">Masons</option>
                            <option value="">Tile</option>
                            <option value="">Carpenter</option>
                            <option value="">Painter</option>
                            <option value="">Electrician</option>
                            <option value="">Landscaping</option>
                            <option value="">  Contractors</option>
                            <option value="">  Professionals</option>
                            <option value=""> Stones/Sand/soil</option>
                            <option value="">Concrete slab</option>
                            <option value=""> Equipment Repairing</option>
                            <option value=""> A/C</option>
                            <option value=""> Welding</option>
                            <option value="">Cooking</option>
                            <option value="">Cushion works</option>
                            <option value="">Vehicle repairs</option>
                            <option value="">Cleaners</option>
                            <option value="">CCTV</option>
                            <option value="">Ceiling</option>
                            <option value="">Well</option>
                            <option value=""> Chair weavers</option>
                            <option value="">Solar panel fixing</option>
                            <option value=""> Demolishing</option>
                            <option value=""> Pest control</option>
                            <option value="">Mug Designer</option>
                            <option value="">Movers</option>
                            <option value=""> Aluminium</option>
                            <option value="">Catering</option>
                            <option value="">Makeup Artists</option>


                            <option value=""></option>
                        </select>


                    </div>


                    <div class="inputDiv">
                        <label class="inputLabel" for="title">Title</label>
                        <input type="text" id="title" name="title" required>
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="jobdescription">Job description</label>
                        <input type="text" id="jobdescription" name="jobdescription">
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="city">Nearest City or Town</label>
                        <input type="text" id="city" name="city">
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="phonenum">Phone Number</label>
                        <input type="tel" id="phonenum" name="phonenum>
                    </div>
                    <div class="inputDiv">
                        <label class="inputLabel" for="jobdescription">Starting Date</label>
                        <input type="date" id="sdate" name="sdate">
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="duedate">Due Date</label>
                        <input type="date" id="duedate" name="duedate">
                    </div>
                    <div class="inputDiv">
                        <label class="inputLabel" for="numofworkers">Number of Workers</label>
                        <input type="number" id="numofworkers" name="numofworkers">
                    </div>

                    <div class="inputDiv">
                        <label class="inputLabel" for="budget">Budget</label>
                        <input type="text"  datatype="currency" id="budget" name="budget" placeholder="Rs.">
                    </div>

                    <div class="buttonWrapper">
                        <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                            <span>Submit</span>

                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div id="Posted" class="tabcontent">
        <img class="img" src="job.png" alt="job" width="100px" height="100px" style = "position:relative; left:350px; top:30px; right:100px" >
        <h2 class="anyads">You don't have any ads yet</h2>
        <h3 class="post">Click the "Post a New add" button to post your add</h3>
        <button class="postButton"> Post a new Add</button>
    </div>


    <script src="tabs.js">

    </script>
</div>

</body>
</html>