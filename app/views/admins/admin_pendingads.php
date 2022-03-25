
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/admin/ads.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<a href="#customer-ads" class="top-button1"  style="margin-left:78em; width:10em;"> Customer Ads </a>
<a href="#company-ads" class="top-button2" style="margin-left:65em;"> Company Ads </a>
                


<!----------------------------------------customer Ads----------------------------------------------->
<!------heading----------->
<div class="heading"  style="margin-top: -20em;"> <p> Customer Pending Ads </p> </div>


<div class="customer-ad">
    <div class="ad-space-row">
        <div class="grid-container">
            <!---------------------------------------------------------------------------------------------------->
            <?php foreach($data['ads'] as $ads): ?> 
                <div class="ad-space">
                    <div class="img-user">
                        <img src="<?php echo URLROOT;?>/public/img/w3.jpg" alt="propic" class="img-ad"/>
                    </div>
                    <p class="title1"><?php echo $ads->title; ?></p>
                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Category :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $ads->category; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Posted by :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">Pathum Gamage </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Posted Date :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"> <?php echo date('j F Y', strtotime($ads->post_date)) ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Contact :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $ads->contact; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Address :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $ads->address; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Description :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $ads->description; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Work to be done:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <img src="<?php echo URLROOT ?>/public/img/<?php echo $ads->work; ?>" class="work">
                            </div>
                        </div>

                        </br>
                        <div class="ad-row" style="margin-bottom: 1.5em; margin-top:1.5em">
                            <input type="submit" value="Approve" class="blue-button" style="padding: 8px 7px; margin-left:30%;display:inline;">
                            <input type="submit" value="Reject" class="pink-button" style="float:right; margin-right:30%; display:inline;">
                        </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<!----------------------------------------Worker complaints----------------------------------------------->
<!------heading----------->
<div class="heading" id="company-ads"> <p> Company Pending Ads </p> </div>

<div class="customer-ad">
    <div class="ad-space-row">
        <div class="grid-container">
            <!---------------------------------------------------------------------------------------------------->
            <?php foreach($data['adsw'] as $adsw): ?> 
            <div class="ad-space">
                    <div class="img-user">
                        <img src="<?php echo URLROOT;?>/public/img/w3.jpg" alt="propic" class="img-ad"/>
                    </div>
                    <p class="title1"><?php echo $adsw->title; ?></p>
                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Category :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $adsw->category; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Posted by :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">Pathum Gamage </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Posted Date :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo date('j F Y', strtotime($adsw->created_at)) ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Contact :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $adsw->contact; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Location :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $adsw->address; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Description :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $adsw->description; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Work to be done:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <img src="<?php echo URLROOT ?>/public/img/<?php echo $adsw->work; ?>" class="work">
                            </div>
                        </div>

                        </br>
                        <div class="ad-row" style="margin-bottom: 1.5em; margin-top:1.5em">
                            <input type="submit" value="Approve" class="blue-button" style="padding: 8px 7px; margin-left:30%;display:inline;">
                            <input type="submit" value="Reject" class="pink-button" style="float:right; margin-right:30%; display:inline;">
                        </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

  
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>