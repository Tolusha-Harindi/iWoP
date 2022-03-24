<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<!---<a href="#my-profile" class="top-button1" style="margin-left:78em; width:6em;"> My Profile </a>
<a href="#change-password" class="top-button2" style="margin-left:64em;"> Change Password </a> ----->

<!------heading----------->
<div class="category" id="my-profile" style="margin-top: -16em;"> <p> My Profile </p> </div>

<div class="form-space">

    <?php foreach($data['admin'] as $admin): ?>
        <img src="<?php echo URLROOT?>/public/img/<?php echo $admin->prof_pic; ?>" style="border-radius: 200px; height:160px; width: 160px; margin-left:40%; margin-top:3em;">
    <?php endforeach; ?>
    <form action= "<?php echo URLROOT; ?> /admins/admin_profile" method="POST">
        
        <div class="col-75" style="margin-left:21em;">
            <input type="file" id="prof_pic" name="prof_pic">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['prof_picError']; ?>
                </span>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="name">Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Enter your Name">
                </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['nameError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Enter your Email">
                </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>
            </div>
        </div>
        </br>
        <div class="row">
            <input type="submit" value="Update" class="green-button">
        </div>
    </form>
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>