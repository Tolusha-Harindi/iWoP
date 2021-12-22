<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php  include_once APPROOT . '/views/includes/manager_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<!--------------------------------- Service Providers----------------------------------------------------->
<div class="heading" id="service" style="margin-top: -18em; margin-bottom: 1.5em;"> <p> Service Providers </p> </div>

<!--------------------------------Service Providers table----------------------------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top: 3em;">
            <table  class="fl-table" style="border-spacing: 25px;">
                <thead>
                    <tr>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Registered Date</th>
                        <!-- <th>Last Active</th> -->
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <!-- <td>2h ago </td> -->
                        <td> Plumber</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <!-- <td>2h ago </td> -->
                        <td> Plumber</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <!-- <td>2h ago </td> -->
                        <td> Plumber</td>
                    </tr>

                     <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <!-- <td>2h ago </td> -->
                        <td> Plumber</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <!-- <td>2h ago </td> -->
                        <td> Plumber</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td> Nishini Guruge</td>
                        <td>10/10/2021</td>
                        <!-- <td>2h ago </td> -->
                        <td> Plumber</td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>