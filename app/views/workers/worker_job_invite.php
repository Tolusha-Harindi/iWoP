<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-------------------------------------job invite table--------------------------------------->
<div class="category" id="my-profile" style="margin-top: -14em;"> <p>Customer Job Invites</p> </div>

<div class="table">
    <div class="table-wrapper" style="margin-top:2em;">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Profile Pic</th>
                    <th>Invite Time</th>
                    <th>Contact Number</th>
                    <th>More</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($data['jobs'] as $jobs): ?>   
                <tr>
                    <td><?php echo $jobs->fname . " " . $jobs->lname;?></td>
                    <td><img src="<?php $jobs->prof_pic;?>" class="table-image" style="border-radius: 50px;"></td>
                    <td><?php echo $jobs->invite_at;?></td>
                    <td><?php echo $jobs->contact;?></td>
                    <td> <a href="<?php echo URLROOT . "/workers/show_job_detail/". $jobs->job_id;?>"><button  id="myBtn" class="blue-out-button">More </button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div> 
</div>

<br/><br/>

<!-------------------------------------job invite table--------------------------------------->
<div class="category" id="my-profile" style="margin-top: 1em;"> <p>Company Job Invites</p> </div>

<div class="table">
    <div class="table-wrapper" style="margin-top:2em;">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Profile Pic</th>
                    <th>Invite Time</th>
                    <th>Contact Number</th>
                    <th>More</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($data['com'] as $jobs): ?>   
                <tr>
                    <td><?php echo $jobs->com_name;?></td>
                    <td><img src="<?php $jobs->prof_pic;?>" class="table-image" style="border-radius: 50px;"></td>
                    <td><?php echo $jobs->invite_at;?></td>
                    <td><?php echo $jobs->contact;?></td>
                    <td> <a href="<?php echo URLROOT . "/workers/show_job_Com_detail/". $jobs->job_id;?>"><button  id="myBtn" class="blue-out-button">More </button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div> 
</div>

    
<script type="text/javascript" src="<?php echo URLROOT;?> /public/js/blue-out-button-popup.js"></script>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>

