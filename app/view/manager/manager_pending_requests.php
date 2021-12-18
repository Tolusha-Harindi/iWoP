<?php include("../home/topnav.php"); ?>

<?php include("../home/manager_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<a href="#service" class="top-button1" style="margin-top: -37em; margin-left:78em;width:10em;"> Service Providers </a>
<a href="#company" class="top-button2" style="margin-top: -37em; margin-left:65em;"> Companies </a>

<!--------------------------------- Service Providers----------------------------------------------------->
<div class="heading" id="service" style="margin-top: -18em; margin-bottom: 1.5em;"> <p> Service Providers </p> </div>

<!--------------------------------Service Providers table----------------------------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top: 3em;">
            <table  class="fl-table" style="border-spacing: 25px;">
                <thead>
                    <tr>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td><img src="../../../public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="../../../public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                     <tr>
                        <td><img src="../../../public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>

<!------------------------------------------------------------popoup window------------------------------------------------------------->

<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 2%;">
                <form action="">

                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:35%;"> Service Provider <img src="../../../public/img/ad.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25">
                            <label for="title" style="color: #0526BA; font-size:15px;">Name</label>
                            </div>
                            <div class="col-75">
                            <p> Kamal Gunasekara </p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                            <label for="title" style="color: #0526BA; font-size:15px;">Address</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="title" name="title" placeholder="Enter title" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="job" style="color: #0526BA; font-size:15px;">Category</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="job" name="job" placeholder="Enter job description" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                            <label for="address" style="color: #0526BA; font-size:15px;">NIC Number</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Enter address" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="contact" style="color: #0526BA; font-size:15px;">Email</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="contact" name="contact" placeholder="Enter contact number" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="sdate" style="color: #0526BA; font-size:15px;">Contact Number</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="sdate" name="sdate" placeholder="Enter star date" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="edate" style="color: #0526BA; font-size:15px;">Qualification</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="edate" name="edate" placeholder="Enter end date" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="amount" style="color: #0526BA; font-size:15px;">GS Certificate</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="amount" name="amount" placeholder="Enter amount" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="work" style="color: #0526BA; font-size:15px;">Scan copy of NIC</label>
                            </div>
                            <div class="col-75">
                            <input type="file" id="work" name="work"  required>
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

<!------------------Java Script -  popup message------------------------------->
<script type="text/javascript" src="../../../public/js/blue-out-button-popup.js"> </script>



<!-------------------------------------------------------------------- Companies---------------------------------------------------------------------->
<div class="heading" id="company" style="margin-bottom: 1.5em;"> <p> Companies </p> </div>

<!--------------------------------Companies----------------------------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top: 3em;">
            <table  class="fl-table" style="border-spacing: 25px;">
                <thead>
                    <tr>
                        <th>Company logo</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td><img src="../../../public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="../../../public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="../../../public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                     <tr>
                        <td><img src="../../../public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>




<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="../../../public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include("../home/footer.php"); ?>