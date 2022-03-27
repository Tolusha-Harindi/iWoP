<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php  include_once APPROOT . '/views/includes/manager_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<!--------------------------------- companies----------------------------------------------------->
<div class="heading" id="service" style="margin-top: -18em; margin-bottom: 1.5em;"> <p> Companies</p> </div>

<!--------------------------------companies----------------------------------------->
 
<div class= "table"> 
        <div class="table-wrapper" style="margin-top:2em;">
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
                
                    <?php foreach($data['com'] as $com): ?>
                    <tr>
                        <td><img src="<?php echo URLROOT ?> /public/img/<?php echo $com->prof_pic; ?>" class="table-image" style="border-radius: 50px;"></td>
                        <td> <?php echo $com->com_name; ?></td>
                        <td> <?php echo $com->owner_name; ?></td>
                        <td> <?php echo $com->contact; ?></td>
                        <td> <?php echo $com->email; ?></td>
                        <td> <?php echo $com->address; ?></td>
                        <td> <?php echo $com->contact; ?></td>
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