
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<!------heading----------->
<div class="category"> <p> Manager </p> </div>


<!-----------------------------------Update Manager--------------------------------------->
<div class="heading"> <p> Update Manager </p> </div>

<div class="form-space">
    <form action="<?php echo URLROOT; ?>/admins/update_manager/<?php echo $data['manager']->manager_id ?>" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" value ="<?php echo $data['manager']->name ?>">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['nameError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="nic">NIC Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="nic" name="nic" value ="<?php echo $data['manager']->nic ?>">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['nicError']; ?>
                </span>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" value ="<?php echo $data['manager']->contact ?>">
            </br> </br>
                    <span class="invalidFeedback">
                        <?php echo $data['contactError']; ?>
                    </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" value ="<?php echo $data['manager']->email ?>">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" value ="<?php echo $data['manager']->address ?>">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['addressError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="profile">Profile picture</label>
            </div>
            <div class="col-75">
                <input type="file" id="profile" name="profile">
            </div>
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['profileError']; ?>
                </span>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="password">Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="password" name="password" value ="<?php echo $data['manager']->password ?>">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['addressError']; ?>
                </span>
            </div>
        </div>


        </br>
        <div class="row">
                        <input type="submit" value="Edit" class="green-button">
                        <a class="pink-button" style="text-decoration:none; font-size:13px; margin-left:2em; margin-top:2.5em; padding: 9px 24px; display:inline;" href="<?php echo URLROOT; ?> /admins/admin_manager/"> Cancel </a>
        </div>
    </form>
</div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>