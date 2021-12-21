
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/admin/dashboard.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
<div class="dashboard"> <p> Dashboard </p> </div>

<!------------------------------------------------- dashboard count boxes----------------------------------------------------------->
<div class="tile-line">
    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Manager Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?>/public/img/manager.png" alt="">
        </div>
    
        <div class="dash-card" id="card2">
            <h3>Category Count</h3>
            <h1> 25 </h1>
            <img src="<?php echo URLROOT;?>/public/img/category.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Pending Ads Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/ads1.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Customer Complaint Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?>/public/img/complaint1.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Worker Complaint Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/complaint2.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Company Complaint Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/complaint3.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Customers Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?>/public/img/customer.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Workers Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/worker.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Companies Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/company.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Removed Customers Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?>/public/img/customer-remove.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Removed Workers Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/worker-remove.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Removed Companies Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?>/public/img/comp-remove.png" alt="">
        </div>

    </div>
</div>


<!------------------------------------------------------Top five categories------------------------------------------------------>
<div class="heading"> <p> Top Job Categories </p> </div>

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
<div class="heading"> <p> Top Service Providers </p> </div>

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
<div class="heading"> <p> Top Companies </p> </div>

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