
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

<!------------------- customer table-------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top:2em;">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Registered date</th>
                        <th>Last Active</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>Dream wave</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>Dream wave</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>Dream wave</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

                     <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/company.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>Dream wave</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

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
                        <th>Name</th>
                        <th>Registered date</th>
                        <th>Last Active</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Kasun Perera</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Kasun Perera</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

                    <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Kasun Perera</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

                     <tr>
                        <td><img src="<?php echo URLROOT;?>/public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>Kasun Perera</td>
                        <td> 28/10/2021</td>
                        <td> 5 d ago</td>
                        <td> No 11, Galle Road, Galle</td>
                    </tr>

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
                    <th>Name</th>
                    <th>Registered date</th>
                    <th>Last Active</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Kasun Perera</td>
                    <td> 28/10/2021</td>
                    <td> 5 d ago</td>
                    <td> Plumber</td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?>/public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Kasun Perera</td>
                    <td> 28/10/2021</td>
                    <td> 5 d ago</td>
                    <td>Electrician</td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?>/public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Kasun Perera</td>
                    <td> 28/10/2021</td>
                    <td> 5 d ago</td>
                    <td> Designer</td>
                </tr>

                    <tr>
                    <td><img src="<?php echo URLROOT;?>/public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Kasun Perera</td>
                    <td> 28/10/2021</td>
                    <td> 5 d ago</td>
                    <td> Technician</td>
                </tr>

            </tbody>
        </table> 
    </div> 
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>  


      
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>