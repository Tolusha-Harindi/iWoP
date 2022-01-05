<?php include_once APPROOT . '/views/includes/topnav2.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>

<div class="shape" style="background-color: orange; height:150.5%;"> </div>
<img src="<?php echo URLROOT;?>/public/img/reg-3.png" class="image" style="right:50%; height: 30rem;"  alt=""/>

<form action="<?php echo URLROOT; ?>/logins/company_register" method="POST">
        <div class="container">
            <h1>SIGN UP</h1>
            <label for="com_name"><b>Company Name</b></label>
            <input type="text" placeholder="Enter Company Name" name="com_name">
            <span class="invalidFeedback">
                <?php  echo $data['nameError'];?>
            </span> </br> </br>

            <label for="contact"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter Contact Number" name="contact">
            <span class="invalidFeedback">
                <?php  echo $data['contactError'];?>
            </span> </br> </br> 

            <label for="reg_no"><b>Company Registered  Number</b></label>
            <input type="text" placeholder="Enter Company Registered  Number" name="reg_no">
            <span class="invalidFeedback">
                <?php  echo $data['reg_noError'];?>
            </span> </br> </br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email">
            <span class="invalidFeedback">
                <?php  echo $data['emailError'];?>
            </span> </br> </br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">
            <span class="invalidFeedback">
                <?php  echo $data['passwordError'];?>
            </span> </br> </br>

            <label for="re-enterpassword"><b>Re-Enter Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="re-enterpassword">
            <span class="invalidFeedback">
                <?php  echo $data['re-enterpasswordError'];?>
            </span> </br> </br>

            <button type="submit" class="blue-button">Sign-Up</button>
            <p class="register-link"><a href="<?php echo URLROOT;?>/logins/login">Back to Login >></a> </p>
        </div>  
</form>


<?php include_once APPROOT . '/views/includes/footer.php'; ?>