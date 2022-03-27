<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/worker/container.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--------------------------search bar------------------------------->
<div class="wrap">
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Search">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

<!---------------------Select options --------------------------------->

<table class="select-relate">
    <tr>
        <td  style="padding:0.5em 7em"> District</td>
        <td  style="padding:0.5em 7em">City</td>
        <td  style="padding:0.5em 7em">Category</td>
    </tr>

    <tr>
        <td  style="padding:0.5em 7em; width:8em; height:3em;"> 
            <form name = "select"  method="post">
                <select name="District" id="list1" style="background-color: #3E5AD8; height:35px; color:white; border:none;">
                    <option value =" "  selected label="District" style="background-color: white; color:black"> Select District</option>
                    <option value ="Colombo"    label="Colombo" style="background-color: white; color:black"> Colombo</option>
                    <option value ="Kalutara"   label="Kalutara" style="background-color: white; color:black"> Kaluatara</option>
                    <option value ="Gampaha"    label="Gampaha" style="background-color: white; color:black"> Gampaha</option>
                    <option value ="Galle"      label="Galle" style="background-color: white; color:black"> Gampaha</option>
                    <option value ="Kandy"      label="Kandy" style="background-color: white; color:black"> Kandy</option>
                    <option value ="Mullaitiuv" label="Mullaitiuv" style="background-color: white; color:black"> Mullaitiuv</option>
                    <option value ="Kurunegala" label="Kurunegala" style="background-color: white; color:black"> Kurunegala</option>
                    <option value ="Matara"     label="Matara" style="background-color: white; color:black"> Matara</option>
                    <option value ="Kegalle"    label="Kegalle" style="background-color: white; color:black"> Kegalle</option>
                    <option value ="Ratnapura"  label="Ratnapura" style="background-color: white; color:black"> Ratnapura</option>
                    <option value ="Anuradhapura"label="Anuradhapura" style="background-color: white; color:black"> Anuradhapura</option>
                    <option value ="Badulla"    label="Badulla" style="background-color: white; color:black"> Badulla</option>
                    <option value ="Puttalam"   label="Puttalam" style="background-color: white; color:black"> Puttalam</option>
                    <option value ="Matale"     label="Matale" style="background-color: white; color:black"> Matale</option>
                    <option value ="Hambantota" label="Hambantota" style="background-color: white; color:black"> Hambantota</option>
                    <option value ="Nuwara Eliya"label="Nuwara Eliya" style="background-color: white; color:black"> Nuwara Eliya</option>
                    <option value ="Jaffna"     label="Jaffna" style="background-color: white; color:black"> Jaffna</option>
                    <option value ="Ampara"     label="Ampara" style="background-color: white; color:black">Ampara</option>
                    <option value ="Polonnaruwa"label="Polonnaruwa" style="background-color: white; color:black"> Polonnaruwa</option>
                    <option value ="Monaragala" label="Monaragala" style="background-color: white; color:black"> Monaragala</option>
                    <option value ="Trincomalee"label="Trincomalee" style="background-color: white; color:black"> Trincomalee</option>
                    <option value ="Batticaloa" label="Batticaloa" style="background-color: white; color:black"> Batticaloa</option>
                    <option value ="Vavuniya"   label="Vavuniya" style="background-color: white; color:black"> Vavuniya</option>
                    <option value ="Kilinochchi"label="Kilinochchi" style="background-color: white; color:black"> Kilinochchi</option>
                    <option value ="Mannar"     label="Mannar"style="background-color: white; color:black"> Mannar</option>
                </select>
            </form>
        </td>
        <!---------------------------------------------------------------------------------------------------->
        <td  style="padding:0.5em 7em; width:8em; height:3em;">
            <form name = "select"  method="post">
                    <select name="city" id="list2" style="background-color: #3E5AD8; height:35px; color:white; border:none;">
                        <option value =" "  selected label="City" style="background-color: white; color:black"> Select City</option>
                        <option value ="Colombo"    label="Colombo" style="background-color: white; color:black"> Colombo</option>
                        <option value ="Kalutara"   label="Kalutara" style="background-color: white; color:black"> Kaluatara</option>
                        <option value ="Gampaha"    label="Gampaha" style="background-color: white; color:black"> Gampaha</option>
                        <option value ="Galle"      label="Galle" style="background-color: white; color:black"> Gampaha</option>
                        <option value ="Kandy"      label="Kandy" style="background-color: white; color:black"> Kandy</option>
                        <option value ="Mullaitiuv" label="Mullaitiuv" style="background-color: white; color:black"> Mullaitiuv</option>
                        <option value ="Kurunegala" label="Kurunegala" style="background-color: white; color:black"> Kurunegala</option>
                        <option value ="Matara"     label="Matara" style="background-color: white; color:black"> Matara</option>
                        <option value ="Kegalle"    label="Kegalle" style="background-color: white; color:black"> Kegalle</option>
                        <option value ="Ratnapura"  label="Ratnapura" style="background-color: white; color:black"> Ratnapura</option>
                        <option value ="Anuradhapura"label="Anuradhapura" style="background-color: white; color:black"> Anuradhapura</option>
                        <option value ="Badulla"    label="Badulla" style="background-color: white; color:black"> Badulla</option>
                        <option value ="Puttalam"   label="Puttalam" style="background-color: white; color:black"> Puttalam</option>
                        <option value ="Matale"     label="Matale" style="background-color: white; color:black"> Matale</option>
                        <option value ="Hambantota" label="Hambantota" style="background-color: white; color:black"> Hambantota</option>
                        <option value ="Nuwara Eliya"label="Nuwara Eliya" style="background-color: white; color:black"> Nuwara Eliya</option>
                        <option value ="Jaffna"     label="Jaffna" style="background-color: white; color:black"> Jaffna</option>
                        <option value ="Ampara"     label="Ampara" style="background-color: white; color:black">Ampara</option>
                        <option value ="Polonnaruwa"label="Polonnaruwa" style="background-color: white; color:black"> Polonnaruwa</option>
                        <option value ="Monaragala" label="Monaragala" style="background-color: white; color:black"> Monaragala</option>
                        <option value ="Trincomalee"label="Trincomalee" style="background-color: white; color:black"> Trincomalee</option>
                        <option value ="Batticaloa" label="Batticaloa" style="background-color: white; color:black"> Batticaloa</option>
                        <option value ="Vavuniya"   label="Vavuniya" style="background-color: white; color:black"> Vavuniya</option>
                        <option value ="Kilinochchi"label="Kilinochchi" style="background-color: white; color:black"> Kilinochchi</option>
                        <option value ="Mannar"     label="Mannar" style="background-color: white; color:black"> Mannar</option>
                    </select>
            </form>
        </td>

        <!------------------------------------------------------------------------------------------------------>
        <td  style="padding:0.5em 7em; width:8em; height:3em;">
            <form name = "select"  method="post">
                    <select name="categoty" id="list3" style="background-color: #3E5AD8; height:35px; color:white; border:none;">
                        <?php foreach($data['allcat'] as $cat):?>
                            <option value =" "  selected label="Category"> Select Category</option>
                <option value="<?php echo $cat->category ?>"><?php echo $cat->category ?></option>
                   <?php endforeach; ?>
                    </select>
            </form>
        </td>
    </tr>

