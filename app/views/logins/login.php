<?php include_once APPROOT . '/views/includes/topnav2.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT?> /public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT?> /public/css/home/button.css"/>

<div class="shape"> </div>
<img src="<?php echo URLROOT?>/public/img/log-1.png" class="image" style="right:60%; height:35rem; top:7.7em;" alt="" />

<form action="check-login.php" method="post" name="myform" onsubmit="return validateform()">
    <div class="container">
        <h1>LOGIN</h1>
        <div class="form-style">
            <label for="email"><b>EMAIL</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>PASSWORD</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="blue-button">Login</button>
        </div>
        <p class="register-link">Haven't Registered yet? Click here to <a href="register.php">Register</a> </p>
    </div>
</form>


  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>