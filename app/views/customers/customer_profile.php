<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<!--<a href="#my-profile" class="top-button1" style="margin-top: -36em; margin-left:78em;width:7em;"> My Profile </a>
<a href="#change-password" class="top-button2" style="margin-top: -36em;  margin-left:64em;"> Change Password </a>---->

<!------heading----------->
<div class="category" id="my-profile" style="margin-top: -14em;"> <p> My Profile </p> </div>




<div class="form-space">

    <?php foreach($data['customer'] as $customer): ?>
        <img src="<?php echo URLROOT?>/public/img/<?php echo $customer->prof_pic; ?>" style="border-radius: 200px; height:160px; width: 160px; margin-left:40%; margin-top:2em;">
    <?php endforeach; ?>
    <form action="<?php echo URLROOT; ?> /customers/customer_profile" method="POST">
        
        <div class="col-75" style="margin-left:21em;">
            <input type="file" id="prof_pic" name="prof_pic">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['prof_picError']; ?>
                </span>
        </div>
        <div class="row">
            <div class="col-25">
            <label for="name">First Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="fname" name="fname" placeholder="Enter Your First Name">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['fnameError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="name"> Last Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['lnameError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" placeholder="Enter your email">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['contactError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter address">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['addressError']; ?>
                </span>
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

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
