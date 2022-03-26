<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/customer/ads.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<!--------------------------search bar------------------------------->
<div class="wrap">
    <div class="search" style="margin-top:-36em">
        <input type="text" class="searchTerm" placeholder="Search">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

<!---------------------Select options --------------------------------->

<table class="select-relate">
    <tr>
        <td  style="padding:1em 8em;"> District</td>
        <td  style="padding:1em 8em;">City</td>
        <td  style="padding:1em 8em;">Category</td>
    </tr>


    <tr>
        <td  style="padding:1em 8em;"> 
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
        <td  style="padding:1em 8em;">
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
        <td  style="padding:1em 8em;">
            <form name = "select"  method="post">
                    <select name="categoty" id="list3" style="background-color: #3E5AD8; height:35px; color:white; border:none;">
                        <option value =" "  selected label="Category"> Select Category</option>
                        <option value="#" style="background-color: white; color:black"> Plumber</option>
                        <option value="#" style="background-color: white; color:black"> Masons</option>
                        <option value="#" style="background-color: white; color:black"> Tile</option>
                        <option value="#" style="background-color: white; color:black"> Carpenters</option>
                        <option value="#" style="background-color: white; color:black"> Painters</option>
                        <option value="#" style="background-color: white; color:black"> Electricians</option>
                        <option value="#" style="background-color: white; color:black"> Landscaping</option>
                        <option value="#" style="background-color: white; color:black"> Contractors</option>
                        <option value="#" style="background-color: white; color:black"> Professionals</option>
                        <option value="#" style="background-color: white; color:black"> Stones/sand/soil</option>
                        <option value="#" style="background-color: white; color:black"> Concrete Slab</option>
                        <option value="#" style="background-color: white; color:black"> Equipment Repairing </option>
                        <option value="#" style="background-color: white; color:black"> A/C</option>
                        <option value="#" style="background-color: white; color:black"> Welding</option>
                        <option value="#" style="background-color: white; color:black"> Cooking</option>
                        <option value="#" style="background-color: white; color:black"> Cushion Works</option>
                        <option value="#" style="background-color: white; color:black"> Vehicle Repairs</option>
                        <option value="#" style="background-color: white; color:black"> Cleaners</option>
                        <option value="#" style="background-color: white; color:black"> CCTV</option>
                        <option value="#" style="background-color: white; color:black"> Ceiling</option>
                        <option value="#" style="background-color: white; color:black"> Well</option>
                        <option value="#" style="background-color: white; color:black"> Chair Weavers</option>
                        <option value="#" style="background-color: white; color:black"> Rent Tools</option>
                        <option value="#" style="background-color: white; color:black"> Curtains</option>
                        <option value="#" style="background-color: white; color:black"> Solar Panel fixing</option>
                        <option value="#" style="background-color: white; color:black"> Demolishing</option>
                        <option value="#" style="background-color: white; color:black"> Pest Control</option>
                        <option value="#" style="background-color: white; color:black"> Design</option>
                        <option value="#" style="background-color: white; color:black"> Movers</option>
                        <option value="#" style="background-color: white; color:black"> Aluminium</option>
                        <option value="#" style="background-color: white; color:black"> Catering</option>
                    </select>
            </form>
        </td>
    </tr>

</table>


<!----------------------------------- Workers-related to -------------------------------------------------------->
<div class="customer-ad">
    <div class="ad-space-row">
