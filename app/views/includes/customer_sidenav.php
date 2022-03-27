
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/sidenav.css"/>


<a href ="<?php echo URLROOT;?>/customers/customer_profile" class='card-link'>
    
    <div class="card">
    <!-- <?php foreach($data['customers'] as $customers): ?>
        <div class="img-container">
            <img src="<?php echo URLROOT ?>/public/img/<?php echo $customers->prof_pic; ?>" class="img1"/>
        </div>
        
        <p class='title'><?php echo $customers->fname; ?></p>
    <?php endforeach; ?>   -->

    <div class="img-container">
            <img src="<?php echo URLROOT ?>/public/img/<?php echo $_SESSION['prof_pic']?>" class="img1"/>
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
        <a href="<?php echo URLROOT;?>/customers/customer_dashboard" class='side-link'>
                <ul class='side-list'>
                    <li>Dashboard</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/customers/customer_responses" class='side-link'>
                <ul class='side-list'>
                    <li>Ads & Responses</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/customers/customer_recent_workers" class='side-link'>
                <ul class='side-list'>
                    <li>Recent Workers</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/customers/customer_category" class='side-link'>
                <ul class='side-list'>
                    <li>Category</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/customers/customer_service_providers" class='side-link'>
                <ul class='side-list'>
                    <li>Service Providers</li>
                </ul>
        </a>

        <a href="<?php echo URLROOT;?>/customers/customer_change_password" class='side-link'>
                <ul class='side-list'>
                    <li>Change Password</li>
                </ul>
        </a>
                
        </div>
    </div>


