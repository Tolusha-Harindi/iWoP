<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="heading" id="change-password" style="margin-left:28em; margin-top:-20em;"> <p> Change Password </p> </div>

<div class="form-space" >
    <form action="<?php echo URLROOT; ?> /workers/password_edit" method = "POST">
        <div class="row">
            <div class="col-25">
            <label for="password">Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="wpassword" name="wpassword" placeholder="Enter your Password" required>
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['wpasswordError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="new-password">New Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="new-password" name="new-password" placeholder="Enter New Password" required>
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
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Renter New Password" required>
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['confirm-passwordError']; ?>
                </span>
            </div>
        </div>
        </br>
        <div class="row">
            <input type="submit" value="Change Password" class="green-button">
        </div>
    </form>
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