<!---------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="ad-space" style="width: 30%; margin-left: -0.5em; margin-top:5em; margin-right:3em; font-size:13px;">
                    <table style="margin-top: 2em; margin-left:2em; margin-right:1em;">
                        <tr>
                            <td rowspan="5">
                                <img src="<?php echo URLROOT;?> /public/img/w3.jpg" alt="propic" class="img-ad-worker"/>
                            </td>
                            <td> Supun Guruge</td>
                        </tr>
                        <tr>
                            <td><b>Colombo </b></td>
                        </tr>
                        <tr>
                            <td>071 777 4445</td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">Full day</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td> <b>Description</b> :</td>
                        </tr>
                        <tr> 
                            <td colspan="2"> aaaaaa aaaa aaaaaaaa aaaa ................. ............... .........</td>
                        </tr> 
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td><b><b>Focus Area : </b></td>
                        </tr>
                        <tr> 
                            <td> <button class="focus-area">Designer</button> </td>
                            <td> <button class="focus-area">Architecture</button> </td>
                        </tr>
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td> <b>Job Count :</b> </td>
                        </tr>
                        <tr> 
                            <td> 12  </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> 
                                <!-- <input type="submit" value="Invite for Job" class="pink-button" style="margin-left:7%;  margin-bottom:2em; width:80%;">   -->
                                <button id="myBtn" class="pink-button" style="margin-left:7%;  margin-bottom:2em; width:80%; text-decoration:none;"> Invite for Job </button>
                            </td>
                        </tr>
                    </table>
            </div>

            
                       
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="ad-space" style="width: 30%; margin-left: -0.5em; margin-top:5em; margin-right:3em; font-size:13px;">
                    <table style="margin-top: 2em; margin-left:2em; margin-right:1em;">
                        <tr>
                            <td rowspan="5">
                                <img src="<?php echo URLROOT;?> /public/img/w3.jpg" alt="propic" class="img-ad-worker"/>
                            </td>
                            <td> Supun Guruge</td>
                        </tr>
                        <tr>
                            <td><b>Colombo </b></td>
                        </tr>
                        <tr>
                            <td>071 777 4445</td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">Full day</td>
                        </tr>
                        <tr>
                            <td style="color:#0526BA;">Last active 3d ago</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td> <b>Description</b> :</td>
                        </tr>
                        <tr> 
                            <td colspan="2"> aaaaaa aaaa aaaaaaaa aaaa ................. ............... .........</td>
                        </tr> 
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td><b>Focus Area :</td>
                        </tr>
                        <tr> 
                            <td> <button class="focus-area">Designer</button> </td>
                            <td> <button class="focus-area">Architecture</button> </td>
                        </tr>
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td> <b>Job Count :</b> </td>
                        </tr>
                        <tr> 
                            <td> 12  </td>
                            <td> <button class="blue-out-button" style="float:right; margin-right: 2em; "> Message</button>  </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> 
                                <input type="submit" value="Invite for Job" class="pink-button" style="margin-left:7%; margin-bottom:2em; width:80%;">  
                            </td>
                        </tr>
                    </table>
            </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="ad-space" style="width: 30%; margin-left: -0.5em; margin-top:5em; margin-right:3em; font-size:13px;">
                    <table style="margin-top: 2em; margin-left:2em; margin-right:1em;">
                        <tr>
                            <td rowspan="5">
                                <img src="<?php echo URLROOT;?> /public/img/w3.jpg" alt="propic" class="img-ad-worker"/>
                            </td>
                            <td> Supun Guruge</td>
                        </tr>
                        <tr>
                            <td><b>Colombo </b></td>
                        </tr>
                        <tr>
                            <td>071 777 4445</td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">Full day</td>
                        </tr>
                        <tr>
                            <td style="color:#0526BA;">Last active 3d ago</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td> <b>Description</b> :</td>
                        </tr>
                        <tr> 
                            <td colspan="2"> aaaaaa aaaa aaaaaaaa aaaa ................. ............... .........</td>
                        </tr> 
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td><b>Focus Area :</b></td>
                        </tr>
                        <tr> 
                            <td> <button class="focus-area">Designer</button> </td>
                            <td> <button class="focus-area">Architecture</button> </td>
                        </tr>
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td> <b>Job Count :</b> </td>
                        </tr>
                        <tr> 
                            <td> 12  </td>
                            <td> <button class="blue-out-button" style="float:right; margin-right: 2em; "> Message</button>  </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> 
                                <input type="submit" value="Invite for Job" class="pink-button" style="margin-left:7%;  margin-bottom:2em; width:80%;">  
                            </td>
                        </tr>
                    </table>
            </div>

    </div>
</div>

<!-----------------------------------------new row------------------------------------------------------------------>
<div class="customer-ad">
    <div class="ad-space-row">
