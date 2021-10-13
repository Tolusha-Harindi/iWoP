<html>
<title> Customer Registration Page </title>

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
            <a href="Login.php"> <b>| Login  </b></a> 
            <a href="#help"> <b>| Help Page </b></a> 
            <a href="#category"><b> | Category </b></a> 
            <a href="#alladds"> <b>| All Adds </b></a> 
        </div>
    </div>

</head>
<body>
    <div class="content">
        <div class="box2">
            <div class="container">
                <h2 class="box-heading"> REGISTER </h2>
                <form name = "reg-w" onsubmit="return validation()" method="post" action="Reg-Cus.php">
                    <div class="reg-start">
                            <div class="info">
                                    <div class="group">
                                        <input id="name" name="name" type="text" placeholder = "Name" class="input" required>
                                    </div>
                                    <div class="group">
                                        <input id="contact" name="contact" type="int" placeholder = "Contact Number" class="input" required>
                                    </div>
                                    <div class="group">
                                        <input id="email" name="email" type="email" placeholder = "Email" class="input" required>
                                    </div>
                                    <div class="group">
                                        <input id="password" name="password" type="password" placeholder= "Password" class="input" data-type="password" required>
                                    </div>
                                    <div class="group">
                                        <input id="repassword" name="repassword" type="password" placeholder= "Confirm Password" class="input" data-type="password" required>
                                    </div>
                                    <div class>
                                        <br /> <input type = "submit"  name="submit" value ="Register" class="button">
                                    </div>
                                    <div class="forgetpw"> 
                                        <label><b> <a href="Login.php">Back to Login <b></a>
                                    </div>
                                    
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</body>

</html>