<html>
<title> Payment-cus </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="payment_cus.css">

    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>
</head>

<body>

    <div class="full">
        <div class="box"> <b> Payments </b> 
        <div class="topic"> <b> Customer Details </b> </div>
        <div class="topic1">
        <form class="payForm" name = "reg-w" method="post" action="https://sandbox.payhere.lk/pay/checkout">   
            <input type="hidden" name="merchant_id" value="1218941">    <!-- Replace your Merchant ID -->
            <input type="hidden" name="return_url" value="http://localhost/iWoP-git/Customer/Payment-cus/payment_cus.php">
            <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
            <input type="hidden" name="notify_url" value="http://sample.com/notify">  
            <input type="hidden" name="order_id" value="ItemNo12345">
            <input type="hidden" name="items" value="iWoP Service"><br>
            <input type="hidden" name="currency" value="LKR">
            <p class="field"><b>Fisrt Name</b></p>
            <input id="name" name="first_name" type="text" placeholder = "Fisrt Name" class="input" value="" required>
            <p class="field"> <b>Last Name</b></p>
            <input id="name" name="last_name" type="text" placeholder = "Last Name" class="input" value="" required>
            <input type="hidden" name="email" value="samanp@gmail.com">
            <p class="field"><b>Contact Number</b></p>
            <input id="contact" name="phone" type="text" placeholder = "Contact Number" class="input" value="" required>
            <p class="field"> <b>Amount</b></p>
            <input id="amount" name="amount" type="int" placeholder = "Amonut" class="input" required>
            <input type="hidden" name="address" value="No.1, Galle Road">
            <input type="hidden" name="city" value="Colombo">
            <input type="hidden" name="country" value="Sri Lanka"><br><br> 
            <input type="submit" id="submit" name="submit" value="Pay"  class="button1">
            <input type="reset" id="reset" name="reset" value="Cancel"  class="button2"> 
        </form> 
        </div>

        <div class="vl"></div>

        <div class="topic2"> <b> Worker Details </b> </div>
            <form class="workerform" name = "reg"  method="post" action="#">
                        <p class="field2"> <b>Full Name</b></p>
                        <input id="name1" name="name1" type="text" placeholder = "Name" class="input2" required>
                        <p class="field2"> <b>Bank Name</b></p>
                        <input id="bank" name="bank" type="text" placeholder = "Bank Name" class="input2" required>
                        <p class="field2"> <b>Branch Name</b></p>
                        <input id="branch" name="branch" type="text" placeholder = "Branch Name" class="input2" required>
                        <p class="field2"> <b>Account No</b></p>
                        <input id="acc_no" name="acc_no" type="int" placeholder = "Account Number" class="input2" required>
            </form>
        </div> 
    </div>

    
</body>

</html>