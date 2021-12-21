<?php include("../home/topnav.php"); ?>

<?php include("../home/company_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<!------heading----------->
<div class="category" id="my-profile" style="margin-top: -14em;"> <p> My Profile </p> </div>

<img src="../../../public/img/comp.png" style="border-radius: 200px; height:160px; width: 160px; margin-left:55%">

<div class="form-space">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
            <label for="name"> Company Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Enter Company Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Owner's Name</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="nic" placeholder="Enter owner's name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="contact">Registered Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Registered Number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter address" required>
            </div>
        </div>
      
        <div class="row">
            <div class="col-25">
            <label for="address">Email</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter Email" required>
            </div>
        </div>
         
        <div class="row">
            <div class="col-25">
            <label for="address">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter contact number" required>
            </div>
        </div>
     
        <div class="row">
            <div class="col-25">
            <label for="address">Experience</label>
            </div>
            <div class="col-75">
            <input type="text" id="address" name="address" placeholder="Enter Experience" required>
            </div>
        </div>
         
        <div class="row">
            <div class="col-25">
            <label for="gs">GS certificate</label>
            </div>
            <div class="col-75">
            <input type="file" id="gs" name="gs" placeholder=""   required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
            <label for="brc">Business Registration certificate</label>
            </div>
            <div class="col-75">
            <input type="file" id="address" name="brc" placeholder="" required>
            </div>
        </div>


          </br>
        <div class="row">
            <input type="submit" value="Save" class="green-button">
        </div>
    </form>
</div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="../../../public/img/arrow.png" alt="up_arrow"></a>
</div> 


<?php include("../home/footer.php"); ?>
