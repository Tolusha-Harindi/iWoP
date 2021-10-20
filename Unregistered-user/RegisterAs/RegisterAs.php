
<html>
<title> RegisterAs</title>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">

    <style>
        body {
          background-image: url('../../Images/bg.jpg');
          background-repeat: no-repeat;
          background-attachment: scroll;
          background-size: 100% ;
        }
       
        .button1, .button2,.button3{
            background-color:#F63A10;
            border: none;
            color: white;
            padding: 20px 35px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            position: absolute;
            display: block;
            cursor: pointer;
            float: right;
            overflow: hidden;
            line-height: 25px;
            border-radius: 40px;
            top:250px;
            right: 15%;
        }
        .button2{
            background-color: #082690; 
            padding: 20px 25px;
            top:350px;
        }
        .button3{
            background-color: #168314;
            padding: 20px 25px;
            top:450px;
        }

        .button1:hover, .button2:hover, .button3:hover{
            background-color:blue;
        }

    </style> 

        <?php
        include '../../Repeating-pages/topnav/topnav5-regas.php'
        ?>

</head>

<body>
        <div></br><a href="../../Login/RegisterWorker.php" input type="button"  value ="submit" class="button1"> Register as a Worker </a> </div>
        <div></br><a href="../../Login/RegisterCustomer.php" input type="button"  value ="submit" class="button2"> Register as a Customer </a></div>
        <div> </br><a href="../../Login/RegisterCompany.php" input type="button"  value ="submit" class="button3"> Register as a Company </a></div> 
</body>
</html>