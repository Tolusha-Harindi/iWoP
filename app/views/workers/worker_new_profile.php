<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<div class="category" id="my-profile"> <p> My Profile </p> </div>

<script type="text/javascript" src="<?php echo URLROOT;?> /public/js/pic.js"></script>

<div class="form-space">
    <form action="<?php echo URLROOT;?> /workers/worker_new_profile" method="POST">
    <div id="profile-container" style="margin-left:40%; margin-top:10px;">
    <image id="profileImage" src="<?php echo URLROOT;?> /public/img/profile.jpg" />
    </div>

    <div class="col-75" style="margin-left:18em;">
            <input type="file" id="prof_pic" name="prof_pic">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['profileError']; ?>
                </span>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" value="<?php echo $data['worker']->fname; ?>" required>
            <span class="invalidFeedback">
                <?php  echo $data['nameError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" value="<?php echo $data['worker']->email; ?>" required>
            <span class="invalidFeedback">
                <?php  echo $data['emailError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter Your address" required>
            <span class="invalidFeedback">
                <?php  echo $data['addressError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="district">District</label>
            </div>
            <div class="col-75">
            <input type="text" id="district" name="district" placeholder="Enter Your District" required>
            <span class="invalidFeedback">
                <?php  echo $data['districtError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="city">City</label>
            </div>
            <div class="col-75">
            <input type="text" id="city" name="city" placeholder="Enter Your City" required>
            <span class="invalidFeedback">
                <?php  echo $data['cityError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="scan-copy">Scan Copy Of NIC</label>
            </div>
            <div class="col-75">
            <label for="front" style="margin-left: 0">Front Side</label><br/>
            <input type="file" id="front" name="front" required style="background-color: white">
            <span class="invalidFeedback">
                <?php  echo $data['frontsideError'];?>
            </span> </br> </br>
            </div>
            <div class="col-75" style="margin-left: 180px; margin-top: 0.8em;">
            <label for="back" style="margin-left: 0">Back Side</label></br>
            <input type="file" id="back" name="back" required style="background-color: white">
            <span class="invalidFeedback">
                <?php  echo $data['backsideError'];?>
            </span> </br> </br>
            </div>
        </div>

        </br>
        <div class="row">
            <input type="submit" value="Save" class="green-button">
        </div>
    </form>
</div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
