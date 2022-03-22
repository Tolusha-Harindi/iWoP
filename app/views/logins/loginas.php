<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT ?> /public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT ?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rosarivo:ital@1&display=swap" rel="stylesheet">

<table cellspacing="5" cellpadding="50" align="center">

        <tr>
            <td>
                <div>
                    <img src="<?php echo URLROOT ?>/public/img/log.png" class="loginImage" alt="photo">   
                </div>
            </td>
            <td>
             
                <div class="container1">
                    <br>
                    <h1>Login As</h1>
                    <a href="<?php echo URLROOT; ?>/logins/customer_login"> <button class="usertype" type="customer"><img src="<?php echo URLROOT ?>/public/img/customer.png" width="30px" height="30px">&nbsp   Customer</button></a>
                    <a href="<?php echo URLROOT; ?>/logins/worker_login"><button class="usertype" type="worker"><img src="<?php echo URLROOT ?>/public/img/worker.png" width="30px" height="30px">&nbsp &nbsp Worker</button></a>
                    <a href="<?php echo URLROOT; ?>/logins/company_login"><button class="usertype" type="company"><img src="<?php echo URLROOT ?>/public/img/company.png" width="30px" height="30px">&nbsp &nbsp Company</button></a>
                    <p class="register-link" style="margin-left: -1em; margin-top:2em;">Haven't Registered yet? Click here to <a href="<?php echo URLROOT; ?> /logins/register">Register</a> </p>
                
                </div>
            </td>
        </tr>
   
    

<tr><td> </br> </br> </br> </br> </br> </br></td> </tr>

</table>

</br>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>