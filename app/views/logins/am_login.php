<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/am_login.css"/>
<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/am_login.js"></script>


<div class="container">

       
    <div class="box-1">
        <div class="content-holder">
            <h2>iWoP</h2>
            <!--<img src="<?php echo URLROOT ?>/public/img/landing/5.jpg" alt="" style="width: 600px;"class="center" >-->
            <p>we are here for help you .</p>
            <button class="button-1" onclick="login1()" >Login As Manager</button>
            <button class="button-2" onclick="login2()" >Login As Admin</button>
        </div>
    </div>
</div>

    <!-- login as admin -->
    <div class="box-2">
        <div class="login1-form-container">
            <h1>Login As Admin</h1>
            <form action="<?php echo URLROOT; ?>/logins/admin_login" method="post">

                <input type="text" placeholder="Email" class="input-field" name="email"><br>
                <span style="color:red;">
                <?php echo $data['emailError']; ?>
                </span>
                <br>

                <input type="password" placeholder="Password" class="input-field" name="password"><br>
                <span style="color:red;">
                <?php echo $data['passwordError']; ?>
                </span>
                <br><br>

                <a href="" class="forgotpwd">Forgot Password?</a>
                <br>
                <button class="login-button" type="submit">Login</button>

            </form>
        </div>


    <!-- login as manager -->
    <div class="login2-form-container">
        <h1>Login As Manager</h1>
        <form action="<?php echo URLROOT; ?>/logins/manager_login" method="post">
        <input type="text" placeholder="Email" class="input-field" name="email"><br>
        <span style="color:red;">
                <?php echo $data['emailError']; ?>
        </span>
        <br>
        <input type="password" placeholder="Password" class="input-field" name="password"><br>
        <span style="color:red;">
                <?php echo $data['passwordError']; ?>
        </span>
        <br><br>
            <a href="" class="forgotpwd">Forgot Password?</a>
        <br>
            <button class="login-button" type="submit">Login</button>
        </form>
    </div>
</div>



<?php include_once APPROOT . '/views/includes/footer.php'; ?>