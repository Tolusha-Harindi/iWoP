<?php include("../home/topnav.php"); ?>

<?php include("../home/worker_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<div class="category" id="my-profile"> <p> My Profile </p> </div>

<img src="../../../public/img/w3.jpg" style="border-radius: 200px; height:160px; width: 160px; margin-left:55%">

<div class="form-space">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Enter Your Contact Number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter Your address" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="district">District</label>
            </div>
            <div class="col-75">
            <input type="text" id="district" name="district" placeholder="Enter Your District" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="city">City</label>
            </div>
            <div class="col-75">
            <input type="text" id="city" name="city" placeholder="Enter Your City" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="nic">NIC Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="nic" name="nic" placeholder="Enter Your NIC Number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="scan-copy">Scan Copy Of NIC</label>
            </div>
            <div class="col-75">
            <label for="front" style="margin-left: 0">Front Side</label><br/>
            <input type="file" id="front" name="front" required style="background-color: white">
            </div>
            <div class="col-75" style="margin-left: 180px; margin-top: 0.8em;">
            <label for="back" style="margin-left: 0">Back Side</label></br>
            <input type="file" id="back" name="back" required style="background-color: white">
            </div>
        </div>

        </br>
        <div class="row">
            <input type="submit" value="Save" class="green-button">
        </div>
    </form>
</div>


<?php include("../home/footer.php"); ?>