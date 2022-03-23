
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/sidenav.css"/>


    <a href="<?php echo URLROOT;?>/admins/admin_profile" class='card-link'>
        <div class="card">
            <div class="img-container">
                <img src="<?php echo URLROOT;?>/public/img/4140048.png" alt="propic" class="img1"/>
            </div>

            <?php //foreach($data['adname'] as $adname): ?>
                <p class='title'> Tolusha Harindi<?php ///echo $adname->name ; ?> </p>
            <?php //endforeach; ?>
            
            <div class="description">
                    <ul class='list'>
                        <li>Edit profile</li>
                    </ul>
            </div>
        </div>
    </a>

    
        <div class="sidebar">
            <div class="description">
            <a href="<?php echo URLROOT;?>/admins/admin_dashboard" class='side-link'>
                    <ul class='side-list'>
                        <li>Dashboard</li>
                    </ul>
            </a>
            <a href="<?php echo URLROOT;?>/admins/admin_manager" class='side-link'>
                    <ul class='side-list'>
                        <li>Manager</li>
                    </ul>
            </a>
            <a href="<?php echo URLROOT;?>/admins/admin_category" class='side-link'>
                    <ul class='side-list'>
                        <li>Category</li>
                    </ul>
            </a>
            <a href="<?php echo URLROOT;?>/admins/admin_pendingads" class='side-link'>
                    <ul class='side-list'>
                        <li>Pending Ads</li>
                    </ul>
            </a>
            <a href="<?php echo URLROOT;?>/admins/admin_complaints" class='side-link'>
                    <ul class='side-list'>
                        <li>Complaints</li>
                    </ul>
            </a>
            <a href="<?php echo URLROOT;?>/admins/admin_faq" class='side-link'>
                    <ul class='side-list'>
                        <li>FAQ</li>
                    </ul>
            </a>
            <a href="<?php echo URLROOT;?>/admins/admin_registered_users" class='side-link'>
                    <ul class='side-list'>
                        <li>Registered Users</li>
                    </ul>
            </a>

            <a href="<?php echo URLROOT;?>/admins/admin_change_password" class='side-link'>
                    <ul class='side-list'>
                        <li>Change Password</li>
                    </ul>
            </a>
                    
            </div>
        </div>

   
