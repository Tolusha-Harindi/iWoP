<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/worker/dashboard.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>

<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<!------heading----------->
</br>
<div class="dashboard"> <p> Dashboard </p> </div>

<!------------------------------------------------- dashboard count boxes----------------------------------------------------------->
<div class="tile-line">
    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Invite Jobs  Count</h3>
            <h1><?php echo $data['invites'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/message.png" alt="">
        </div>
    
        <div class="dash-card" id="card2">
            <h3>Pending Works Count</h3>
            <h1><?php echo $data['pending'];?> </h1>
            <img src="<?php echo URLROOT;?> /public/img/pending_work.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Completed Works Count</h3>
            <h1><?php echo $data['complete'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/completed.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Applied Job Vaccancies Count</h3>
            <h1><?php echo $data['applyJob'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/applied_job.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Applied Ads Count</h3>
            <h1><?php echo $data['applyAds'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/applied_ads.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Total Works Count</h3>
            <h1><?php echo $data['works'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/works.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Accepted Job Vaccancies Count</h3>
            <h1><?php echo $data['acceptjobs'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/accept.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Rejected Job Vaccancies Count</h3>
            <h1><?php echo $data['rejectjobs'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/reject.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Accepted Work(Ads) Count</h3>
            <h1><?php echo $data['acceptads'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/accept_ad.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Rejected Work(Ads) Count</h3>
            <h1><?php echo $data['rejectads'];?></h1>
            <img src="<?php echo URLROOT;?> /public/img/reject_ad.png" alt="">
        </div>

    </div>
</div>

<!------------------------------------------------------Top five categories------------------------------------------------------>
<div class="heading"> <p> Top Five Job Categories </p> </div>

<div class="tile-line">
    <div class="row1">
     <?php foreach($data['category'] as $category):?>
        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT . "/public/img/category/" . $category->logo;?><?php //$category->logo ?>" alt=""> </br>
            <p><?php echo $category->category ?></p>
        </div>
    <?php endforeach;?>

    </div>
</div>

<!------------------------------------------------------Top five Service Providers------------------------------------------------------>
<div class="heading"> <p> Top Five Service Providers </p> </div>

<div class="tile-line">
    <div class="row1">
    <?php foreach($data['worker'] as $worker):?>
        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT . "/public/img/" . $worker->prof_pic;?>" alt="" style="border-radius: 50px;"> </br>
            <p><?php echo $worker->fname ?></p>
            <p style="color: #1E3CC0;"><?php echo $worker->category1;?></p>
            <p><?php echo $worker->city;?></p>
            <p><?php echo $worker->district;?>
            </p>
        </div>
        <?php endforeach;?>

    </div>
</div>

<!------------------------------------------------------Top five Companies------------------------------------------------------>
<div class="heading"> <p> Top Five Companies </p> </div>

<div class="tile-line">
    <div class="row1">
    <?php foreach($data['company'] as $company):?>
        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT . "/public/img/" . $company->prof_pic;?><?php //$company->prof_pic;?>" alt="" style="border-radius: 50px;"> </br>
            <p><?php echo $company->com_name;?></p>
        </div>
        <?php endforeach;?>
    </div>
</div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
