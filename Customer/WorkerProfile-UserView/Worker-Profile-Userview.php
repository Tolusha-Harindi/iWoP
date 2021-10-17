<html >
<title> Worker profile- User view </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Worker-Profile-Userview.css">

    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php';
        // receive feedbacks as results
        $result = require 'all-feedback.php';
        
    ?>
    
</head>

<body>
    <!-----------------Left------------------------------->  
    <div class="split left1">
        <div class="centered">
                <img src="../../Images/img.png" alt="Profile Image" class="profile">
                <p class="t1">Last active 5 minutes ago</p>
                <b>User Rating 25%</b>
                <div class="star1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div> <p class="no"> (180)</p>
                <img src="../../Images/job.png" alt="Job" class="job"><b  class="spacing"> Experience</b> 5 Years 
                <div class="box1"> 
                    <b class="t2"> Working days</b>
                    <p class="spacing"> Monday Tuesday Wednesday </p> 
                    <b class="t2"> Working Time</b>
                    <p class="spacing"> 8.00am   -    5.00pm</p> 
                    <b class="t2"> Best Time to call</b>
                    <p class="spacing"> 6.00pm   -    9.00pm</p> 
                </div> </br>

                <!----------------Viewing Feedbacks and ratings------------------------------>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <b class="t3">Feedbacks and Ratings</b> </br>
                <div class="box2">
                    <div class="splt left2"> <img src="../../Images/img.png" class="prof" alt="User profile"></div>
                    <div class="splt right2"> 
                        <b class="t4"><?php echo $row['name']; ?></b> </br>
                        <?php 
                            $ratings=array();
                            for ($x = 0; $x < $row['rating']; $x++) {
                                $ratings[$x]="checked";
                            }
                        ?>
                        <div class="star">
                            <span class="fa fa-star <?php echo $ratings[0] ?>"></span>
                            <span class="fa fa-star <?php echo $ratings[1] ?>"></span>
                            <span class="fa fa-star <?php echo $ratings[2] ?>"></span>
                            <span class="fa fa-star <?php echo $ratings[3] ?>"></span>
                            <span class="fa fa-star <?php echo $ratings[4] ?>"></span>
                        </div>
                        <p class="t8"><?php echo $row['review']; ?></p>
                    </div>
                </div>
                <?php
                    }    
                ?> 
        </div>
    </div>
    

    <!---------------------------------------Right--------------------------------------->
      <div class="split right1">
        <div class="centered">
            <a  href="../Payment-cus/payment_cus.php" class="button1" > <b>Pay</b></a> <!-----------------Pay button----------->
            <div class="details">
                <b class="t5"> Kamal Perera</b> </br>
                <hr> 
                <img src="../../Images/location.png" class="icon"> 
                <p class="t6"> Colombo </p> </br>
                <hr>
                <img src="../../Images/job.png" class="icon"> 
                <p class="t6"> Electrician</p> </br>
                <hr> 
                <img src="../../Images/call.png" class="icon"> 
                <p class="t6"> 071 4589896</p> </br>
                <hr>
                <img src="../../Images/chat.png" class="icon"> 
                <p class="t6"> Chat</p> </br>
                <p class="t6"><a href="#"> Click here to chat</a></p> </br>
                <hr>
           
                <div class="box3"> 
                        <p> Past Experience</p>
                        <img src="../../Images/company.jpg" class="upload" >
                </div>
                <a href="../SendingReqforWorker/SendingReqforWorker.php" input type="submit" value="button"  class="button2"> Job Invite </a> 
                <a href="../Reportingpagebycustomer/reportpagebycustomer.php" input type="button" value="button" class="button3"> Report </a> </br>
                <b class="t7">Give Your Feedbacks and Ratings</b> </br>

                
                <!----------------Feedback section------------>
                    <form name = "reg-w"  method="post" action="feedback.php">

                        <div class="star2">
                            <input type="radio" class="star-input" name="rating" id="star-1" value="1">
                            <label for="star-1" class="starform"><i class="fa fa-star"></i></label>
                            <input type="radio" class="star-input" name="rating" id="star-2" value="2">
                            <label for="star-2" class="starform"><i class="fa fa-star"></i></label>
                            <input type="radio" class="star-input" name="rating" id="star-3" value="3">
                            <label for="star-3" class="starform"><i class="fa fa-star"></i></label>
                            <input type="radio" class="star-input" name="rating" id="star-4" value="4">
                            <label for="star-4" class="starform"><i class="fa fa-star"></i></label>
                            <input type="radio" class="star-input" name="rating" id="star-5" value="5" checked>
                            <label for="star-5" class="starform"><i class="fa fa-star"></i></label>
                        </div>

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
        </div>
      </div>
</body>
