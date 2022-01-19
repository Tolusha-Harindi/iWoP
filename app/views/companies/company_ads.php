<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/company_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/customer/ads.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<?php if(isLoggedIn()): ?>  
    <a href="<?php echo URLROOT; ?> /companies/company_ads#post-new-ad" class="top-button1" style="margin-top: -37em;margin-left:78em; width:10em;"> Post a New ad </a>
<?php endif; ?>
<a href="#posted-ads" class="top-button3" style="margin-top: -37em; margin-left:65em; width:8em;"> Posted Ads</a>


<div class="heading" id="posted-ads" style="margin-top: -18em; margin-left:15em;"> <p>Requests for posted Ads </p> </div>



<?php foreach($data['posts'] as $post): ?>
    <div class="customer-ad" >
        <div class="ad-space-row">
                <!----------------------------------------posted-ad------------------------------------------------------------>
                <div class="ad-space" style="margin-left:-0.5em;">

                        <p class="title1" style="margin-top:1.5em"> <?php echo $post->title; ?></p>
                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="name"> <b>Category :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail"><?php echo $post->category ?> </p>
                                </div>
                            </div>

                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="name"> <b>Contact :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail"><?php echo $post->contact ?> </p>
                                </div>
                            </div>

                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="name"> <b>Location :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail"><?php echo $post->address ?> </p>
                                </div>
                            </div>

                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="name"> <b>Description :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail"> <?php echo $post->description ?> </p>
                                </div>
                            </div>

                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="date"> <b>Start Date :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail"> <?php echo $post->start_date ?> </p>
                                </div>
                            </div>

                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="date"> <b>End Date :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail"> <?php echo $post->end_date; ?></p>
                                </div>
                            </div>
                            
                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="name"> <b> Budget :</b> </label>
                                </div>
                                <div class="ad-col-65">
                                    <p class="detail"> Rs.<?php echo $post->budget ?> .00 </p>
                                </div>
                            </div>

                            <div class="ad-row">
                                <div class="ad-col-35">
                                    <label for="name"> <b>Work to be done:</b> </label>
                                </div>
                                    <div class="ad-col-65">
                                <img src="<?php echo URLROOT ?> /public/img/<?php echo $post->work; ?>" class="work">
                                </div>
                            </div>
                            </br> </br>

                            <div class="ad-row">
                                    <div class="ad-col-35">
                                        <label for="name"> <b style="color: gray; margin-bottom:0.5em;"> Posted on :</b> </label>
                                    </div>
                                    <div class="ad-col-65">
                                        <p class="detail" style="color: gray;margin-bottom:0.5em;"><?php echo date('j F Y h:m', strtotime($post->created_at)) ?></p>
                                    </div>
                            </div>

                            <table>
                                <tr> 
                                    <td>
                                        </br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php if(isset($_SESSION['reg_no']) && $_SESSION['reg_no'] == $post->reg_no): ?>
                                           
                                            <a class="blue-out-button" style="text-decoration:none; font-size:13px; margin-left:55%; margin-top:2.5em; padding: 8px 24px; display:inline;" href="<?php echo URLROOT . "/companies/update_ads/" . $post->ads_id ?>"> Edit </a>
                                       
                                    </td>
                                    <td>
                                        <form action="<?php echo URLROOT . "/companies/delete_ads/" . $post->ads_id ?>" method="POST">
                                            <input type="submit" name="delete" value="Delete" class="pink-out-button" style="text-decoration:none; font-size:13px; margin-left:15%; margin-top:0.2em; padding: 8px 20px; display:inline;">
                                        </form>
                                        <?php endif; ?> 
                                    </td>
                                </tr>
                            </table>
                            </br> </br>
                
                </div>
        </div>
    </div>
<?php endforeach; ?>









