<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php //include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="form-space" style="margin-top:7em; margin-left:25%;">
    <!-- <form action="<?php echo URLROOT;?> /workers/worker_show" method="POST"> -->
      
    <!-- <div id="profile-container" style="margin-left:-25%; margin-top:15em;"> -->
                    <img src="<?php echo URLROOT;?> /public/img/invite.png" class="table-image" style="border-radius: 200px; height:50px; width: 50px; margin-left:3%; margin-top:1em;">
                    <p class="heading" style="margin-top: -1.5em; margin-left:40%; font-size:36px;">Job Invites</p>
                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="fname" style="color: #0526BA;"><b>Name :</b></label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;"><?php echo $data['job']->fname;?></p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="lname" style="color: #0526BA;"><b>Contact Number :</b></label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;"><?php echo $data['job']->contact;?></p>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="contact" style="color: #0526BA;"><b>Time :</b></label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;"><?php echo $data['job']->time;?></p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="amount" style="color: #0526BA;"><b>Start Date :</b></label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;"><?php echo $data['job']->start_date;?></p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="contact" style="color: #0526BA;"><b>Address :</b></label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;"><?php echo $data['job']->address;?></p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="contact" style="color: #0526BA;"><b>Budget :</b></label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;">Rs.<?php echo $data['job']->budget;?>.00</p>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-25" style="margin-left: 30%; width: 15%;">
                                <form action="<?php echo URLROOT . "/workers/accept_job/" . $data['job']->job_id;?>">
                                <input type="submit" value="Accept" class="blue-button" style="margin-left:45%;"/></form>
                            </div>
                           
                            <div class="col-75" style="width: 15%;">
                                <form action="<?php echo URLROOT . "/workers/reject_job/" . $data['job']->job_id;?>">
                                <input type="submit" value="Reject" class="pink-button" style="margin-left:53%; margin-top:0em; padding: 8px 25px;"/></form>
                            </div>
                        </div>
                        </br>
<!-- 
</div> -->
<!-- </form> -->
</div>

<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
