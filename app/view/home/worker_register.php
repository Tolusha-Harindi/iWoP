<?php include("topnav2.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/login.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>

<div class="shape" style="background-color: #14A76C; height:148.5%;"> </div>
<img src="../../../public/img/reg-2.png" class="image" style="right:55%;" alt=""/>

<form action="check.php" method="post">
        <div class="container">
            <h1>SIGN UP</h1>
            <label for="fname"><b>Firstname</b></label>
            <input type="text" placeholder="Enter Firstname" name="fname" required>

            <label for="lname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lname" required>

            <label for="contact"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter Contact Number" name="contact" required>
            
            <label for="nic"><b>NIC</b></label>
            <input type="text" placeholder="Enter NIC" name="nic" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for=""><b>Re-Enter Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="repasw" required>

            <button type="submit" class="blue-button">Sign-Up</button>
            <p class="register-link"><a href="login.php">Back to Login >></a> </p>
        </div>  
</form>


<?php include("footer.php"); ?>