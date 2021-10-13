<html>
<title> Login Page </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="Login.css">

    <div class="sticky">
        <div class="topnav">
            <div class="logo"> 
                <input type="image" id="image" alt="Landing" src="../Images/Logo.jpg">
            </div>
            <a class="active" href="../Unregistered-user/RegisterAs/RegisterAs.php"> <b>| Register  </b></a> 
            <a href="#help"> <b>| Help Page </b></a> 
            <a href="#category"><b> | Category </b></a> 
            <a href="#alladds"> <b>| All Adds </b></a> 
        </div>
    </div>
    

</head>

<body>
    <div class="content">
        <div class="box">
            <div class="container">
                <h2 class="box-heading"> LOGIN </h2>
                <form name = "login" onsubmit="return validation()" method="post">
                    <div class="login-start">
                            <div class="info">
                                    <div class="group">
                                        <input type="email" id="user" placeholder = "Email" class="input" required>
                                    </div>
                                    <div class="group">
                                        <input id="pass" type="password" placeholder= "Password" class="input"  required>
                                    </div>
                                    <div class="group">
                                        <input type="checkbox" checked="checked">
                                        <label class="container"> <b> Keep Me Signed in </b>
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <br /> <input type = "submit"  value ="Login" class="button">
                                    </div>
                                    <div class="forgetpw">
                                        <a href="#forgot">Forgot Password?</a>
                                    </div>
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