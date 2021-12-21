<?php include_once APPROOT . '/views/includes/topnav2.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>

<div class="shape" style="background-color: orange; height:135.5%;"> </div>
<img src="<?php echo URLROOT;?>/public/img/reg-3.png" class="image" style="right:50%; height: 30rem;"  alt=""/>

<form action="check.php" method="post">
        <div class="container">
            <h1>SIGN UP</h1>
            <label for="cname"><b>Company Name</b></label>
            <input type="text" placeholder="Enter Company Name" name="cname" required>

            <label for="contact"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter Contact Number" name="contact" required>
            
            <label for="reg_num"><b>Company Registered  Number</b></label>
            <input type="text" placeholder="Enter Company Registered  Number" name="reg-num">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for=""><b>Re-Enter Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="repasw" required>

            <button type="submit" class="blue-button">Sign-Up</button>
            <p class="register-link"><a href="<?php echo URLROOT;?>/logins/login">Back to Login >></a> </p>
        </div>  
</form>


<?php include_once APPROOT . '/views/includes/footer.php'; ?>