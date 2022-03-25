
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<a href="#customer" class="top-button1" style="margin-left:78em; width:7em;"> Customers</a>
<a href="#worker" class="top-button2"  style="margin-left:65em;"> Service Providers</a>
<a href="#company" class="top-button3" style="margin-left:55em"> Companies </a>
                

<!------heading----------->
<div class="category"  style="margin-top: -15em;"> <p> Registered Users </p> </div>

<!----------------------------------------company List----------------------------------------------->
<!------heading----------->
<div class="heading" id="company" style="margin-bottom:1.5em;"> <p> Company list </p> </div>

<!------------------- company table-------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top:2em;">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Profile Pic</th>
                        <th>Company Name</th>
                        <!----<th>Registered date</th>---->
                        <th>Email</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($data['com'] as $com): ?>
                    <tr>
                        <td><img src="<?php echo URLROOT ?> /public/img/<?php echo $com->prof_pic; ?>" class="table-image" style="border-radius: 50px;"></td>
                        <td> <?php echo $com->com_name; ?></td>
                        <!-----<td> <?php //echo date('j F Y', strtotime($com->add_date)) ?> </td> ----->
                        <td> <?php echo $com->email; ?></td>
                        <td> <?php echo $com->contact; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
        </div> 
    </div>



<!----------------------------------------customer List----------------------------------------------->
<!------heading----------->
<div class="heading" id="customer"> <p> Customer list </p> </div>

<!------------------- customer table-------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top: 3em;">
            <table class="fl-table" style="border-spacing: 25px;">
                <thead>
                    <tr>
                        <th>Profile Pic</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($data['cus'] as $cus): ?>
                    <tr>
                        <td><img src="<?php echo URLROOT ?> /public/img/<?php echo $cus->prof_pic; ?>" class="table-image" style="border-radius: 50px;"></td>
                        <td><?php echo $cus->fname; ?></td>
                        <td><?php echo $cus->lname; ?></td>
                        <td><?php echo $cus->contact; ?></td>
                        <td><?php echo $cus->email; ?></td>
                    </tr>
                <?php endforeach; ?>

                   
                </tbody>
            </table> 
        </div> 
    </div>

<!----------------------------------------Workers List----------------------------------------------->
<!------heading----------->
<div class="heading" id="worker" style="margin-bottom:1.5em;"> <p> Service Provider list </p> </div>

<!------------------- customer table-------------------->
<div class= "table"> 
    <div class="table-wrapper">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <th>Profile Pic</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['wor'] as $wor): ?>
                    <tr>
                        <td><img src="<?php echo URLROOT?>/public/img/<?php echo $wor->prof_pic; ?>" class="table-image" style="border-radius: 50px;"></td>
                        <td> <?php echo $wor->fname; ?></td>
                        <td> <?php echo $wor->lname; ?></td>
                        <td> <?php echo $wor->contact; ?></td>
                        <td> <?php echo $wor->email; ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table> 
    </div> 
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>  


      
<?php include_once APPROOT . '/views/includes/footer.php'; ?>