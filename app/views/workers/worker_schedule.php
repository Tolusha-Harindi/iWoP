<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/worker/calender.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

<a href="#work-schedule" class="top-button1" style="margin-top: -45em; margin-left:58em; width:8em;"> Work Schedule </a>
<a href="#pending-works" class="top-button2" style="margin-top: -45em; margin-left:70em; width:8em;"> Pending Works </a>

<!----------------------------------------Schedule calender------------------------------------------------>
<div class="category" id="work-schedule" style="margin-top: -15em; margin-left: 8em;"> <p> Work Schedule</p> </div>

<div class="calender">
    <div class="row-01">
    
        <div class="day-time">
            <div class="date"><p><?php echo date("jS \of F Y"); ?><br/><?php echo date("h:i:sa");?></b></p></div>
            <div class="btn-plan"><button id="myBtn" class="pink-button" style="padding: 8px 43px; margin-left:-27em; margin-top:0em;">Plan</button></div>
        </div>

    </div>
</div>

<!----------------------------------------------Scheduling-------------------------------------------------->
<div class="sheduling">
   <div class="event-calendar" id="event-calendar">
       <div class="calendar-bar">
            <button class="prev soft-btn" style="margin-top:0.5em; margin-left: 10px;"><i class="fas fa-chevron-left"></i></button>
            <div class="current-month"></div>
            <button class="next soft-btn" style="margin-top:-4.5em; margin-left: 64.5em;"><i class="fas fa-chevron-right" style="margin-top:-4.8em;"></i></button>
       </div>
 
    <div class="calendar">
        <div class="weekdays-name">
            <div class="days-name">Sat</div>
            <div class="days-name">Sun</div>
            <div class="days-name">Mon</div>
            <div class="days-name">Tues</div>
            <div class="days-name" style=" padding-right: 35px; padding-left: 50px;">Wed</div>
            <div class="days-name">Thurs</div>
            <div class="days-name">Fri</div>
        </div>
        <div class="calendar-days"></div>
    </div>

    <div class="goto-buttons">
        <button type="button" class="btn prev-year">Prev Year</button>
        <button type="button" class="btn today">Today</button>
        <button type="button" class="btn next-year">Next Year</button>
    </div>

   </div>
         
</div>

<script type="text/javascript" src="<?php echo URLROOT;?> /public/js/calendar.js"></script>

<!----------------------------------------Popup message------------------------------------------------------>
<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 10%;">
                <form action="<?php echo URLROOT;?> /workers/worker_schedule" method="POST">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top:1em; margin-left:30%;">Work Schedule <img src="<?php echo URLROOT;?> /public/img/schedule.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="name" style="color: #0526BA;">Name of Customer</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="text" id="name" name="name" placeholder="Enter your Name" required>
                            <span class="invalidFeedback">
                                <?php  echo $data['nameError'];?>
                            </span> </br> </br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="address" style="color: #0526BA;">Address</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="text" id="address" name="address" placeholder="Enter your Address" required>
                            <span class="invalidFeedback">
                                <?php  echo $data['addressError'];?>
                            </span> </br> </br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="contact" style="color: #0526BA;">Contact Number</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required>
                            <span class="invalidFeedback">
                                <?php  echo $data['contactError'];?>
                            </span> </br> </br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="start" style="color: #0526BA;">Start Time</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="time" id="start" name="start" placeholder="Enter Start Time" required>
                            <span class="invalidFeedback">
                                <?php  echo $data['startTimeError'];?>
                            </span> </br> </br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="end" style="color: #0526BA;">End Time</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="time" id="end" name="end" placeholder="Enter End Time" required>
                            <span class="invalidFeedback">
                                <?php  echo $data['endTimeError'];?>
                            </span> </br> </br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="date" style="color: #0526BA;">Date</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="date" id="date" name="date" placeholder="Enter Date" required>
                            <span class="invalidFeedback">
                                <?php  echo $data['dateError'];?>
                            </span> </br> </br>
                            </div>
                        </div>
                        </br> </br>
                        <div class="row">
                            <button type="submit" class="blue-button" style="margin-left:45%;">Submit</button>
                        </div>
                        </br>
                </form>
        </div>
    </div>

            <script type="text/javascript" src="<?php echo URLROOT;?> /public/js/pink-button-popup.js"></script>

<!--------------------------------------Pending Works--------------------------------------------------------->
<div class="category" id="pending-works" style="margin-top: 3em; margin-left:8em;"> <p > Pending Works</p> </div>

<div class="table">
    <div class="table-wrapper" style=" margin-left:23em;">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <th>Profile Pic</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Schedule Time</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($data['work'] as $work): ?>
                <tr>
                    <td><img src="<?php $work->prof_pic?>" class="table-image" style="border-radius: 50px;"></td>
                    <td><?php echo $work->address?></td>
                    <td><?php echo $work->date?></td>
                    <td><?php echo $work->start_time . "-" . $work->end_time?></td>
                    <td><?php echo $work->created_at?></td>
                    <!-- <td> <form action="<?php //echo URLROOT . "/workers/finish_work/". $work->schedule_id;?>" method="POST"><input type="reset" class="pink-out-button" value="Finish"/></form></td> -->
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table> 
    </div> 
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
