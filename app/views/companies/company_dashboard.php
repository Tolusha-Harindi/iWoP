
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/company_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/company/dashboard.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
<div class="dashboard" style="margin-top: -14em;"> <p> Dashboard </p> </div>

<!------------------------------------------------- dashboard count boxes----------------------------------------------------------->
<div class="tile-line">
    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Messages Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?>/public/img/manager.png" alt="">
        </div>
    
        <div class="dash-card" id="card2">
            <h3>Category Count</h3>
            <h1> 25 </h1>
            <img src="<?php echo URLROOT;?>/public/img/category.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Recent workers Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/ads1.png" alt="">
        </div>

    </div>


    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Posted Ads Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?>/public/img/customer-remove.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Deletedted Ads Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/worker-remove.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Accepted count by workers</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/ads1.png" alt="">
        </div>

    </div>
</div>


<!------------------------------------------------------Top five categories------------------------------------------------------>
<div class="heading"> <p> Top Five Job Categories </p> </div>

<div class="tile-line">
    <div class="row1">

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/category/air-conditioner.png" alt=""> </br>
            <p>AC repair</p>
        </div>
    
        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/category/cctv.png" alt="">
            <p>CCTV repair</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/category/electrician.png" alt="">
            <p>Electrician</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/category/plumber.png" alt="">
            <p>Plumber</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/category/waiter.png" alt="">
            <p>Waiter</p>
        </div>

    </div>
</div>



<!------------------------------------------------------Top five Service Providers------------------------------------------------------>
<div class="heading"> <p> Top Five Service Providers </p> </div>

<div class="tile-line">
    <div class="row1">

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?>/public/img/admin.jpg" alt="" style="border-radius: 50px;"> </br>
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">AC repair</p>
        </div>
    
        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?>/public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">CCTV repair</p>
        </div>

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?>/public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">Electrician</p>
        </div>

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?>/public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">Plumber</p>
        </div>

        <div class="dash-card-top-service" id="card">
            <img src="<?php echo URLROOT;?>/public/img/admin.jpg" alt="" style="border-radius: 50px;">
            <p>Kamal Perera</p>
            <p style="color: #1E3CC0;">Waiter</p>
        </div>

    </div>
</div>


<!------------------------------------------------------Top five Companies------------------------------------------------------>
<div class="heading"> <p> Top Five Companies </p> </div>

<div class="tile-line">
    <div class="row1">

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/comp.png" alt="" style="border-radius: 50px;"> </br>
            <p>Dream Wave</p>
        </div>
    
        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?>/public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

    </div>
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div> 

<?php include_once APPROOT . '/views/includes/footer.php'; ?>