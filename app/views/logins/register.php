<?php include_once APPROOT . '/views/includes/topnav2.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT?>/public/css/home/register.css"/>
<link rel='stylesheet' href="<?php echo URLROOT?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rosarivo:ital@1&display=swap" rel="stylesheet">

<table>
    <tr>
        <td> <p class="title1"><i> Find the best Job here ..............</i></p></td>
        <td> <p class="title2"><i> Find the best Person here ..............</i></p></td>
    </tr>
</table>


<div class='reg-users'>
    <div class='card-link'>
        <div class='card1' id='accounts-card'>
            <div>
                <h2><b>Do you looking for a Job ?</b></h2>
                <img src="<?php echo URLROOT?>/public/img/1503126.png" class="reg-img"/>
                <a href="<?php echo URLROOT?>/logins/worker_register" input type="button"  value ="submit" class="button"> Register </a>
            </div>
        </div>
    </div>

    <div class='card-link'>
        <div class='card2' id='accounts-card'>
            <div>
                <h2><b>Do you want to get something done ?</b></h2>
                <img src="<?php echo URLROOT?>/public/img/4140048.png" class="reg-img"/>
                <a href ="<?php echo URLROOT?> /logins/customer_register" input type="button"  value ="submit" class="button"> Register </a>
            </div>
        </div>
    </div>

    <div class='card-link'>
        <div class='card3' id='accounts-card'>
            <div>
                <h2><b>Do your company like to provide job opportunities ?</b></h2>
                <img src="<?php echo URLROOT?>/public/img/comp.png" class="reg-img"/>
                <a href="<?php echo APPROOT?> /views/logins/company_register.php" input type="button"  value ="submit" class="button" style="margin-top: 0.7em;"> Register </a>
            </div>
        </div>
    </div>
</div>



<?php include_once APPROOT . '/views/includes/footer.php'; ?>