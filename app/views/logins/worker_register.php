<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>

<div class="shape" style="background-color: #14A76C; height:166%;"> </div>
<img src="<?php echo URLROOT;?>/public/img/reg-2.png" class="image" style="right:55%;" alt=""/>

<form action="<?php echo URLROOT; ?>/logins/worker_register" method="POST">
        <div class="container">
            <h1>SIGN UP</h1>
            <label for="fname"><b>Firstname</b></label>
            <input type="text" placeholder="Enter Firstname" name="fname">
            <span class="invalidFeedback">
                <?php  echo $data['firstnameError'];?>
            </span> </br> </br>

            <label for="lname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lname">
            <span class="invalidFeedback">
                <?php  echo $data['lastnameError'];?>
            </span> </br> </br>

            <label for="contact"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter Contact Number" name="contact">
            <span class="invalidFeedback">
                <?php  echo $data['contactError'];?>
            </span> </br> </br>
            
            <label for="nic"><b>NIC</b></label>
            <input type="text" placeholder="Enter NIC" name="nic">
            <span class="invalidFeedback">
                <?php  echo $data['nicError'];?>
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
            <p class="register-link"><a href="<?php echo URLROOT;?>/logins/loginas">Back to Login >></a> </p>
        </div>  
</form>


<?php include_once APPROOT . '/views/includes/footer.php'; ?>