</table>

<!--------------------job vaccancies-------------------------------------------------------------------------->
<div class="customer-ad">
    <div class="ad-space-row">
        <div class="grid-container">
    <?php foreach($data['jobs'] as $jobs): ?>
<!---------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="ad-space" style=" margin-left: 0em; margin-top:4em; margin-right:3em; font-size:13px;">
                    <table style="margin-top: 2em; margin-left:1.5em; margin-right:0.8em; padding-bottom:5px;">
                        <tr>
                            <td rowspan="6">
                                <img src="<?php $jobs->prof_pic;?>" alt="propic" class="img-worker"/>
                            </td>
                            <td><?php echo $jobs->com_name; ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo $jobs->address; ?></b></td>
                        </tr>
                        <tr>
                            <td><?php echo $jobs->contact; ?></td>
                        </tr>
                        <tr>
                            <td style="color:#0526BA;"><?php echo $jobs->title; ?></td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">Start Date: <?php echo $jobs->start_date; ?></td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">End Date: <?php echo $jobs->end_date; ?></td>
                        </tr>
                        <tr> 
                            <td> </br> </td>
                        </tr>
                        <tr> 
                            <td> <b>Description</b>:</td>
                        </tr>
                        <tr> 
                            <td colspan="2"><?php echo $jobs->description; ?></td>
                        </tr> 
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td><b>Focus Area : </b></td>
                            <td><button class="focus-area"><?php echo $jobs->category; ?></button></td>
                        </tr>
                        <tr> 
                            <td colspan="2"><b>Work To Be Done:</b> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> <button class="focus-area"><?php echo $jobs->work; ?></button> </td>
                        </tr>
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td> <b> Budget:</b> </td>
                            <td> <?php echo $jobs->budget; ?></td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> 
                               <form action="<?php echo URLROOT ."/workers/apply_jobs/". $jobs->ads_id; ?>" method="POST">
                                <button id="myBtn" class="pink-button" style="margin-left:7%;  margin-bottom:2em; width:80%; text-decoration:none;"> Apply for Job </button>
                               </form>
                            </td>
                        </tr>
                    </table>
            </div>
            <?php endforeach; ?>
        </div>     
    </div>
</div>

<br/>
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
