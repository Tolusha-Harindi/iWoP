<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<div class="category" id="my-profile"> <p> My Service </p> </div>

div class="form-space">
    <form action="<?php echo URLROOT;?> /workers/worker_service" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="cat-1">Category 1</label>
            </div>
            <div class="col-75">
            <select id="category1" name="category1">
                <?php foreach($data['allcat'] as $cat):?>
                <option value="0"></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
                <span class="invalidFeedback">
                <?php  echo $data['category1Error'];?>
            </span> </br> </br>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-2">Category 2</label>
            </div>
            <div class="col-75">
            <select id="category2" name="category2" >
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-3">Category 3</label>
            </div>
            <div class="col-75">
            <select id="category3" name="category3">
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-4">Category 4</label>
            </div>
            <div class="col-75">
            <select id="category4" name="category4" >
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"></option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
            <?php endforeach; ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="cat-5">Category 5</label>
            </div>
            <div class="col-75">
            <select id="category5" name="category5" >
            <?php foreach($data['allcat'] as $cat):?>
                <option value="0"></option>
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
            <input type="text" id="wo-district" name="wo-district" placeholder="Enter Your Disricts" required>
            <span class="invalidFeedback">
                <?php  echo $data['work_districtError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-city">Working Cities</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-city" name="wo-city" placeholder="Enter Your Cities" required>
            <span class="invalidFeedback">
                <?php  echo $data['work_cityError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="qualification">Qualification</label>
            </div>
            <div class="col-75">
            <input type="file" id="qualification" name="qualification" style="background-color: white" required>
            <span class="invalidFeedback">
                <?php  echo $data['qualificationError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="gs">GS Certificate</label>
            </div>
            <div class="col-75">
            <input type="file" id="gs" name="gs" style="background-color: white" required>
            <span class="invalidFeedback">
                <?php  echo $data['gs_certiError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="experience">Experiences(Years)</label>
            </div>
            <div class="col-75">
            <input type="number" id="experience" name="experience" placeholder="Enter Your Experience Years" required>
            <span class="invalidFeedback">
                <?php  echo $data['exp_yearError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="hour">Working Hours</label>
            </div>
            <div class="col-75">
            <input type="number" id="hour" name="hour" placeholder="Enter Your Working Hours" required>
            <span class="invalidFeedback">
                <?php  echo $data['work_hourError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="call">Best Time To Call</label>
            </div>
            <div class="col-75">
            <input type="time" id="call" name="call" placeholder="Enter Your Best Time" required>
            <span class="invalidFeedback">
                <?php  echo $data['call_timeError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="wo-days">Working Days</label>
            </div>
            <div class="col-75">
            <input type="text" id="wo-days" name="wo-days" placeholder="Enter Your Working Days" required>
            <span class="invalidFeedback">
                <?php  echo $data['work_dayError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="past">Past Experience</label>
            </div>
            <div class="col-75">
            <input type="file" id="past" name="past" style="background-color: white" required>
            <span class="invalidFeedback">
                <?php  echo $data['past_expError'];?>
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
