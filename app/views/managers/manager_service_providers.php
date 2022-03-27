<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php  include_once APPROOT . '/views/includes/manager_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<!--------------------------------- Service Providers----------------------------------------------------->
<div class="heading" id="service" style="margin-top: -18em; margin-bottom: 1.5em;"> <p> Service Providers </p> </div>

<!--------------------------------Service Providers table----------------------------------------->
 
<div class= "table"> 
        <div class="table-wrapper" style="margin-top:2em; margin-left: 340px;">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Profile Pic</th>
                        <th>Company Name</th>
                        <th>Owner Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($data['wor'] as $wor): ?>
                    <tr>
                        <td><img src="<?php echo URLROOT ?> /public/img/<?php echo $wor->prof_pic; ?>" class="table-image" style="border-radius: 50px;"></td>
                        <td> <?php echo $wor->fname; ?></td>
                        <td> <?php echo $wor->lname; ?></td>
                        <td> <?php echo $wor->email; ?></td>
                        <td> <?php echo $wor->contact; ?></td>
                        <td> <?php echo $wor->address; ?></td>
                        <td> <?php echo $wor->created_at; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
        </div> 
    </div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>  
<div class="footer" style="margin-top: 800px;">
<?php include_once APPROOT . '/views/includes/footer.php'; ?></div>