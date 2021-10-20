<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="chatcus6.css">
<link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>
</head>
<body>
<div class="arrowclass">
    <form>
        <input type="button" value="Go back!" class="back" onclick="history.back()">
    </form>
</div>
<div class="box1">
        <img src="user.png" alt="user"  id="userimgbox1">
        <h3 class="box1name">Kamal Perera</h3>
        <h4 class="useratings" > User ratings &nbsp; 25%</h4>
        <div class="box1star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </div>
        <h4 class="experience">Expereince :  &nbsp; 5 years</h4>
        <h4 class="phone">0775896332</h4>
</div>

<div class="box2">
    <div class="firstdiv">

    <div class="imgdiv">
        <img src="user.png" alt="user"  id="userimg">
    </div>
        <div class="imgdivright">
         <h3> Kamal Perera</h3>
            <p class="lastact">last active 2 days ago</p>
        </div>


    </div>
    <hr>
    <div class="seconddiv">
        <p class="p2"> Sent a message to Start a conversation</p>

        <a href="#"><img  id="icon2" src="icon2.png" alt="icon2"></a>
        <p id="rcorners2">
        
            
            <a href="#"><img  id=sendicon src="chatboxsend.png" alt="send"></a>
        </p>

    </div>


</div>


</body>
</html>