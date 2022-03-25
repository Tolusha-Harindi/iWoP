<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/company_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<!-----------------------------------Change Password--------------------------------------->
<div class="category" id="change-password" style="margin-top: -14em;"> <p> Change Password </p> </div>

<div class="form-space">
   
    <form action="<?php echo URLROOT; ?> /customers/customer_change_password" method="POST">
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


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>