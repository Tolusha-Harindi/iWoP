<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <?php
        include '../../Repeating-pages/topnav/topnav1.php'
    ?>
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
</head>
<body>

<div class="box1">

    <h1 class="websitename">iWOP</h1>

    <div class="contact">
        <h2 class="call">Call us:&nbsp;&nbsp;&nbsp;+94775268479</h2>
        <h2> Follow Us:&nbsp;&nbsp;&nbsp;</h2>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram" ></a>

    </div>

</div>
<div class="box2">
    <h1 class="contactus"> Contact Us</h1>
    <div class="box2form">
    <form action="/action_page.php">
        <label for="name" id="namelabel">First Name</label>
        <input type="text" id="name" name="firstname" placeholder="Your name.."><br>
        <label for="email" id="emaillabel">Email</label>
        <input type="email" id="email" name="lastname" placeholder="Your email.."><br>

        <label for="message" id="messagelabel">Message</label>
        <textarea id="message" name="message" placeholder="Write something.." ></textarea><br>
        <input type="submit" value="Send">
    </form>
    </div>
</div>

</body>
</html>