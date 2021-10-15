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
                <table class="center">
                    <tr>   
                        <td> <input type=radio name=Pass value=NotResponding > Not Responding </td>
                        <td></td>
                        <td> <input type=radio name=Pass value= Unprofessional> Unprofessional </td>
                    </tr>
                    <tr>  
                    <tr> </tr> <tr> </tr>
                     <tr> </tr> <tr> </tr>
                     <tr> </tr> <tr> </tr>
                      <tr> </tr> <tr> </tr>
                       <tr> </tr> <tr> </tr>
                       <td> <input type=radio name=Pass value=Did not complete the Job> Did not complete the Job </td>
                        <td></td>
                        <td>  <input type=radio name=Pass value=Charges are high> Charges are high </td>
                    </tr>
                    
                </table>
                <br>
               <textarea rows="10" cols="70" name="comment" form="">Other reasons......</textarea><br><br>
               <button class="send" type="button" onclick="alert('send successfully')">Send</button>
                <button  class="cancel"type="button" onclick="alert('cancel')">Cancel</button>

               
               
            </div>
        </div>
    </div>
    
</body>