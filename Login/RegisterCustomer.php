

<html>
<title> Customer Registration Page </title>

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
        <div class="box2">
            <div class="container">
                <h2 class="box-heading"> REGISTER </h2>
                <form name = "reg-w" id="reg-w"  method="post" action="Reg-Cus.php">
                    <div class="reg-start">
                            <div class="info">
                                    <div class="group">
                                        <input id="name" name="name" type="text" placeholder = "Name" class="input">
                                    </div>
                                    <div class="group">
                                        <input id="contact" name="contact" type="int" placeholder = "Contact Number" class="input">
                                    </div>
                                    <div class="group">
                                        <input id="email" name="email" type="email" placeholder = "Email" class="input" >
                                    </div>
                                    <div class="group">
                                        <input id="password" name="password" type="password" placeholder= "Password" class="input" data-type="password" >
                                    </div>
                                    <div class="group">
                                        <input id="repassword" name="repassword" type="password" placeholder= "Confirm Password" class="input" data-type="password">
                                    </div>
                                    <div class>
                                        <br /> <input type = "submit"  name="submit" id="submit" value ="Register" class="button">
                                    </div>
                                    <div class="forgetpw"> 
                                        <label><b> <a href="Login.php">Back to Login <b></a> </label>
                                    </div>
                                    <?php
                                    if(isset($_GET['error'])) { ?>
                                        <p class = "error-reg-cus"><?php echo $_GET['error'];?></p>
                                    <?php }   ?>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </div>
    <script src="Reg-cus.js"></script>
</body>

</html>