<!---------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="ad-space" style="width: 30%; margin-left: -0.5em; margin-top:5em; margin-right:3em; font-size:13px;">
                    <table style="margin-top: 2em; margin-left:2em; margin-right:1em;">
                        <tr>
                            <td rowspan="5">
                                <img src="<?php echo URLROOT;?> /public/img/w3.jpg" alt="propic" class="img-ad-worker"/>
                            </td>
                            <td> Supun Guruge</td>
                        </tr>
                        <tr>
                            <td><b>Colombo </b></td>
                        </tr>
                        <tr>
                            <td>071 777 4445</td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">Full day</td>
                        </tr>
                        <tr>
                            <td style="color:#0526BA;">Last active 3d ago</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td> <b>Description</b> :</td>
                        </tr>
                        <tr> 
                            <td colspan="2"> aaaaaa aaaa aaaaaaaa aaaa ................. ............... .........</td>
                        </tr> 
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td><b><b>Focus Area : </b></td>
                        </tr>
                        <tr> 
                            <td> <button class="focus-area">Designer</button> </td>
                            <td> <button class="focus-area">Architecture</button> </td>
                        </tr>
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td> <b>Job Count :</b> </td>
                        </tr>
                        <tr> 
                            <td> 12  </td>
                            <td> <button class="blue-out-button" style="float:right; margin-right: 2em; "> Message</button>  </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> 
                                <input type="submit" value="Invite for Job" class="pink-button" style="margin-left:7%;  margin-bottom:2em; width:80%;">  
                            </td>
                        </tr>
                    </table>
            </div>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="ad-space" style="width: 30%; margin-left: -0.5em; margin-top:5em; margin-right:3em; font-size:13px;">
                    <table style="margin-top: 2em; margin-left:2em; margin-right:1em;">
                        <tr>
                            <td rowspan="5">
                                <img src="<?php echo URLROOT;?> /public/img/w3.jpg" alt="propic" class="img-ad-worker"/>
                            </td>
                            <td> Supun Guruge</td>
                        </tr>
                        <tr>
                            <td><b>Colombo </b></td>
                        </tr>
                        <tr>
                            <td>071 777 4445</td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">Full day</td>
                        </tr>
                        <tr>
                            <td style="color:#0526BA;">Last active 3d ago</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td> <b>Description</b> :</td>
                        </tr>
                        <tr> 
                            <td colspan="2"> aaaaaa aaaa aaaaaaaa aaaa ................. ............... .........</td>
                        </tr> 
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td><b>Focus Area :</td>
                        </tr>
                        <tr> 
                            <td> <button class="focus-area">Designer</button> </td>
                            <td> <button class="focus-area">Architecture</button> </td>
                        </tr>
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td> <b>Job Count :</b> </td>
                        </tr>
                        <tr> 
                            <td> 12  </td>
                            <td> <button class="blue-out-button" style="float:right; margin-right: 2em; "> Message</button>  </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> 
                                <input type="submit" value="Invite for Job" class="pink-button" style="margin-left:7%; margin-bottom:2em; width:80%;">  
                            </td>
                        </tr>
                    </table>
            </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="ad-space" style="width: 30%; margin-left: -0.5em; margin-top:5em; margin-right:3em; font-size:13px;">
                    <table style="margin-top: 2em; margin-left:2em; margin-right:1em;">
                        <tr>
                            <td rowspan="5">
                                <img src="<?php echo URLROOT;?> /public/img/w3.jpg" alt="propic" class="img-ad-worker"/>
                            </td>
                            <td> Supun Guruge</td>
                        </tr>
                        <tr>
                            <td><b>Colombo </b></td>
                        </tr>
                        <tr>
                            <td>071 777 4445</td>
                        </tr>
                        <tr> 
                            <td style="color: #F10B67;">Full day</td>
                        </tr>
                        <tr>
                            <td style="color:#0526BA;">Last active 3d ago</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td> <b>Description</b> :</td>
                        </tr>
                        <tr> 
                            <td colspan="2"> aaaaaa aaaa aaaaaaaa aaaa ................. ............... .........</td>
                        </tr> 
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td><b>Focus Area :</b></td>
                        </tr>
                        <tr> 
                            <td> <button class="focus-area">Designer</button> </td>
                            <td> <button class="focus-area">Architecture</button> </td>
                        </tr>
                        <tr> 
                            <td> </br>  </td>
                        </tr>
                        <tr> 
                            <td> <b>Job Count :</b> </td>
                        </tr>
                        <tr> 
                            <td> 12  </td>
                            <td> <button class="blue-out-button" style="float:right; margin-right: 2em; "> Message</button>  </td>
                        </tr>
                        <tr> 
                            <td> </br> </br> </br> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> 
                                <input type="submit" value="Invite for Job" class="pink-button" style="margin-left:7%;  margin-bottom:2em; width:80%;">  
                            </td>
                        </tr>
                    </table>
            </div>

    </div>
</div>




<!------------------------------------------------------------popoup window-------------------------------------------------->

<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 10%;">
                <form action="">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:35%;">Invite for Job <img src="<?php echo URLROOT;?> /public/img/invite.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25">
                            <label for="time" style="color: #0526BA; font-size:15px;">Time</label>
                            </div>
                            <div class="col-75">
                            <input type="time" id="time" name="time" placeholder="Enter time" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="sdate" style="color: #0526BA; font-size:15px;">Start Date</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="sdate" name="sdate" placeholder="Enter star date" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                            <label for="address" style="color: #0526BA; font-size:15px;">Address</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Enter adress" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="amount" style="color: #0526BA; font-size:15px;">Budget</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="amount" name="amount" placeholder="Enter amount" required>
                            </div>
                        </div>
                        </br> </br>
                        <div class="row">
                            <input type="submit" value="Submit" class="blue-button" style="margin-left:45%;">
                        </div>
                        </br>
                </form>
        </div>
    </div>

    <!------------------Java Script -  popup message------------------------------->
    <script type="text/javascript" src="<?php echo URLROOT;?> /public/js/pink-button-popup.js"> 
    </script>
            
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>        

<?php include_once APPROOT . '/views/includes/footer.php'; ?>