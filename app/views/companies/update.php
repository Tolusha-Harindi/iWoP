<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/company_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/customer/ads.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">





<div class="modal-content" style="margin-top: -35%; margin-left:37%;  border-color:#0526BA">
        <form action= "<?php echo URLROOT; ?>/companies/update/ <?php echo $data['post']->ads_id ?>" method="POST">

            
            <p class="heading" style="margin-top: 1em; margin-left:35%;">Update your Post <img src="<?php echo URLROOT;?>/public/img/ad.png" class="popup-image"></p>
                <div class="row">
                    <div class="col-25">
                        <label for="category" style="color: #0526BA; font-size:15px;">Category</label>
                    </div>
                    <div class="col-75">
                    
                                <!------------------------------------------------------------------------------------------------------>

                        <select name="category" id="list3" value="<?php echo $data['post']->category ?>" style="border: 1px solid #6f7dd8; padding:10px; width:91%; border-radius:5px;">
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
                        <input type="text" id="title" name="title" value="<?php echo $data['post']->title ?>">
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
                        <input type="text" id="description" name="description" value="<?php echo $data['post']->description ?>">
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
                        <input type="text" id="address" name="address" value="<?php echo $data['post']->address ?>">
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
                        <input type="text" id="contact" name="contact" value="<?php echo $data['post']->contact ?>">
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
                        <input type="date" id="start_date" name="start_date" value="<?php echo $data['post']->start_date ?>">
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
                        <input type="date" id="end_date" name="end_date" value="<?php echo $data['post']->end_date ?>">
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
                        <input type="text" id="budget" name="budget" value="<?php echo $data['post']->budget ?>">
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
                        <input type="file" id="work" name="work" value="<?php echo $data['post']->work ?>">
                        </br> 
                        <span class="invalidFeedback">
                            <?php echo $data['workError']; ?>
                        </span>
                    </div>
                </div>
                </br> </br>
                <table>
                    <tr>
                        <td>
                            <input type="submit" value="Update" class="blue-button" style="margin-left:21em">
                        </td>
                        <td>
                            <a class="pink-button" style="text-decoration:none; font-size:13px; margin-left:2em; margin-top:2.5em; padding: 9px 24px; display:inline;" href="<?php echo URLROOT; ?> /companies/company_ads/"> Cancel </a>
                        </td>
                    </tr>
                </table>
                </br>
        </form>
</div>





<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>