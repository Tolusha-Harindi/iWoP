<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<a href="#my-profile" class="top-button1" style="margin-top: -36em; margin-left:78em;width:7em;"> My Profile </a>
<a href="#change-password" class="top-button2" style="margin-top: -36em;  margin-left:64em;"> Change Password </a>

<!------heading----------->
<div class="category" id="my-profile" style="margin-top: -12em;"> <p> My Profile </p> </div>

<img src="<?php echo URLROOT;?> /public/img/w3.jpg" style="border-radius: 200px; height:160px; width: 160px; margin-left:55%">

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
            <input type="email" id="email" name="nic" placeholder="Enter your email" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter address" required>
            </div>
        </div>
        </br>
        <div class="row">
            <input type="submit" value="Update" class="green-button">
        </div>
    </form>
</div>

<!-----------------------------------Change Password--------------------------------------->
<div class="heading" id="change-password"> <p> Change Password </p> </div>

<div class="form-space">
    <form action="<?php echo URLROOT; ?> /customers/customer_profile" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="password">Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="cpassword" name="cpassword" placeholder="Current Password">
            
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['cpasswordError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="new-password">New Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="new-password" name="new-password" placeholder="New Password">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['new-passwordError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="confirm-password">Confirm Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Renter New Password">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['confirm-passwordError']; ?>
                </span>
            </div>
        </div>
        </br>
        <div class="row">
            <input type="submit" value="Change Password" class="green-button">
            <input type="submit" value="Cancel" class="pink-button" style="width:10em; margin-left:30em; padding:10px;">
        </div>
    </form>
</div>

</br> </br>
<input type="reset" value="Delete Account" class="pink-button" style="float: right; margin-right:13.2em;">

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
