
<?php
session_start();
if(isset($_SESSION['email'])){

  include '../Backend/db_connection.php'; //check mangers id or not
  $temp= $_SESSION['email']; 
  $sql = "SELECT email FROM manager WHERE email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){

  
?>


<html>
<title> Worker Registration Page </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="Login.css">
        
    <?php
        include '../Repeating-pages/topnav/topnav7-login.php'
    ?>

</head>
<body>
    <div class="content">
        <div class="box1">
            <div class="container">
                <h2 class="box-heading"> REGISTER </h2>
                <form name = "reg-w" id="reg-w"  method="post" action="Reg-Worker.php">
                    <div class="reg-start">
                            <div class="info">
                                    <div class="group">
                                        <input id="name" name="name" type="text" placeholder = "Name" class="input">
                                    </div>
                                    <div class="group">
                                        <input id="contact" name="contact" type="tel" placeholder = "Contact Number" class="input">
                                    </div>
                                    <div class="group">
                                        <input id="NIC" name="NIC" type="text" placeholder = "NIC Number" class="input">
                                    </div>
                                    <div class="group">
                                        <input id="email" name="email" type="text" placeholder = "Email" class="input">
                                    </div>
                                    <div class="group">
                                        <input id="password" name="password" type="password" placeholder= "Password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <input id="repassword" name="repassword" type="password" placeholder= "Confirm Password" class="input" data-type="password">
                                    </div>
                                    <div class>
                                    <br /> <input type = "submit" name="submit"  id="submit" value ="Register" class="button"> 
                                    </div>
                                    <div class="forgetpw"> 
                                        <label><b> <a href="Login.php">Back to Login <b></a>
                                    </div>
                                    <?php
                                    if(isset($_GET['error'])) { ?>
                                        <p class = "error-reg-worker"><?php echo $_GET['error'];?></p>
                                    <?php }   ?>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </div>
    <script src="Reg-worker.js"></script>
</body>

</html>

<?php 
  }
  else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>'; //redirect to previous page
    exit();
  }
}

else{
  header('location:../../Login/Login.php');
  exit();
}
?>