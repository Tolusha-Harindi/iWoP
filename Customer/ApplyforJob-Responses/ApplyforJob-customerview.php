<html lang="en" dir="ltr"></html>
<title> applyforJobs-Responses </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ApplyforJob-Responses.css">

    <!--------------------------Top nav----------------------------------------->
    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php';

         // view posted ads as results
         $result = require 'posted_ad.php';
    ?>
</head>

<body>
<!---------------------------Left box--Posted add------------------------------------->
<table>
            <?php
                    while($row=mysqli_fetch_array($result)){
            ?>
           
                <tr>
                    <td>
                <div class="box1"> 
                    <table>
                        <tr><div class="txt1"> <?php echo $row['title']; ?> </div> </tr>
                        <tr>
                            <td> <b> <div class="txt2">Category</div></b></td>
                            <td>  </td>  <td> </td>
                            <td> <div class="txt3"> <?php echo $row['category']; ?> </div></td> </br>
                        </tr>
                        <tr>
                            <td> <b> <div class="txt2">Description</div></b></td>
                            <td>  </td>  <td> </td>
                            <td> <div class="txt3"> <?php echo $row['job']; ?> </div></td> </br>
                        </tr>
                        <tr>
                            <td> <b> <div class="txt2">Salary</div></b></td>
                            <td>  </td>  <td> </td>
                            <td> <div class="txt3"> <?php echo "Rs."." " .$row['budget']; ?> </div></td> </br>
                        </tr>
                        <tr> <!--------------------------------------------Delete button---------------------------------------->
                                <a href="#" input type = "Reset"  value ="Reset"  class="button3"> Delete </a>
                        </tr>
                    </table>
                </div>
                </td>

                <td>
                <!--------------------------------------------Responses-------------------------------------------->
                <div class= "box2">
                    <div class= "container">
                        <p class="box-heading"> Responses </p>
                        <div class= "box3"> 
                            <div class="hor">
                                </hr> 
                                <img src="../../Images/img.png" alt="propic" class = "profpic">
                                <div class="txt4"> <b>Nimal Peiris</b> </div>
                                <a href="#" input type = "button"  value ="button" class="button1"> Approve </a>
                                <a href="#" input type = "button"  value ="button" class="button2"> Reject </a>
                            </div>
                            <div class="hor">
                                </hr> 
                                <img src="../../Images/img.png" alt="propic" class = "profpic">
                                <div class="txt4"> <b>Nimal Peiris</b> </div>
                                <a href="#" input type = "button"  value ="button" class="button1"> Approve </a>
                                <a href="#" input type = "button"  value ="button" class="button2"> Reject </a>
                            </div>
                            <div class="hor">
                                </hr> 
                                <img src="../../Images/img.png" alt="propic" class = "profpic">
                                <div class="txt4"> <b>Nimal Peiris</b> </div>
                                <a href="#" input type = "button"  value ="button" class="button1"> Approve </a>
                                <a href="#" input type = "button"  value ="button" class="button2"> Reject </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </td>
        </tr> </br>

        <tr> </tr>
                    
        <?php
                }    
        ?> 
    </table>
</body>
</html>