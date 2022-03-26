
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/customer/dashboard.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
</br>
<div class="dashboard" style="margin-top:-15em"> <p> Dashboard </p> </div>

<!------------------------------------------------- dashboard count boxes----------------------------------------------------------->
<div class="tile-line">
    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Message Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?> /public/img/message.png" alt="">
        </div>
    
        <div class="dash-card" id="card2">
            <h3>Due Payment Count</h3>
            <h1> 25 </h1>
            <img src="<?php echo URLROOT;?> /public/img/due-payments.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Recent Workers Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?> /public/img/worker-conut.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Pending Ads Count</h3>
            <?php foreach($data['pending'] as $pending): ?>
                <h1> <?php echo $pending->pendingCount; ?> </h1>
            <?php endforeach; ?>
            <img src="<?php echo URLROOT;?> /public/img/complaint3.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Accepted Ads Count</h3>
            <?php foreach($data['accepted'] as $accepted): ?>
                <h1> <?php echo $accepted->acceptedCount; ?> </h1>
            <?php endforeach; ?>
            <img src="<?php echo URLROOT;?> /public/img/ads1.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Rejected ads Count</h3>
            <?php foreach($data['rejected'] as $rejected): ?>
            <h1> <?php echo $rejected->rejectedCount; ?> </h1>
            <?php endforeach; ?>
            <img src="<?php echo URLROOT;?> /public/img/delete.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Accepted Count by Workers</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?> /public/img/accept.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Rejected Count by Workers</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?> /public/img/reject.png" alt="">
        </div>

    </div>
</div>


<!------------------------------------------------------Top five categories------------------------------------------------------>
<div class="heading"> <p> Top Job Categories </p> </div>

<div class="tile-line">
    <div class="row1">

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/category/air-conditioner.png" alt=""> </br>
            <p>AC repair</p>
        </div>
    
        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/category/cctv.png" alt="">
            <p>CCTV repair</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/category/electrician.png" alt="">
            <p>Electrician</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/category/plumber.png" alt="">
            <p>Plumber</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/category/waiter.png" alt="">
            <p>Waiter</p>
        </div>

    </div>
</div>



<!------------------------------------------------------Top five Service Providers------------------------------------------------------>
<div class="heading"> <p> Top Service Providers </p> </div>

<div class="tile-line">
    <div class="row1">

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?> /public/img/admin.jpg" alt="" style="border-radius: 50px;"> </br>
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">AC repair</p>
            <p>Colombo</p>
            <p>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
        </div>
    
        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?> /public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">CCTV repair</p>
            <p>Colombo</p>
            <p>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
        </div>

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?> /public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">Electrician</p>
            <p>Colombo</p>
            <p>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
        </div>

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?> /public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">Plumber</p>
            <p>Colombo</p>
            <p>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
        </div>

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?> /public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">Waiter</p>
            <p>Colombo</p>
            <p>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star checked" style="color: orange;"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
        </div>

    </div>
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>