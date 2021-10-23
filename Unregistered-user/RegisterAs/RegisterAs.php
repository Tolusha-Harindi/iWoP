
<html>
<title> RegisterAs</title>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">

    <style>
        body {
          background-image: url('../../Images/landing/28.jpg');
          background-repeat: no-repeat;
          background-attachment: scroll;
          background-size:  100%;
          font-family: 'Poppins', sans-serif;
        }
       
        .button1, .button2,.button3{
            background-color:black;
            border: none;
            color: white;
            padding: 20px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            position: absolute;
            display: block;
            cursor: pointer;
            float: right;
            overflow: hidden;
            line-height: 15px;
            border-radius: 5px;
        }

        .button1{
            margin-top:4%;
            margin-left:2.6%;

        }
        .button2{
            background-color: black; 
            padding: 20px 25px;
            margin-top:2%;
            margin-left:2.6%;
        }
        .button3{
            background-color: black;
            padding: 20px 25px;
            margin-top:2%;
            margin-left:2.6%;
        }

        .button1:hover, .button2:hover, .button3:hover{
            background-color:white;
            color: black;
        }

        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
            transition: 0.5s;
            background-color:#91DC32;
            width:15%;
            height:32%;
            margin-top:10%;
            margin-left:42%;
            text-align:center;
            border-radius:7px;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
            padding: 2px 16px;
            }

            .card2 {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
            transition: 0.5s;
            background-color:#F04848;
            width:15%;
            height:32%;
            margin-top:-15.5%;
            margin-left:61%;
            text-align:center;
            border-radius:7px;
            }

            /* On mouse-over, add a deeper shadow */
            .card2:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
            padding: 2px 16px;
            }

            .card3 {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
            transition: 0.5s;
            background-color:#5EC8E5;
            width:15%;
            height:32%;
            margin-top:-15.5%;
            margin-left:80%;
            text-align:center;
            border-radius:7px;
            }

            /* On mouse-over, add a deeper shadow */
            .card3:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
            padding: 2px 16px;
            }

    </style> 

        <?php
        include '../../Repeating-pages/topnav/topnav5-regas.php'
        ?>

</head>

<body>
        <!-- <div></br><a href="../../Login/RegisterWorker.php" input type="button"  value ="submit" class="button1"> Register as a Worker </a> </div>
        <div></br><a href="../../Login/RegisterCustomer.php" input type="button"  value ="submit" class="button2"> Register as a Customer </a></div>
        <div> </br><a href="../../Login/RegisterCompany.php" input type="button"  value ="submit" class="button3"> Register as a Company </a></div>  -->

        <div class="card">
            <div class="container">
                <h2><b>Do you want to get something done ?</b></h2>
                <a href ="../../Login/RegisterCustomer.php" input type="button"  value ="submit" class="button2"> Register </a>
            </div>
        </div>
        <div class="card2">
            <div class="container">
                <h2><b>Do you looking for a Job ?</b></h2>
                <a href="../../Login/RegisterWorker.php" input type="button"  value ="submit" class="button1"> Register </a>
            </div>
        </div>
        <div class="card3">
            <div class="container">
                <h2><b>Do you like to provide job opportunities ?</b></h2>
                <a href="../../Login/RegisterCompany.php" input type="button"  value ="submit" class="button3"> Register </a>
            </div>
        </div>
</body>
</html>