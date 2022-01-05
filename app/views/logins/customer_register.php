<?php include_once APPROOT . '/views/includes/topnav2.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>

<div class="shape" style="background-color: #F10B67; height:148.5%;"> </div>
<img src="<?php echo URLROOT;?>/public/img/reg-1.png" class="image" alt="" />

<form action="<?php echo URLROOT; ?>/logins/customer_register" method="POST">
        <div class="container">
            <h1>SIGN UP</h1>
            <label for="fname"><b>Firstname</b></label>
            <input type="text" placeholder="Enter Firstname" name="fname">
            <span class="invalidFeedback">
                <?php  echo $data['firstnameError'];?>
            </span>

            <label for="lname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lname">
            <span class="invalidFeedback">
                <?php  echo $data['lastnameError'];?>
            </span>

            <label for="contact"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter Contact Number" name="contact">
            <span class="invalidFeedback">
                <?php  echo $data['contactError'];?>
            </span> 

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email">
            <span class="invalidFeedback">
                <?php  echo $data['emailError'];?>
            </span>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address">
            <span class="invalidFeedback">
                <?php  echo $data['addressError'];?>
            </span>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">
            <span class="invalidFeedback">
                <?php  echo $data['passwordError'];?>
            </span>

            <label for="re-enterpassword"><b>Re-Enter Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="re-enterpassword">
            <span class="invalidFeedback">
                <?php  echo $data['re-enterpasswordError'];?>
            </span>

            <button type="submit" class="blue-button">Sign-Up</button>
            <p class="register-link"><a href="<?php echo URLROOT;?>/logins/login">Back to Login >></a> </p>
        </div>  
</form>


<?php include_once APPROOT . '/views/includes/footer.php'; ?>