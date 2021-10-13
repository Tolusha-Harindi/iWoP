<html>
<title> Sending Request for workers </title>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="SendingReqforWorkers.css">

    <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
    ?>
    
</head>

<body>

    <div>
        <h1 class="heading1">Requesting</h1>
        <div class="box">
            <img src="../../Images/img.png" alt="Profile pic" class="propic">
            <b class="txt1"> Name</b>
            <b class="txt2"> Profession</b>
        </div>
        <div class="container">
                <form name = "reg-w" onsubmit="return validation()" method="post">
                    <div class="field">
                        <div class="heading2">Time </div>
                        <div>
                            <input id="time" type="time"  class="input" required>
                        </div> 
                    </div>
                    <div class="field">
                        <div class="heading2">Date</div>
                        <div>
                            <input id="date" type="date"  class="input" required>
                        </div>
                    </div> 
                    <div class="field"> 
                        <div class="heading2">Category </div>
                        
                        <div  required>
                            <select name=Category class="select" >
                                <option selected label="All">Select category  </option> 
                                <option value="1" label="carpenter">Carpenter</option>
                                <option value="2" lable="plumber">Plumber</option>
                                <option value="3" lable="mason">Mason</option>
                                <option value="4" label="tile">Tile</option> 
                                <option>Painter</option>
                                <option>Electricain </option>
                                <option>Landscaping </option>
                                <option>Contractor </option>
                                <option>Stones/ Sabd/ soil </option>
                                <option>Concrete slab </option>
                                <option>Equipment Repairing </option>
                                <option>A/C </option>
                                <option>Designer </option>
                                <option>Welding </option>
                                <option>Gully Bowser </option>
                                <option>Aluminium </option>
                                <option>Ceiling </option>
                                <option>Well </option>
                                <option>Cushion works </option>
                                <option>Vehicle Repairs </option>
                                <option>Cleaners </option>
                                <option>CCTV </option>
                                <option>Chair weavers </option>
                                <option>Rent tools </option>
                                <option>Curtains </option>
                                <option>Solar Pannel Fixing</option>
                                <option>House Demolishers </option>
                                <option>Pest Control </option>
                                <option>Movers </option>
                                <option>Repairs</option>
                            </select>
                        </div> 
                    </div> 
                    <div class="field">
                        <div class="heading2"> Location </div> 
                        <div>
                            <input id="location" type="text"  class="input" required>
                        </div>
                    </div>   
                    <div class="field">
                        <div class="heading2">Budget </div>     
                        <div>
                            <input id="budget" type="text"  data-type="currency" placeholder ="Rs." class="input" required> 
                        </div> 
                    </div> 

                    <div class="button">
                        <a href="#" input type = "submit"  value ="submit" class="button1"> Send </a>
                        <a href="#" input type = "Reset"  value ="Reset" class="button2"> Cancel </a>
                    </div>
                </form>
            </div>        
        </div>
    

</body>
</html>