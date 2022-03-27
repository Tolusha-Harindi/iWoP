<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/sidenav.css"/>


<a href="<?php echo URLROOT;?>/managers/manager_profile" class='card-link'>
    <div class="card">
		
		<!-- <?php foreach($data['manager'] as $manager): ?>
            <div class="img-container">
                <img src="<?php echo URLROOT ?>/public/img/<?php echo $manager->profile; ?>"  class="img1"/>
            </div>
            <?php endforeach; ?>-->
		
        <div class="img-container">
            <img src="<?php echo URLROOT;?>/public/img/w3.jpg" alt="propic" class="img1"/>
        </div>
		
		  <!-- <?php foreach($data['includes'] as $include): ?>
                <p class='title'><?php echo $include->name; ?></p>
            <?php endforeach; ?>  -->
		
        <p class='title'></p>
        <div class="description">
                <ul class='list'>
                    <li>Edit profile</li>
                </ul>
        </div>
    </div>
</a>


<div class="sidebar">
    <div class="description">
        <a href="<?php echo URLROOT;?>/managers/manager_dashboard" class='side-link-active'>
                <ul class='side-list-active'>
                    <li>Dashboard</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/managers/manager_pending_requests" class='side-link'>
                <ul class='side-list'>
                    <li>Pending Requests</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/managers/manager_category" class='side-link'>
                <ul class='side-list'>
                    <li>Category</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/managers/manager_service_providers" class='side-link'>
                <ul class='side-list'>
                    <li>Service Providers</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/managers/manager_company" class='side-link'>
                <ul class='side-list'>
                    <li>Companies</li>
                </ul>
        </a> 
        <a href="<?php echo URLROOT;?>/managers/manager_change_password" class='side-link'>
                <ul class='side-list'>
                    <li>Change Password</li>
                </ul>
        </a>
    </div>
</div>


