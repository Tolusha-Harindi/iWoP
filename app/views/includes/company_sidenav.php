
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/sidenav.css"/>


    <a href="<?php echo URLROOT;?>/companies/company_profile" class='card-link'>
        <div class="card" style ="width: 15vm;">
            <div class="img-container">
                <img src="<?php echo URLROOT;?> /public/img/<?php echo $_SESSION['prof_pic']?>" alt="propic" class="img1"/>
            </div>
            <p class='title'><?php echo $_SESSION['com_name']?></p>
            <div class="description">
                    <ul class='list'>
                        <li style="margin-top: -5px;">Edit profile </li>
                    </ul>
            </div>
        </div>
    </a>

    
    <div class="sidebar">
        <div class="description">
        <a href="<?php echo URLROOT;?>/companies/company_dashboard" class='side-link'>
                <ul class='side-list'>
                    <li>Dashboard</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/companies/company_ads" class='side-link'>
                <ul class='side-list'>
                    <li>Responses</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/companies/company_category" class='side-link'>
                <ul class='side-list'>
                    <li>Category</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/companies/company_inviteforjob" class='side-link'>
                <ul class='side-list'>
                    <li>Service providers</li>
                </ul>
        </a>
        <a href="<?php echo URLROOT;?>/companies/company_messagee" class='side-link'>
                <ul class='side-list'>
                    <li>Message</li>
                </ul>
        </a>
                
        </div>
    </div>

   
