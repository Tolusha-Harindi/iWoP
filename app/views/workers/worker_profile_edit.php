<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<?php //include_once APPROOT . '/models/Worker.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- <a href="#my-profile" class="top-button3" style="margin-top: -45em; margin-left: 59em; width: 6em;"> My Profile </a>
 <a href="#change-password" class="top-button1" style="margin-top: -45em; margin-left: 59em; width:10em;"> Change Password </a> 
<a href="#my-service" class="top-button2" style="margin-top: -45em;  margin-left: 70em; width: 8em;"> My Service </a> -->

<!------------------profile edit------------------------>
<div class="category" id="my-profile" style="margin-top: -15em;"> <p> My Profile & Service </p> </div>

<div class="form-space">
    <form action="<?php echo URLROOT;?> /workers/worker_profile_edit" method="POST">
      
    <div id="profile-container" style="margin-left:40%; margin-top:10px;">
    <image id="profileImage" src="<?php echo URLROOT . "/public/img/" . $data['profile']->prof_pic;?>" />
    </div>

    <div class="col-75" style="margin-left:18em;">
            <input type="file" id="prof_pic" name="prof_pic">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['profilepicError']; ?>
                </span>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="name">First Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="fname" name="fname" value="<?php echo $data['profile']->fname; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['fnameError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Last Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="lname" name="lname" value="<?php echo $data['profile']->lname; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['lnameError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" value="<?php echo $data['profile']->email; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" value="<?php echo $data['profile']->contact; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['contactError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="contact">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" value="<?php echo $data['profile']->address; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['addressError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-1">Category1</label>
            </div>
            <div class="col-75">
            <select name="cat1" id="cat1">
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"><?php echo $data['service']->category1;?></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            <span class="invalidFeedback">
                    <?php echo $data['category1Error']; ?>
                </span>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-1">Category2</label>
            </div>
            <div class="col-75">
            <select name="cat2" id="cat2">
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"><?php echo $data['service']->category2;?></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-1">Category3</label>
            </div>
            <div class="col-75">
            <select name="cat3" id="cat3">
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"><?php echo $data['service']->category3; ?></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-1">Category4</label>
            </div>
            <div class="col-75">
            <select name="cat4" id="cat4">
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"><?php echo $data['service']->category4; ?></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-1">Category5</label>
            </div>
            <div class="col-75">
            <select name="cat5" id="cat5">
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"><?php echo $data['service']->category5; ?></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-district">Working Districts</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-district" name="wo-district" value="<?php echo $data['service']->working_district; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['work-districtError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-city">Working Cities</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-city" name="wo-city" value="<?php echo $data['service']->working_city; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['work-cityError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="qualification">Qualification</label>
            </div>
            <div class="col-75">
            <input type="file" id="qualification" name="qualification" value="<?php echo $data['service']->qualification; ?> "style="background-color: white" required>
            <span class="invalidFeedback">
                    <?php echo $data['qualificationError']; ?>
                </span>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
            <label for="experience">Experiences(Years)</label>
            </div>
            <div class="col-75">
            <input type="number" id="experience" name="experience" value="<?php echo $data['service']->exp_year; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['experienceError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="hour">Working Hours</label>
            </div>
            <div class="col-75">
            <input type="number" id="hour" name="hour" value="<?php echo $data['service']->work_hour; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['work-hourError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="call">Best Time To Call</label>
            </div>
            <div class="col-75">
            <input type="time" id="call" name="call" value="<?php echo $data['service']->call_time; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['best-timeError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-days">Working Days</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-days" name="wo-days" value="<?php echo $data['service']->working_days; ?>" required>
            <span class="invalidFeedback">
                    <?php echo $data['work-dayError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="past">Past Experience</label>
            </div>
            <div class="col-75">
            <input type="file" id="past" name="past" value="<?php echo $data['service']->experience; ?>" style="background-color: white" required>
            <span class="invalidFeedback">
                    <?php echo $data['past-experienceError']; ?>
                </span>
            </div>
        </div>


        </br>
        <div class="row">
        <button type="submit" class="green-button">Update</button>
        </div>
    </form>
</div>

</br> </br>
<?php //if(isset($_SESSION['worker_id']) && $_SESSION['worker_id'] == $data['profile']->worker_id): ?>
<form action="<?php echo URLROOT;?> /workers/delete_profile" method="POST">
  <button type="reset" class="pink-button" style="float: right; margin-right:13.2em;">Delete Account</button> 
</form>
<?php //endif; ?>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
