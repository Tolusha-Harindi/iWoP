<?php 
session_start();
if(isset($_SESSION['email'])){
    session_unset();
    session_destroy();
    header('location:Login.php');
    exit();
}
else{

?>


<html>
<title> Login Page </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="Login.css">

    <?php
        include '../Repeating-pages/topnav/topnav1.php'
    ?>

</head>

<body>
    <div class="content">
        <div class="box">
            <div class="container">
                <h2 class="box-heading"> LOGIN </h2>
                <?php //var_dump($_SESSION); ?>
                <form name="login"  id="login" method="post" action="Login-data.php">
                    <div class="login-start">
                            <div class="info">
                                    <div class="group">
                                        <input type="text" name="email" id="email" placeholder = "Email" class="input">
                                    </div>
                                    <div class="group">
                                        <input id="password" name="password" type="password" placeholder= "Password" class="input">
                                    </div>
                                    <div class="group">
                                    <?php
                                        if(isset($_GET['error'])) { ?>
                                            <p class = "error-log_in"><?php echo $_GET['error'];?></p>
                                    <?php }   ?>
                                        </div>
                                    <!-- <div class="group">
                                        <input type="checkbox" checked="checked">
                                        <label class="container"> <b> Keep Me Signed in </b>
                                        <span class="checkmark"></span>
                                        </label>
                                    </div> -->
                                    <div>
                                        <br /> <input type = "submit" name="submit" id="submit" value ="Login" class="button"> 
                                    </div></br>
                                    <!-- <div class="forgetpw">
                                        <a href="#forgot">Forgot Password?</a>
                                    </div> -->
                                    <div class="forgetpw">
                                        <label class="container"><b> Haven't Registered yet? Click here to </b><a href="../Unregistered-user/RegisterAs/RegisterAs.php">Register</a>
                                    </div> 
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </div>
    
</body>

</html>

<?php 
    }
?>