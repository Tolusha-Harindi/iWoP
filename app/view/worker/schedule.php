<?php include("../home/topnav.php"); ?>

<?php include("../home/worker_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link rel='stylesheet' href="../../../public/css/worker/calender.css"/>
<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<a href="#change-password" class="top-button1" style="margin-top: -44em;"> Work Schedule </a>
<a href="#my-service" class="top-button2" style="margin-top: -44em;"> Pending Works </a>

<!----------------------------------------Schedule calender------------------------------------------------>
<div class="category" id="my-profile" style="margin-top: -15em; margin-left: 8em;"> <p> Work Schedule</p> </div>

<div class="calender">
    <div class="row-01">
    
        <div class="day-time">
            <div class="date"><p><b>30<sup>th</sup> October 2021<br/>4.30 PM</b></p></div>
            <div class="btn-plan"><button id="myBtn" class="pink-button" style="padding: 8px 43px; margin-left:-25em;">Plan</button></div>
        </div>

        <div class="day-time">
            <div class="date"><p><b>30<sup>th</sup> October 2021<br/>4.30 PM</b></p></div>
            <div class="btn-plan"><button class="pink-button" style="padding: 8px 43px; margin-left:-25em;">Plan</button></div>
        </div>

    </div>
</div>

<!----------------------------------------Popup message------------------------------------------------------>
<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 10%;">
                <form action="">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top:1em; margin-left:30%;">Work Schedule <img src="../../../public/img/schedule.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="name" style="color: #0526BA;">Name of Customer</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="text" id="name" name="name" placeholder="Enter your Name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="address" style="color: #0526BA;">Address</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="text" id="address" name="address" placeholder="Enter your Address" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="contact" style="color: #0526BA;">Contact Number</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="start" style="color: #0526BA;">Start Time</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="time" id="start" name="start" placeholder="Enter Start Time" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="end" style="color: #0526BA;">End Time</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="time" id="end" name="end" placeholder="Enter End Time" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="width: 30%;">
                            <label for="date" style="color: #0526BA;">Date</label>
                            </div>
                            <div class="col-75" style="width: 70%;">
                            <input type="date" id="date" name="date" placeholder="Enter Date" required>
                            </div>
                        </div>
                        </br> </br>
                        <div class="row">
                            <input type="submit" value="Submit" class="blue-button" style="margin-left:45%;">
                        </div>
                        </br>
                </form>
        </div>
    </div>

            <script type="text/javascript" src="../../../public/js/pink-button-popup.js"></script>

<!----------------------------------------------Scheduling-------------------------------------------------->
<!--<div class="sheduling">
    <div class="row-01">

        <div class="event">
            <p>scheduling</p>
        </div>

    </div>
</div>-->

<!--------------------------------------Pending Works--------------------------------------------------------->
<div class="category" id="my-profile" style="margin-top: 3em; margin-left:8em;"> <p > Pending Works</p> </div>

<div class="table">
    <div class="table-wrapper" style=" margin-left:23em;">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <th>Profile Pic</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Category</th>
                    <th>Message</th>
                    <th>Finish</th>
                </tr>
            </thead>

            <tbody>
                
                <tr>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Galle</td>
                    <td>10/11/2021</td>
                    <td>8.00AM-9.00AM</td>
                    <td>Driver</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    <td> <input type="reset" class="pink-out-button" value="Finish"/></td>
                </tr>

                <tr>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Galle</td>
                    <td>10/11/2021</td>
                    <td>8.00AM-9.00AM</td>
                    <td>Driver</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    <td> <input type="reset" class="pink-out-button" value="Finish"/></td>
                </tr>

                <tr>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Galle</td>
                    <td>10/11/2021</td>
                    <td>8.00AM-9.00AM</td>
                    <td>Driver</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    <td> <input type="reset" class="pink-out-button" value="Finish"/></td>
                </tr>

                <tr>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Galle</td>
                    <td>10/11/2021</td>
                    <td>8.00AM-9.00AM</td>
                    <td>Driver</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    <td> <input type="reset" class="pink-out-button" value="Finish"/></td>
                </tr>


            </tbody>
        </table> 
    </div> 
</div>

<?php include("../home/footer.php"); ?>