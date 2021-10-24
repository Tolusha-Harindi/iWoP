
<?php
// session_start();
// if(isset($_SESSION['email'])){

//   include '../../Backend/db_connection.php'; //check customer id or not
//   $temp= $_SESSION['email']; 
//   $sql = "SELECT email FROM admin WHERE email='$temp'";
//   $result = mysqli_query($db,$sql);
//   if(mysqli_num_rows($result)>0){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
  <link rel="stylesheet" href="category.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
        include '../../Repeating-pages/topnav/topnav8-admin.php'
    ?>
<link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">

  
</head>
<body>

<div>
  <div class="vertical-menu">
    <div class="box1">
      <p class="box1-heading">All Category</p>
    </div>
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
    <a href="#"><img style="padding-right: 25px" src="../../Images/category/tea-mug.png" alt="design" height="20" width="25" > Mug-Designer</a>
    <a href="#"><img style="padding-right: 25px" src="../../Images/category/moving.png" alt="movers" height="20" width="25" > Movers</a>
    <a href="#"><img style="padding-right: 25px" src="../../Images/category/recycle.png" alt="aluminium" height="20" width="25" > Aluminium</a>
    <a href="#"><img style="padding-right: 25px" src="../../Images/category/waiter.png" alt="waiter" height="20" width="25" > Catering</a>

  </div>


</div>
<div class="box2">

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'worker')"><b>Workers</b></button>
    <button class="tablinks" onclick="openCity(event, 'customer')"><b>Customers</b></button>
    <button class="tablinks" onclick="openCity(event, 'company')"><b>Company</b></button>
  </div>

  <div id="worker" class="tabcontent">

    <div class="box3">
      <div class="box3left">
        <img src="user.png" alt="image" id="userimg">
        <h4>Last active 2 days ago</h4>
        <div class="star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star">(152)</span>
        </div>
      </div>

      <div class="box3right">
        <div class="workername">Name:  &nbsp; &nbsp;  Namal Perera</div>
        <div class="locationimage">
        <img src="location.png" alt="location"> 
        </div>

        <div class="locaname">
          Colombo
        </div>
        <div class="job">
          <img src="job.png" alt="bag">
        </div>
        <div class="desjob">
         Designer
        </div>

        <button class="phonebut">
          07########
        </button>
      </div>

    </div>

    <div class="box4">
      <div class="box3left">
        <img src="user.png" alt="image" id="userimg">
        <h4>Last active 2 days ago</h4>
        <div class="star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star">(152)</span>
        </div>
      </div>
      <div class="box3right">
        <p class="workername">Name:  &nbsp; &nbsp;  Namal Perera</p>
        <div class="locationimage">
          <img src="location.png" alt="location">
        </div>

        <div class="locaname">
          Colombo
        </div>
        <div class="job">
          <img src="job.png" alt="bag">
        </div>
        <div class="desjob">
          Designer
        </div>

        <button class="phonebut">
          07########
        </button>
      </div>

    </div>

  </div>

  <div id="customer" class="tabcontent">
    <div class="box3">

      <div class="box3left">
        <img src="user.png" alt="image" id="userimg">
        <h4>Last active 2 days ago</h4>
      </div>
      <div class="box3right">
        <p class="workername">Name:  &nbsp; &nbsp;  Namal Perera</p>
        <div class="locationimage">
          <img src="location.png" alt="location">
        </div>

        <div class="locaname">
          Colombo
        </div>


        <button class="phonebut">
          07########
        </button>

      </div>

    </div>
    <div class="box4">
      <div class="box3left">
        <img src="user.png" alt="image" id="userimg">
        <h4>Last active 2 days ago</h4>
      </div>
      <div class="box3right">
      <div class="workername"><p >Name:  &nbsp; &nbsp;  Namal Perera</p></div>
        <div class="locationimage">
          <img src="location.png" alt="location">
        </div>

        <div class="locaname">
          Colombo
        </div>


        <button class="phonebut">
          07########
        </button>

      </div>

    </div>

  </div>

  <div id="company" class="tabcontent">
  <div class="box4">
      <div class="companylogo">
        <img src="companylogo.png" alt="image" id="comimg">

      </div>
       <div class="comdetail">
        <div class="des">
          Company Name:
        </div>
        <div class="des">
          Contact No:
        </div>
        <div class="des">
          Website Link:

        </div>


    </div>
    
      

    </div>
    <div class="box4">
      <div class="companylogo">
        <img src="companylogo.png" alt="image" id="comimg">

      </div>
       <div class="comdetail">
        <div class="des">
          Company Name:
        </div>
        <div class="des">
          Contact No:
        </div>
        <div class="des">
          Website Link:

        </div>


    </div>
  </div>
    

  <script src="script.js"></script>


</div>

</body>
</html>

<?php 
//   }
//   else{
//     echo '<script type="text/javascript">javascript:history.go(-1)</script>'; //redirect to previous page
//     exit();
//   }
 
  
// }


//     else{
//         header('location:../../Login/Login.php');
//         exit();
//     }
// ?>