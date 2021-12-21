<?php include("../home/topnav.php"); ?>

<?php include("../home/worker_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-------------------------------------job invite table--------------------------------------->
<div class="category" id="my-profile" style="margin-top: -14em;"> <p>Job Invites</p> </div>

<div class="table">
    <div class="table-wrapper" style="margin-top:2em;">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Profile Pic</th>
                    <th>Category</th>
                    <th>More</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                
                <tr>
                    <td>Vishnu Gowtham</td>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Plumber</td>
                    <td> <button  id="myBtn" class="blue-out-button">More </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td>Vishnu Gowtham</td>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Plumber</td>
                    <td> <button  id="myBtn" class="blue-out-button">More </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td>Vishnu Gowtham</td>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Plumber</td>
                    <td> <button  id="myBtn" class="blue-out-button">More </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td>Vishnu Gowtham</td>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Plumber</td>
                    <td> <button  id="myBtn" class="blue-out-button">More </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td>Vishnu Gowtham</td>
                    <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Plumber</td>
                    <td> <button  id="myBtn" class="blue-out-button">More </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>
            </tbody>
        </table> 
    </div> 
</div>

<br/><br/>
<a href=# style="margin-left:90%; margin-top: -60%;"><i class="fas fa-chevron-circle-up"></i></a>

<!-------------------------------------------------popup message--------------------------------------->
<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 7%;">
                <form action="">
                    <span class="close" style="margin-top:0.2em;">&times;</span>
                    <img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 200px; height:50px; width: 50px; margin-left:5%; margin-top:1em;">
                    <p class="heading" style="margin-top: -0.5em; margin-left:40%;">Job Invites</p>
                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="fname" style="color: #0526BA;">Name</label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;">Amuthan Vikram</p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="lname" style="color: #0526BA;">Contact Number</label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;">076 245 5387</p>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="contact" style="color: #0526BA;">Time</label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;">08.00 a.m.</p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="amount" style="color: #0526BA;">Start Date</label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;">29/11/2021</p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="contact" style="color: #0526BA;">Address</label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;">37, Central Road, Kalladi, Batticallo</p>
                            </div>
                        </div>

                        <div class="row" style="margin-left:3em;">
                            <div class="col-25" style="margin-top:0.7em; width: 30%;">
                            <label for="contact" style="color: #0526BA;">Budget</label>
                            </div>
                            <div class="col-75" style="margin-top:0.7em; width: 65%;">
                            <p style="color: #0526BA;">3000.00</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25" style="margin-left: 30%; width: 15%;">
                                <input type="submit" value="Accept" class="blue-button" style="margin-left:45%;">
                            </div>
                            <div class="col-75" style="width: 15%;">
                                 <input type="submit" value="Reject" class="pink-button" style="margin-left:53%; margin-top:0em; padding: 8px 25px;">
                            </div>
                        </div>
                        </br>
                </form>
        </div>
    </div>

            <script type="text/javascript" src="../../../public/js/blue-out-button-popup.js"></script>


<?php include("../home/footer.php"); ?>

