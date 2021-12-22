<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<a href="#due" class="top-button1" style="margin-top: -41em; margin-left:78em;width:7em;"> Due Payments </a>
<a href="#paid" class="top-button2" style="margin-top: -41em; margin-left:70em;"> Paid </a>

<!------heading----------->
<div class="category"  style="margin-top: -14em;margin-left:17em"> <p> Recent Workers list </p> </div>



<!----------------------------------------Due payments list----------------------------------------------->
<!------heading----------->
<div class="heading" id="due" style="margin-top: 2em; margin-bottom: 1.5em;"> <p> Due Payments List </p> </div>

<!------------------- due payments table-------------------->
<div class= "table"> 
    <div class="table-wrapper">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <th>Profile Pic</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Pay</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Kasun Perera</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Nishini Guruge</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Sandani Perera</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                    <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Nimal Perera</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

            </tbody>
        </table> 
    </div> 
</div>


<!------------------------------------------------------------popoup window-------------------------------------------------->

    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 10%;">
                <form action="">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:30%;">Pay Your Service Provider <img src="<?php echo URLROOT;?> /public/img/atm.png" class="popup-image"></p>
                        
                        <div class="row">
                            <div class="col-25">
                            <label for="amount" style="color: #0526BA;">Amount</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="amount" name="amount" placeholder="Enter amount" required>
                            </div>
                        </div>
                        </br> </br>
                        <div class="row">
                            <input type="submit" value="Submit" class="blue-button" style="margin-left:45%;">
                        </div>
                        </br>
                </form>
        </div>
    </div>

            <script type="text/javascript" src="<?php echo URLROOT;?> /public/js/yellow-out-button-popup.js"></script>


<!----------------------------------------Worker complaints----------------------------------------------->
<!------heading----------->
<div class="heading" id="paid"> <p> Paid List </p> </div>

<!------------------- Customer table-------------------->
<div class= "table"> 
    <div class="table-wrapper" style="margin-top: 3em;">
        <table  class="fl-table" style="border-spacing: 25px;">
            <thead>
                <tr>
                    <th>Profile Pic</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
                </tr>

                    <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
                    <td> <input type="reset" class="blue-out-button" value="Message"/></td>
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