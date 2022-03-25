<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>

<div class="shape"> </div>
<img src="<?php echo URLROOT;?>/public/img/log-1.png" class="image" style="right:60%; height:32rem; top:7.7em;" alt="" />

<form action="<?php echo URLROOT; ?>/logins/worker_new_account" method="POST">
    <div class="container" style="margin-left:60%; margin-top:5em;">
        <p style="margin-left:10%; font-family:'Ribeye Marrow', sans-serif;"><b>Please Create Your Own Account!</b></p>
        <h1 style="margin-left:1%;">New Account</h1>
        <div class="form-style">
           <button type="submit" id="submit" class="blue-button">New Account</button>
        </div>
    </div>
</form>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
