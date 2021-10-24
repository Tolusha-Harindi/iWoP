<?php
session_start();
if(isset($_SESSION['email'])){

  include '../../Backend/db_connection.php'; //check customer id or not
  $temp= $_SESSION['email']; 
  $sql = "SELECT email FROM customer WHERE email='$temp'";
  $result = mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){ 
?>


<html>
    <title> category Worker </title>

    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="categoryworker.css"> 

        
        <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
        ?> 

    </head>

    <body>
        
        <div class="c2"> Near to You .......</div> </br>
        <div class="c1"> District  
            <div class="search1">
                <form name = "select" onsubmit="return validation()" method="post">
                    <select name="District" id="list1">
                        <option value =" "  selected label="All"> Select District</option>
                        <option value ="1"  label="Colombo"> Colombo</option>
                        <option value ="2"  label="Kalutara"> Kaluatara</option>
                        <option value ="3"  label="Gampaha"> Gampaha</option>
                        <option value ="4"  label="Galle"> Gampaha</option>
                        <option value ="5"  label="Kandy"> Kandy</option>
                        <option value ="6"  label="Mullaitiuv"> Mullaitiuv</option>
                        <option value ="7"  label="Kurunegala"> Kurunegala</option>
                        <option value ="8"  label="Matara"> Matara</option>
                        <option value ="9"  label="Kegalle"> Kegalle</option>
                        <option value ="10" label="Ratnapura"> Ratnapura</option>
                        <option value ="11" label="Anuradhapura"> Anuradhapura</option>
                        <option value ="12" label="Badulla"> Badulla</option>
                        <option value ="13" label="Puttalam"> Puttalam</option>
                        <option value ="14" label="Matale"> Matale</option>
                        <option value ="15" label="Hambantota"> Hambantota</option>
                        <option value ="16" label="Nuwara Eliya"> Nuwara Eliya</option>
                        <option value ="17" label="Jaffna"> Jaffna</option>
                        <option value ="18" label="Ampara">Ampara</option>
                        <option value ="19" label="Polonnaruwa"> Polonnaruwa</option>
                        <option value ="20" label="Monaragala"> Monaragala</option>
                        <option value ="21" label="Trincomalee"> Trincomalee</option>
                        <option value ="22" label="Batticaloa"> Batticaloa</option>
                        <option value ="23" label="Vavuniya"> Vavuniya</option>
                        <option value ="24" label="Kilinochchi"> Kilinochchi</option>
                        <option value ="25" label="Mannar"> Mannar</option>
                    </select>
                </div>
                </form>
            </div>
        </div>
        <div class="c3"> City  
            <div class="search2">
                <form name = "select"  method="post">
                    <select name="City" id="list2">
                        <option value =" "  selected label="All"> Select City</option>
                    </select>
                </form>
            </div>
        </div>
        
         <!------------------------Near to you Outerbox------------------------>
        <div class="box"></br>
            <!---------------------------Worker deatils------------------------------->
            <div class="box2">
                <div class="column">
                    <a href="../WorkerProfile-Userview/Worker-Profile-Userview.php">
                        <img src="../../Images/img.png" alt="profile" class="prof">
                    </a>
                    <div class="lastactive"> Last active 2d</div>
                    <p class="txt1">Job count (10)</p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div> <p class="txt2">( 152 )</p>
                </div>
                <div class="column">
                    <div class="txt3"> <b> Name</b> </div>
                    <img src="../../Images/location.png" alt="location" class="location"> </br>
                    <img src="../../Images/job.png" alt="job" class="job"> 
                </div>
                <div class="column">
                    <div class="txt4"> Dasun Peiris</div>
                    <div class="txt4"> Colombo</div>
                    <div class="txt4"> Plumber</div>
                </div>
                <div class="box4">
                    <div class="txt5">071 7777888</div>
                </div>
            </div>
            <!-------------------------------------------------------------------------------->
            <div class="box2">
                <div class="column">
                    <a href="../WorkerProfile-Userview/Worker-Profile-Userview.php">
                        <img src="../../Images/img.png" alt="profile" class="prof">
                    </a>
                    <div class="lastactive"> Last active 2d</div>
                    <p class="txt1">Job count (10)</p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div> <p class="txt2">( 152 )</p>
                </div>
                <div class="column">
                    <div class="txt3"> <b> Name</b> </div>
                    <img src="../../Images/location.png" alt="location" class="location"> </br>
                    <img src="../../Images/job.png" alt="job" class="job"> 
                </div>
                <div class="column">
                    <div class="txt4"> Kamal Perera</div>
                    <div class="txt4"> Kalutara</div>
                    <div class="txt4"> Plumber</div>
                </div>
                <div class="box4">
                    <div class="txt5">071 8888456</div>
                </div>
            </div>
        </div>

        <!-----------------Vertical Menu---------------------------------->
            <div class="box1">                       
                <p class="box1-heading">All Category</p> 
           
            <div class="vertical-menu">
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/plumber.png" alt="plumber" height="20" width="25" > Plumber</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/masons.png" alt="Masons" height="20" width="25" > Masons</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/tile.png" alt="tile" height="20" width="25" > Tile</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/saw.png" alt="carpenters" height="20" width="25" > Carpenters</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/paintbrush.png" alt="painters" height="20" width="25" > Painters</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/electrician.png" alt="electricians" height="20" width="25" > Electricians</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/planting.png" alt="landscape" height="20" width="25" > Landscaping</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/worker.png" alt="plumber" height="20" width="25" > Contractors</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/businessman.png" alt="professionals" height="20" width="25" > Professionals</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/delivery-truck.png" alt="truck" height="20" width="25" > Stones/sand/soil</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/concrete-mixer-tool.png" alt="concrete slab" height="20" width="25" >Concrete Slab</a>
            <a href="#"><img style="padding-right: 20px" src="../../Images/category/television.png" alt="equipment repairing" height="20" width="25" >Equipment Repairing </a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/air-conditioner.png" alt="A/c" height="20" width="25" > A/C</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/welding.png" alt="welding" height="20" width="25" >Welding</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/whisk-and-bowl.png" alt="cooking" height="20" width="25" > Cooking</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/armchair.png" alt="cushion" height="20" width="25" > Cushion Works</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/repairing-car.png" alt="repairs" height="20" width="25" > Vehicle Repairs</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/cleaning.png" alt="cleaners" height="20" width="25" > Cleaners</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/cctv.png" alt="cctv" height="20" width="25" > CCTV</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/ceiling.png" alt="ceiling" height="20" width="25" > Ceiling</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/water-well.png" alt="well" height="20" width="25" > Well</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/rocking-chair.png" alt="chair" height="20" width="25" > Chair Weavers</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/rent-hanging-signal.png" alt="rent tools" height="20" width="25" > Rent Tools</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/curtains.png" alt="curtains" height="20" width="25" > Curtains</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/solar-panel.png" alt="solar" height="20" width="25" >Solar Panel fixing</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/demolition.png" alt="demo" height="20" width="25" > Demolishing</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/insecticide.png" alt="pest" height="20" width="25" > Pest Control</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/plumber.png" alt="design" height="20" width="25" > Design</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/moving.png" alt="movers" height="20" width="25" > Movers</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/recycle.png" alt="aluminium" height="20" width="25" > Aluminium</a>
            <a href="#"><img style="padding-right: 25px" src="../../Images/category/waiter.png" alt="waiter" height="20" width="25" > Catering</a>
        </div>
        </div>
           
</body>

</html>

<?php 
  }
  else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>'; //redirect to previous page
    exit();
  }
 
  
}


    else{
        header('location:../../Login/Login.php');
        exit();
    }
?>
