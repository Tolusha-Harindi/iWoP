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
        <form name = "reg-w"  method="post" action="#">
                        <p class="field"> <b>Name</b></p>
                        <input id="name" name="name" type="text" placeholder = "Name" class="input" required>
                        <p class="field"> <b>Contact Number</b></p>
                        <input id="contact" name="contact" type="int" placeholder = "Contact Number" class="input" required>
                        <p class="field"> <b>Amount</b></p>
                        <input id="amount" name="amount" type="int" placeholder = "Amonut" class="input" required>
                        <p class="field"> <b>Card No</b></p>
                        <input id="card_no" name="card_no" type="int" placeholder = "Card No" class="input" required>
                        <p class="field"> <b>Expiry</b></p>
                        <input id="expiry" name="expiry" type="date" placeholder = "Expiry" class="input" required>
                        <p class="field"> <b>CVC</b></p>
                        <input id="cvc" name="cvc" type="int" placeholder = "CVC" class="input" required>
                        <p class="field"> <b>Card Type</b></p>
                        <div>
                        <select name=category class="select" required>
                            <option selected label="All">  </option> 
                            <option value="1" label="Master-card">Master Card</option>
                            <option value="2" label="Visa">VISA</option>
                            <option value="3" label="American_express">American Express</option>
                        </select>
                        </div>
                        <input type="submit" id="submit" name="submit" value="Pay"  class="button1">
                        <input type="reset" id="reset" name="reset" value="Cancel"  class="button2">
                    </form>
        

        <div class="vl"></div>

        <div class="topic2"> <b> Worker Details </b> </div>
            <form name = "reg"  method="post" action="#">
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