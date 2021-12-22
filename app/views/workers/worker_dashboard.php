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
            <h3>Messages Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?> /public/img/message.png" alt="">
        </div>
    
        <div class="dash-card" id="card2">
            <h3>Pending Works Count</h3>
            <h1> 25 </h1>
            <img src="<?php echo URLROOT;?> /public/img/pending_work.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Completed Works Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?> /public/img/completed.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Applied Job Vaccancies Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?> /public/img/applied_job.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Applied Ads Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?> /public/img/applied_ads.png" alt="">
        </div>

        <div class="dash-card" id="card3">
            <h3>Total Works Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?> /public/img/works.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Accepted Job Vaccancies Count</h3>
            <h1> 28 </h1>
            <img src="<?php echo URLROOT;?> /public/img/accept.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Rejected Job Vaccancies Count</h3>
            <h1> 255 </h1>
            <img src="<?php echo URLROOT;?> /public/img/reject.png" alt="">
        </div>

    </div>

    <div class="row1">

        <div class="dash-card" id="card1">
            <h3>Accepted Work(Ads) Count</h3>
            <h1> 20 </h1>
            <img src="<?php echo URLROOT;?> /public/img/accept_ad.png" alt="">
        </div>

        <div class="dash-card" id="card2">
            <h3>Rejected Work(Ads) Count</h3>
            <h1> 235 </h1>
            <img src="<?php echo URLROOT;?> /public/img/reject_ad.png" alt="">
        </div>

    </div>
</div>

<!--------------------------------------------------Range amount and Total income----------------------------------------------->

<script src="<?php echo URLROOT;?> /public/js/dashboard.js"></script>
<div class="range">
    <div class="ran-1">
        <div class="project col-md-4">
            <h3 class="text-left">Completed Works</h3>
            <h2 class="text-left">
              <input type="text" class="percent" readonly />
            </h2>
            <div class="bar"></div>
        <div>
        
        <div class="project col-md-4">
            <h3 class="text-left">Pending Works</h3>
            <h2 class="text-left">
              <input type="text" class="percent" readonly />
            </h2>
            <div class="bar"></div>
        <div>
    </div>
</div>

<!------------------------------------------------------Top five categories------------------------------------------------------>
<div class="heading"> <p> Top Five Job Categories </p> </div>

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
<div class="heading"> <p> Top Five Service Providers </p> </div>

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

<!------------------------------------------------------Top five Companies------------------------------------------------------>
<div class="heading"> <p> Top Five Companies </p> </div>

<div class="tile-line">
    <div class="row1">

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/comp.png" alt="" style="border-radius: 50px;"> </br>
            <p>Dream Wave</p>
        </div>
    
        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

        <div class="dash-card-top" id="card">
            <img src="<?php echo URLROOT;?> /public/img/comp.png" alt="" style="border-radius: 50px;">
            <p>Dream Wave</p>
        </div>

    </div>
</div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>