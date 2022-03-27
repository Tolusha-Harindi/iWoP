<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/sidenav.css"/>


<a href="<?php echo URLROOT;?>/workers/worker_profile_edit" class='card-link'>
    <div class="card">
        <div class="img-container">
            <img src="<?php echo URLROOT; ?>/public/img/<?php echo $_SESSION['prof_pic']?>" alt="propic" class="img1"/>
        </div>
        <p class='title'><?php echo $_SESSION['fname']?></p>
        <div class="description">
                <ul class='list'>
                    <li>Edit profile</li>
                </ul>
        </div>
    </div>
</a>


    <div class="sidebar">
        <div class="description">
        <a href="<?php echo URLROOT;?>/workers/worker_dashboard"class='side-link-active'>
                <ul class='side-list-active'>
                    <li>Dashboard</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/workers/worker_chat"class='side-link'>
                <ul class='side-list'>
                    <li>Message</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/workers/worker_schedule"class='side-link'>
                <ul class='side-list'>
                    <li>Schedule</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/workers/worker_job_vaccancies"class='side-link'>
                <ul class='side-list'>
                    <li>Job Vaccancies</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/workers/worker_all_ads"class='side-link'>
                <ul class='side-list'>
                    <li>Posted Ads</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/workers/worker_job_invite"class='side-link'>
                <ul class='side-list'>
                    <li>Job Invites</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/workers/worker_bank_edit"class='side-link'>
                <ul class='side-list'>
                    <li>Bank Details</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/workers/worker_payment"class='side-link'>
                <ul class='side-list'>
                    <li>Payments</li>
                </ul>
        </a>
                
        </div>
    </div>