<!---------------------------responses------------------------->
	<div class= "table" style="margin-left:20em; margin-top: -40em; width:80%;"> 
        <div class="table-wrapper"   style="margin-top: 5em;">
            <table class="fl-table">
                <tbody>
                    <tr>
						<td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="response-img"></td>
						<td><b>Namya Tharindi</b></td>
						<td>Galle</td>
						<td> <input type="reset" class="blue-button" style="padding: 8px 14px"  value="Accept"/></td>
						<td> <input type="reset" class="pink-button" value="Reject"/></td>
                    </tr>
					<tr>
						<td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="response-img"></td>
						<td><b>Namya Tharindi</b></td>
						<td>Ratnapura</td>
						<td> <input type="reset" class="blue-button" style="padding: 8px 14px" value="Accept"/></td>
						<td> <input type="reset" class="pink-button" value="Reject"/></td>
                    </tr>
					<tr>
						<td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="response-img"></td>
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
                        <td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Kasun Perera</td>
                        <td style="color: #F10B67;">Accepted</td>
                        <td>Plumber</td>
                        <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Nishini Guruge</td>
                        <td style="color: #F10B67;">Rejected</td>
                        <td>Electrician</td>
                        <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Sandani Perera</td>
                        <td style="color: #F10B67;">Accepted</td>
                        <td>Plumber</td>
                        <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                    </tr>

                     <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
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
                <form action= "<?php echo URLROOT; ?>/companies/company_ads" method="POST">

                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:35%;">Hire a Service Provider <img src="<?php echo URLROOT;?>/public/img/ad.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25">
                            <label for="category" style="color: #0526BA; font-size:15px;">Category</label>
                            </div>
                            <div class="col-75">
                            <!-- <input type="text" id="category" name="category" placeholder="Select category" required> -->
                                        <!------------------------------------------------------------------------------------------------------>
        
                                <select name="category" id="list3" style="border: 1px solid #6f7dd8; padding:10px; width:91%; border-radius:5px;">
                                    <option value =" "  selected label="Category"> Select Category</option>
                                    <option value="Plumber" > Plumber</option>
                                    <option value="Mason" > Masons</option>
                                    <option value="Tile repair" > Tile</option>
                                    <option value="Carpenters" > Carpenters</option>
                                    <option value="Painter" > Painters</option>
                                    <option value="Electrician" > Electricians</option>
                                    <option value="Landscaping" > Landscaping</option>
                                    <option value="Contractor" > Contractors</option>
                                    <option value="Professional" > Professionals</option>
                                    <option value="Stones/sand/soil" > Stones/sand/soil</option>
                                    <option value="Concrete slab" > Concrete Slab</option>
                                    <option value="Equipment Repair" > Equipment Repairing </option>
                                    <option value="A/C Repair" > A/C</option>
                                    <option value="Welding" > Welding</option>
                                    <option value="Cook" > Cooking</option>
                                    <option value="Cushion works" > Cushion Works</option>
                                    <option value="Vehicle Repairs" > Vehicle Repairs</option>
                                    <option value="Cleaner" > Cleaners</option>
                                    <option value="CCTV Repair" > CCTV</option>
                                    <option value="Ceiling Repair" > Ceiling</option>
                                    <option value="Well Cleaner" > Well</option>
                                    <option value="Chair Weaver" > Chair Weavers</option>
                                    <option value="Rent Tools" > Rent Tools</option>
                                    <option value="Curtain Designer" > Curtains designer</option>
                                    <option value="Solar Panel fixing" > Solar Panel fixing</option>
                                    <option value="Demolishing" > Demolishing</option>
                                    <option value="Pest Control" > Pest Control</option>
                                    <option value="Designer" > Designer</option>
                                    <option value="Mover" > Movers</option>
                                    <option value="Aluminium Repair" > Aluminium</option>
                                    <option value="Catering Service" > Catering</option>
                                </select>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['categoryError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="title" style="color: #0526BA; font-size:15px;">Title</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="title" name="title" placeholder="Enter title" required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['titleError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="description" style="color: #0526BA; font-size:15px;">Job Description</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="description" name="description" placeholder="Enter job description" required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['descriptionError']; ?>
                                </span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                                <label for="address" style="color: #0526BA; font-size:15px;">Address</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="address" name="address" placeholder="Enter address" required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['addressError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="contact" style="color: #0526BA; font-size:15px;">Contact Number</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="contact" name="contact" placeholder="Enter contact number" required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['contactError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="start_date" style="color: #0526BA; font-size:15px;">Start Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="start_date" name="start_date" placeholder="Enter start date" required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['start_dateError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="end_date" style="color: #0526BA; font-size:15px;">End Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="end_date" name="end_date" placeholder="Enter end date" required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['end_dateError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="budget" style="color: #0526BA; font-size:15px;">Budget</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="budget" name="budget" placeholder="Enter budget" required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['budgetError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="work" style="color: #0526BA; font-size:15px;">Work to be done</label>
                            </div>
                            <div class="col-75">
                                <input type="file" id="work" name="work"  required>
                                </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['workError']; ?>
                                </span>
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
<script type="text/javascript" src="<?php echo URLROOT;?>/public/js/top-button1-popup.js"> 
    </script>




<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>