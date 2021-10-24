<html>
<title> Report by Customer </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="reportpagebycustomercss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

  <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>
<link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
</head>

</html>

<body>
   

    <div class="heading1"> Report</div>
    <div class="box1"> 
        <a href="../WorkerProfile-UserView/Worker-Profile-Userview.php" class="previous">&laquo; Previous</a>
          <div class="imguser">
              <img src="user.png" alt="user">
    </div>
    <h1 class="nameforworker">Kamal Perera</h1>
    <h2 class="typeofwork"> Electrician </h2>
    <h2 class="cityofwork">Colombo </h2>
    <h2 class="experince">Five year Experince </h2>
    <h2 class="telnum">071-2453678 </h2>
    </div>
    <div class="box2"> 
        <div class ="heading2">
            <p> Reason</p>
            <div class="reason">
                <form method="post" action="addcustomerreport.php">
                    <input type="hidden" name="nic" value="928331129V">
                    <input type="hidden" name="name" value="Kamal Perera">
                    <table class="center">
                        <tr>   
                            <td> <input type="radio" name="comment" value="Not Responding" onclick="ShowHidetxt()"> Not Responding </td>
                            <td></td>
                            <td> <input type="radio" name="comment" value="Unprofessional" onclick="ShowHidetxt()"> Unprofessional </td>
                        </tr>  
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr>
                        <td> <input type="radio" name="comment" value="Did not complete the Job" onclick="ShowHidetxt()"> Did not complete the Job </td>
                        <td></td>
                        <td> <input type="radio" name="comment" value="Charges are high" onclick="ShowHidetxt()"> Charges are high </td>
                        </tr>
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr> </tr> <tr> </tr>
                        <tr><td> <input type="radio" name="comment" id="other" class="comment" value="" onclick="ShowHidetxt()"> Other </td></tr>
                    </table>
                    <br>
                    <textarea id="othertext" class="othertext" rows="10" cols="70" name="other" placeholder="Other reasons......"></textarea><br><br>
                    <button class="send" type="submit" name="send" onclick="alert('send successfully')">Send</button>
                    <button  class="cancel"type="button" onclick="alert('cancel')">Cancel</button>

                </form>   
               
            </div>
        </div>
    </div>
    <script src="otherReason.js"></script>
</body>