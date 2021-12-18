<?php include("../home/topnav.php"); ?>

<?php include("../home/customer_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link rel='stylesheet' href="../../../public/css/customer/ads.css"/>
<link rel='stylesheet' href="../../../public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<a href="#post-new-ad" class="top-button1" style="margin-top: -41em;margin-left:78em; width:10em;"> Post a New ad </a>
<a href="#responses" class="top-button2" style="margin-top: -41em; margin-left:62em;"> Responses for requests </a>
<a href="#posted-ads" class="top-button3" style="margin-top: -41em; margin-left:51em"> Posted Ads</a>


<div class="heading" id="posted-ads" style="margin-top: -20em; margin-left:15em;"> <p>Requests for posted Ads </p> </div>
<div class="customer-ad" >
    <div class="ad-space-row">
            <!----------------------------------------posted-ad------------------------------------------------------------>
            <div class="ad-space" style="margin-left:-0.5em;">

                    <p class="title1" style="margin-top:1.5em"> Need a Plumber</p>
                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Category :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">Plumber </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Contact :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">071 777 7778 </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Location :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">Colombo </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Description :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"> Need a well experienced plumber </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="date"> <b>Start Date :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"> 10/10/2021 </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="date"> <b>End Date :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"> 10/10/2021 </p>
                            </div>
                        </div>
						
                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b> Budget :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"> Rs.2500.00 </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Work to be done:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <img src="../../../public/img/work.jpg" class="work">
                                <img src="../../../public/img/work.jpg" class="work">
                            </div>
                        </div>
                        </br> </br>

                        <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="name"> <b style="color: gray; margin-bottom:0.5em;"> Posted on :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail" style="color: gray;margin-bottom:0.5em;">10/10/2020 </p>
                                </div>
                        </div>

                        <div class="ad-row" style="margin-bottom: 1.5em; margin-top:1.5em">
                            <input type="submit" value="Edit" class="blue-out-button" style="padding: 8px 24px; margin-left:29%; display:inline;">
                            <input type="submit" value="Delete" class="pink-out-button" style="padding: 8px 15px; float:right; margin-right:29%; display:inline;">
                        </div>
						</br> </br>
        	
            </div>
	</div>
</div>

<!---------------------------responses------------------------->
	<div class= "table" style="margin-left:20em; margin-top: -40em; width:80%;"> 
        <div class="table-wrapper"   style="margin-top: 5em;">
            <table class="fl-table">
                <tbody>
                    <tr>
						<td><img src="../../../public/img/admin.jpg" class="response-img"></td>
						<td><b>Namya Tharindi</b></td>
						<td>Galle</td>
						<td> <input type="reset" class="blue-button" style="padding: 8px 14px"  value="Accept"/></td>
						<td> <input type="reset" class="pink-button" value="Reject"/></td>
                    </tr>
					<tr>
						<td><img src="../../../public/img/admin.jpg" class="response-img"></td>
						<td><b>Namya Tharindi</b></td>
						<td>Ratnapura</td>
						<td> <input type="reset" class="blue-button" style="padding: 8px 14px" value="Accept"/></td>
						<td> <input type="reset" class="pink-button" value="Reject"/></td>
                    </tr>
					<tr>
						<td><img src="../../../public/img/admin.jpg" class="response-img"></td>
						<td><b>Namya Tharindi</b></td>
						<td>Ratnapura</td>
						<td> <input type="reset" class="blue-button" style="padding: 8px 14px" value="Accept"/></td>
						<td> <input type="reset" class="pink-button" value="Reject"/></td>
                    </tr>
                </tbody>
            </table> 
        </div> 
    </div>


<!---------------------------------------Job invite responses---------------------------------------->
<div class="heading" id="responses" style="margin-top: 15em; margin-left:15em;"> <p> Job invite responses </p> </div>

<div class= "table" style="margin-left:-7em;"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td><img src="../../../public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Kasun Perera</td>
                        <td style="color: #F10B67;">Accepted</td>
                        <td>Plumber</td>
                        <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    </tr>

                    <tr>
                        <td><img src="../../../public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Nishini Guruge</td>
                        <td style="color: #F10B67;">Rejected</td>
                        <td>Electrician</td>
                        <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    </tr>

                    <tr>
                        <td><img src="../../../public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Sandani Perera</td>
                        <td style="color: #F10B67;">Accepted</td>
                        <td>Plumber</td>
                        <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    </tr>

                     <tr>
                        <td><img src="../../../public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Nimal Perera</td>
                        <td style="color: #F10B67;">Accepted</td>
                        <td>Plumber</td>
                        <td> <input type="reset" class="blue-out-button" value="Message"/></td>
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
                    <p class="heading" style="margin-top: 1em; margin-left:35%;">Hire a Service Provider <img src="../../../public/img/ad.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25">
                            <label for="category" style="color: #0526BA; font-size:15px;">Category</label>
                            </div>
                            <div class="col-75">
                            <!-- <input type="text" id="category" name="category" placeholder="Select category" required> -->
                                        <!------------------------------------------------------------------------------------------------------>
        
                                <select name="categoty" id="list3" style="border: 1px solid #6f7dd8; padding:10px; width:91%; border-radius:5px;">
                                    <option value =" "  selected label="Category"> Select Category</option>
                                    <option value="#" > Plumber</option>
                                    <option value="#" > Masons</option>
                                    <option value="#" > Tile</option>
                                    <option value="#" > Carpenters</option>
                                    <option value="#" > Painters</option>
                                    <option value="#" > Electricians</option>
                                    <option value="#" > Landscaping</option>
                                    <option value="#" > Contractors</option>
                                    <option value="#" > Professionals</option>
                                    <option value="#" > Stones/sand/soil</option>
                                    <option value="#" > Concrete Slab</option>
                                    <option value="#" > Equipment Repairing </option>
                                    <option value="#" > A/C</option>
                                    <option value="#" > Welding</option>
                                    <option value="#" > Cooking</option>
                                    <option value="#" > Cushion Works</option>
                                    <option value="#" > Vehicle Repairs</option>
                                    <option value="#" > Cleaners</option>
                                    <option value="#" > CCTV</option>
                                    <option value="#" > Ceiling</option>
                                    <option value="#" > Well</option>
                                    <option value="#" > Chair Weavers</option>
                                    <option value="#" > Rent Tools</option>
                                    <option value="#" > Curtains</option>
                                    <option value="#" > Solar Panel fixing</option>
                                    <option value="#" > Demolishing</option>
                                    <option value="#" > Pest Control</option>
                                    <option value="#" > Design</option>
                                    <option value="#" > Movers</option>
                                    <option value="#" > Aluminium</option>
                                    <option value="#" > Catering</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="title" style="color: #0526BA; font-size:15px;">Title</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="title" name="title" placeholder="Enter title" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="job" style="color: #0526BA; font-size:15px;">Job Description</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="job" name="job" placeholder="Enter job description" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                            <label for="address" style="color: #0526BA; font-size:15px;">Address</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Enter address" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="contact" style="color: #0526BA; font-size:15px;">Contact Number</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="contact" name="contact" placeholder="Enter contact number" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="sdate" style="color: #0526BA; font-size:15px;">Start Date</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="sdate" name="sdate" placeholder="Enter star date" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="edate" style="color: #0526BA; font-size:15px;">End Date</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="edate" name="edate" placeholder="Enter end date" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="amount" style="color: #0526BA; font-size:15px;">Budget</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="amount" name="amount" placeholder="Enter amount" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="work" style="color: #0526BA; font-size:15px;">Work to be done</label>
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
<script type="text/javascript" src="../../../public/js/top-button1-popup.js"> 
    </script>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
		<a href="#"><img src="../../../public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include("../home/footer.php"); ?>