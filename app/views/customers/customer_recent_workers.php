<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<a href="#due" class="top-button1" style="margin-top: -38em; margin-left:78em;width:7em;"> Due Payments </a>
<a href="#paid" class="top-button2" style="margin-top: -38em; margin-left:70em;"> Paid </a>

<!------heading----------->
<div class="category"  style="margin-top: -13em;margin-left:17em"> <p> Recent Workers list </p> </div>



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
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Kasun Perera</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Nishini Guruge</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Sandani Perera</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                </tr>

                    <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td>Nimal Perera</td>
                    <td style="color: #F10B67;">Due Payment</td>
                    <td> <button  id="myBtn" class="yellow-out-button">Pay </button></td>
                </tr>

            </tbody>
        </table> 
    </div> 
</div>


<!------------------------------------------------------------popoup window-------------------------------------------------->

    <div id="yellowModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 10%;">
                <form action="https://sandbox.payhere.lk/pay/checkout" name = "reg-w" method="post">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:30%;">Pay Your Service Provider <img src="<?php echo URLROOT;?> /public/img/atm.png" class="popup-image"></p>
                      
                        <input type="hidden" name="merchant_id" value="1218941">    <!-- Replace your Merchant ID -->
                        <input type="hidden" name="return_url" value="http://localhost/iWoP-test/customers/customer_recent_workers">
                        <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
                        <input type="hidden" name="notify_url" value="http://sample.com/notify">  
                        <input type="hidden" name="order_id" value="ItemNo12345">
                        <input type="hidden" name="items" value="iWoP Service"><br>
                        <input type="hidden" name="currency" value="LKR">
                        <input type="hidden" name="email" value="samanp@gmail.com">
                        <input type="hidden" name="address" value="No.1, Galle Road">
                        <input type="hidden" name="city" value="Colombo">       
                        <input type="hidden" name="country" value="Sri Lanka"><br><br> 

                        <!-- <div class="row">
                        <div class="col-25">
                            <label for="first_name" style="color: #0526BA;">First Name</label>
                        </div>
                        <div class="col-75"> -->
                            <input type="hidden" id="first_name" name="first_name" placeholder="Enter your First Name" required>
                        <!-- </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="last_name" style="color: #0526BA;">Last Name</label>
                            </div>
                            <div class="col-75"> -->
                                <input type="hidden" id="last_name" name="last_name" placeholder="Enter your Last Name" required>
                            <!-- </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="phone" style="color: #0526BA;">Contact Number</label>
                            </div>
                            <div class="col-75"> -->
                                <input type="hidden" id="phone" name="phone" placeholder="Enter your Contact Number" required>
                            <!-- </div>
                        </div> -->
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
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
                </tr>

                <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
                </tr>

                    <tr>
                    <td><img src="<?php echo URLROOT;?> /public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                    <td> Nishini Guruge</td>
                    <td>10/10/2021</td>
                    <td style="color: #0526BA;">Paid</td>
                    <td>Plumber</td>
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