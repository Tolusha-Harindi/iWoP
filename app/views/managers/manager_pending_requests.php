<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php  include_once APPROOT . '/views/includes/manager_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<a href="#service" class="top-button1" style="margin-top: -47em; margin-left:78em;width:10em; position: inherit;"> Service Providers </a>
<a href="#company" class="top-button2" style="margin-top: -47em; margin-left:65em; position: inherit;" > Companies </a>

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
                        <td><img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="blue-out-button" value="More" style="width:6em";/></td>
                    </tr>

                     <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
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
                    <p class="heading" style="margin-top: 1em; margin-left:35%;"> Service Provider <img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="popup-image" style="border-radius:400px;"></p>

                        <table>
                            <tr>
                                <td> <label for="name" style="color: #0526BA; font-size:15px;">Name</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> Kamal Gunasekara</td>
                            </tr>
                            <tr>
                                <td> <label for="address" style="color: #0526BA; font-size:15px;">Address</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> Kirulupana, Colombo</td>
                            </tr>
                            <tr>
                                <td> <label for="category" style="color: #0526BA; font-size:15px;">Category</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> Carpenter</td>
                            </tr>
                            <tr>
                                <td> <label for="nic-number" style="color: #0526BA; font-size:15px;">NIC Number</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> 123456789V</td>
                            </tr>
                            <tr>
                                <td><label for="email" style="color: #0526BA; font-size:15px;">Email</label> </td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> 123@gmail.com</td>
                            </tr>
                            <tr>
                                <td>  <label for="contact" style="color: #0526BA; font-size:15px;">Contact Number</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> 0717777777</td>
                            </tr>
                            <tr>
                                <td><label for="qualification" style="color: #0526BA; font-size:15px;">Qualification</label> </td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> NVQ level 1</td>
                            </tr>
                            <tr>
                                <td> <label for="gs" style="color: #0526BA; font-size:15px;">GS Certificate</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> <img src="<?php echo URLROOT;?> /public/img/gscertificate.jpg"></td>
                            </tr>
                            <tr> <td style="padding: 2em 4em;"> </td> </tr>
                            <tr>
                                <td> <label for="nic" style="color: #0526BA; font-size:15px;">Scan copy of NIC</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td><img src="<?php echo URLROOT;?> /public/img/nic.jpg"></td>
                                <td><img src="<?php echo URLROOT;?> /public/img/nic.jpg"></td>
                            </tr>
                            <tr> <td style="padding: 2em 4em;"> </td> </tr>
                            <tr>
                                <td> <input type="submit" value="Approve" class="blue-button" style="margin-left:160%;"></td>
                                <td><input type="submit" value="Reject" class="pink-button" style="margin-left:180%; width:7.5em;"></td>
                            </tr>
                            <tr> <td style="padding: 1em 4em;"> </td></tr>
                            </br>
                        </table>
                </form>
        </div>
</div>

<!-----------------------------------------------------Java Script -  popup message------------------------------->
<script type="text/javascript" src="<?php echo URLROOT;?> /public/js/blue-out-button-popup.js"> </script>



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
                        <td><img src="<?php echo URLROOT;?> /public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="yellow-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="yellow-out-button" value="More" style="width:6em";/></td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="yellow-out-button" value="More" style="width:6em";/></td>
                    </tr>

                     <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td> Dream wave</td>
                        <td>10/10/2021</td>
                        <td> <input type="reset" class="yellow-out-button" value="More" style="width:6em";/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>

<!------------------------------------------------------------popoup window------------------------------------------------------------->

<div id="yellowModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 2%;">
                <form action="">

                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:35%;"> Company <img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="popup-image" style="border-radius:400px;"></p>

                        <table>
                            <tr>
                                <td> <label for="comp-name" style="color: #0526BA; font-size:15px;">Company Name</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> Dream wave</td>
                            </tr>
                            <tr>
                                <td> <label for="owner-name" style="color: #0526BA; font-size:15px;">Owners Name </label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> Dimuth Perera</td>
                            </tr>
                            <tr>
                                <td> <label for="address" style="color: #0526BA; font-size:15px;">Address</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> Kirulupana, Colombo</td>
                            </tr>
                            <tr>
                                <td> <label for="reg-number" style="color: #0526BA; font-size:15px;">Registered Number</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> 657876-vfg/77897/9808</td>
                            </tr>
                            <tr>
                                <td><label for="email" style="color: #0526BA; font-size:15px;">Email</label> </td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> 123@gmail.com</td>
                            </tr>
                            <tr>
                                <td>  <label for="contact" style="color: #0526BA; font-size:15px;">Contact Number</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> 0717777777</td>
                            </tr>
                            <tr>
                                <td> <label for="gs" style="color: #0526BA; font-size:15px;">GS Certificate</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td> <img src="<?php echo URLROOT;?> /public/img/gscertificate.jpg"></td>
                            </tr>
                            <tr> <td style="padding: 2em 4em;"> </td> </tr>
                            <tr>
                                <td> <label for="nic" style="color: #0526BA; font-size:15px;">Registered Certificate</label></td>
                                <td style="padding: 2em 4em;"> </td>
                                <td><img src="<?php echo URLROOT;?> /public/img/nic.jpg"></td>
                            </tr>
                            <tr> <td style="padding: 2em 4em;"> </td> </tr>
                            <tr>
                                <td> <input type="submit" value="Approve" class="blue-button" style="margin-left:160%;"></td>
                                <td><input type="submit" value="Reject" class="pink-button" style="margin-left:180%; width:7.5em;"></td>
                            </tr>
                            <tr> <td style="padding: 1em 4em;"> </td></tr>
                            </br>
                        </table>
                </form>
        </div>
</div>

<!-----------------------------------------------------Java Script -  popup message------------------------------->
<script type="text/javascript" src="<?php echo URLROOT;?> /public/js/yellow-out-button-popup.js"> </script>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>