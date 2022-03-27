
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
            <!---------------------------------------------------------------------------------------------------->
            <?php foreach($data['ads'] as $ads): ?> 
            <form action="<?php echo URLROOT; ?>/admins/admin_pendingads" method="POST">
                <div class="ad-space">
                <input type="hidden" name="ads_id" value="<?php echo $ads->ads_id; ?>">
                    <div class="img-user">
                        <img src="<?php echo URLROOT;?>/public/img/<?php echo $ads->prof_pic; ?>" alt="propic" class="img-ad"/>
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
                                <p class="detail"><?php echo $ads->fname; ?> <?php echo $ads->lname; ?> </p>
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
                        
                            <table>
                            <tr>
                                <td>
                            <input type="submit" value="Approve" class="blue-button" style="padding: 8px 24px; margin-left:5em;display:inline;">
            </form> 
                            </td>
                        
                            <td>         
            <form action ="<?php echo URLROOT; ?>/admins/admin_rejectads" method="POST">  
                            <input type="hidden" name="ads_id" value="<?php echo $ads->ads_id; ?>">
                            <input type="submit" value="Reject" class="pink-button" style="float:right; margin-left:2em; display:inline; width:100px">
            </form>
                            </td>
                            </tr>
                            </table>
                        </div>
                </div>
            <?php endforeach; ?>
        </div>
    



<!----------------------------------------Company ads----------------------------------------------->
<!------heading----------->
<div class="heading" id="company-ads" style="margin-left: 4em;"> <p> Company Pending Ads </p> </div>

<div class="customer-ad">
    <div class="ad-space-row" style="margin-left: -28em;">
        <!-- <div class="grid-container"> -->
            <!---------------------------------------------------------------------------------------------------->
            <?php foreach($data['adsw'] as $adsw): ?> 
            <form action="<?php echo URLROOT; ?>/admins/admin_pendingads" method="POST">
            <div class="ad-space">
                <input type="hidden" name="ads_id" value="<?php echo $adsw->ads_id; ?>">
                    <div class="img-user">
                        <img src="<?php echo URLROOT; ?>/public/img/<?php echo $adsw->prof_pic; ?>" alt="propic" class="img-ad"/>
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
                                <p class="detail"><?php echo $adsw->com_name; ?></p>
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
                           
                <table>
                            <tr>
                                <td>
                            <input type="submit" value="Approve" class="blue-button" style="padding: 8px 24px; margin-left:5em;display:inline;">
            </form> 
                            </td>
                        
                            <td>         
            <form action="<?php echo URLROOT; ?>/admins/admin_pendingads" method="POST" >  
                            <input type="hidden" name="ads_id" value="<?php echo $adsw->ads_id; ?>">
                            <input type="submit" value="Reject" class="pink-button" style="float:right; margin-left:2em; display:inline; width:100px">
            </form>
                            </td>
                            </tr>
                            </table>
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