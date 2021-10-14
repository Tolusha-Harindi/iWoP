<html>
<title> Payment-cus </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Worker-Profile-Userview.css">

    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>
</head>

<body>

    <div class="full">
        <div class="box"> 
        <form name = "reg-w"  method="post" action="feedback.php">
                        <p class="field"> <b>Name</b></p>
                        <input id="name" name="name" type="text" placeholder = "Name" class="input" required>
                        <p class="field"> <b>Email</b></p>
                        <input id="email" name="email" type="email" placeholder = "Email" class="input" required>
                        <p class="field"> <b>Review</b></p>
                        <input id="review" name="review" type="text" placeholder = "Review" class="input" required>
                        <input type="submit" id="submit" name="submit" value="Submit"  class="button4">
                    </form>
        </div> 
    </div>
</body>

</html>