<?php include("../home/topnav.php"); ?>

<?php include("../home/worker_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<a href="#my-profile" class="top-button3" style="margin-top: -41em; margin-right: 26.8em;"> My Profile </a>
<a href="#change-password" class="top-button1" style="margin-top: -41em; margin-right: 14em;"> Change Password </a>
<a href="#my-service" class="top-button2" style="margin-top: -41em;"> My Service </a>

<!------------------profile edit------------------------>
<div class="category" id="my-profile" style="margin-top: -14em;"> <p> My Profile </p> </div>

<img src="../../../public/img/w3.jpg" style="border-radius: 200px; height:160px; width: 160px; margin-left:55%">

<div class="form-space">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Worker Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="nic" placeholder=" your email" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Contact Number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Your Address" required>
            </div>
        </div>
        </br>
        <div class="row">
            <input type="submit" value="Update" class="green-button">
        </div>
    </form>
</div>

<!----------------Change Password--------------------------------------->
<div class="heading" id="change-password"> <p> Change Password </p> </div>

<div class="form-space">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
            <label for="password">Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="new-password">New Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="new-password" name="new-password" placeholder="Enter New Password" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="confirm-password">Confirm Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Renter New Password" required>
            </div>
        </div>
        </br>
        <div class="row">
            <input type="submit" value="Change Password" class="green-button">
        </div>
    </form>
</div>

<!-----------------------------------Edit Service------------------------------------------------>

<div class="heading" id="change-password"> <p> My Service </p> </div>

<div class="form-space">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
            <label for="cat-1">Category</label>
            </div>
            <div class="col-75">
            <select>
                <option value="0">Plumbers</option>
                <option value="1">Masons</option>
                <option value="2">Tile</option>
                <option value="3">Carpenters</option>
                <option value="4">Painters</option>
                <option value="5">Electricians</option>
                <option value="6">Landscape</option>
                <option value="7">Worker</option>
                <option value="8">Professionals</option>
                <option value="9">Truck</option>
                <option value="10">Concrete slab</option>
                <option value="11">Equipment repairing</option>
                <option value="12">A/C</option>
                <option value="13">Welding</option>
                <option value="14">Cooking</option>
                <option value="15">Cushions</option>
                <option value="16">Vehicle Repairs</option>
                <option value="17">Cleaners</option>
                <option value="18">CCTV</option>
                <option value="19">Ceiling</option>
                <option value="20">Well</option>
                <option value="21">Chairs</option>
                <option value="22">Rent-tools</option>
                <option value="23">Curtains</option>
                <option value="24">Solar</option>
                <option value="25">Demolition</option>
                <option value="26">Pest</option>
                <option value="27">Mug designer</option>
                <option value="28">Movers</option>
                <option value="29">Aluminium</option>
                <option value="30">Catering</option>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-district">Working Districts</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-district" name="wo-district" placeholder="Your Disricts" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-city">Working Cities</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-city" name="wo-city" placeholder="Your Cities" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="qualification">Qualification</label>
            </div>
            <div class="col-75">
            <input type="file" id="qualification" name="qualification" style="background-color: white" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
            <label for="experience">Experiences(Years)</label>
            </div>
            <div class="col-75">
            <input type="number" id="experience" name="experience" placeholder="Enter Your Experience Years" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="hour">Working Hours</label>
            </div>
            <div class="col-75">
            <input type="number" id="hour" name="hour" placeholder="Enter Your Working Hours" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="call">Best Time To Call</label>
            </div>
            <div class="col-75">
            <input type="time" id="call" name="call" placeholder="Enter Your Best Time" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-days">Working Days</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-days" name="wo-days" placeholder="Enter Your Working Days" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="past">Past Experience</label>
            </div>
            <div class="col-75">
            <input type="image" id="past" name="past" style="background-color: white" required>
            </div>
        </div>

        </br>
        <div class="row">
            <input type="submit" value="Update" class="green-button">
        </div>
    </form>
</div>

</br> </br>
<input type="reset" value="Delete Account" class="pink-button" style="float: right; margin-right:13.2em;"> 
<a href=# style="margin-left:90%; margin-top: -60%;"><i class="fas fa-angle-double-up"></i></a>


<?php include("../home/footer.php"); ?>