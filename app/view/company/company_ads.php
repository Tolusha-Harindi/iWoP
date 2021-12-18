
<?php include("../home/topnav.php"); ?>

<?php include("../home/company_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link rel='stylesheet' href="../../../public/css/company/ads.css"/>
<link rel='stylesheet' href="../../../public/css/home/popup.css"/>
<link rel='stylesheet' href="../../../public/css/home/table.css"/>



<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<style>
   .right-upper{
       width:70%;
       height:600px;
       margin-left:350px;
      
   }
   .pink-outer-button{
    border-radius:5px;
    border: none;
    color:#F10B67 ;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: white; 
 
     border: 2px solid  #F10B67;
   }

   .pink-outer-button:hover{
    background-color:#f0488b ;
    color: white;
   }
   .title{
       left:-25px;
   }
   .dis{
       margin-left:30px;
   }
   .worker-request{
       /* background-color:white; */
       height:400px;
       width:95%;
       /* border:2px solid green;  */
       margin-left:20px;
       /* box-shadow: 4px 8px 16px lightgray; */

   }
   table{
       
       width: 100%;
       background: white;
    box-shadow: 4px 8px 16px lightgray;

   }
   .request{
    background: white;
    box-shadow: 4px 8px 16px lightgray;
   
    border:2px solid white; 
   }
   .pink-button2{
    background: #F10B67;
    color: white;
    border:none;
    padding: 8px 25px;
    border-radius: 5px;
    cursor: pointer;
}

.pink-button2:hover{
    background: #f0488b;
}
td {
  text-align: center;
}

input[type=tel]{
    width: 91%;
    padding: 10px;
    border: 1px solid #6f7dd8;
    border-radius: 4px;
    resize: vertical;
    box-sizing: border-box;
}
#category{
    width: 91%;
    padding: 10px;
    border: 1px solid #6f7dd8;
    border-radius: 4px;
    resize: vertical;
    box-sizing: border-box;
    
    
    /* margin: 0 auto;*/
    }

 /* #work{
    width: 91%;
    padding: 10px;
    border: 1px solid #6f7dd8;
    border-radius: 4px;
    resize: vertical;
    
 }    */

</style>
                


<a href="#post a new Ad" class="top-button1" style="margin-top:-550px"> Post a new Ad  </a>
<a href="#Posted ads" class="top-button2" style="margin-top: -550px;"> Posted Ads </a>
 <div class="right-upper" style=" border:1px solid white; margin-top: -500px">

 
 <div class="heading1" style="font-family:Rancho; font-size:35px; margin-left:65px;"> <p> Requested for posted Ads </p> </div>
            <!---------------------------------------------------------------------------------------------------->
            <div class="ad-space">
                    <div class="img-user">
                        <button class="pink-outer-button" style="margin-left:250px;">
                             Delete
                        </button>
                    </div>
                    <p class="title"> Need a Plumber</p>

                    <p class="dis">
                        Need a well experienced plumber 
                    </p>
                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name1"><b>Category:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">Plumber </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name">&nbsp<b>Location:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">Galle</p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> &nbsp<b>Contact:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"> 077-1452683</p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Start date:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">12/20/2021 </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>End date:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail">20/20/2021 </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Budget :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"> Rs.2500.00 </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Work to be done:</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <img src="../../../public/img/work.jpg" class="work">
                                <img src="../../../public/img/work.jpg" class="work">
                            </div>
                        </div>

                      
                        
            </div>
            <!-- right-requests of workers -->
            <div class="request" style="  margin-top:-450px; margin-left:450px; width:450px; height:450px;">
            <p class="number-of-applicants" style="margin-left:20px; font-weight:bold;">
                5 Applicants  applied
            </p>
                      <div class="worker-request" >
                           <table>
                              <tr>
                                  <td>
                                  <img src="../../../public/img/w3.jpg" class="img-ad">
                                  </td>
                                  <td>
                                     <b>Amal Perera</b> <br>
                                      <b>Galle</b>
                                  </td>
                                  <td>
                                      <button class="blue-button">
                                               Accept
                                      </button>
                                  </td>
                                  <td>
                                      <button class="pink-button2">
                                              Decline
                                      </button>
                                  </td>
                              </tr>

                           </table>
                          <br>

                           <table>
                              <tr>
                                  <td>
                                  <img src="../../../public/img/w3.jpg" class="img-ad">
                                  </td>
                                  <td>
                                     <b>Amal Perera</b> <br>
                                      <b>Galle</b>
                                  </td>
                                  <td>
                                      <button class="blue-button">
                                               Accept
                                      </button>
                                  </td>
                                  <td>
                                      <button class="pink-button2">
                                              Decline
                                      </button>
                                  </td>
                              </tr>

                           </table>
                           <br>

                           <table>
                              <tr>
                                  <td>
                                  <img src="../../../public/img/w3.jpg" class="img-ad">
                                  </td>
                                  <td>
                                     <b>Amal Perera</b> <br>
                                      <b>Galle</b>
                                  </td>
                                  <td>
                                      <button class="blue-button">
                                               Accept
                                      </button>
                                  </td>
                                  <td>
                                      <button class="pink-button2">
                                              Decline
                                      </button>
                                  </td>
                              </tr>

                           </table>
                            <br>
                           <table>
                              <tr>
                                  <td>
                                  <img src="../../../public/img/w3.jpg" class="img-ad">
                                  </td>
                                  <td>
                                     <b>Amal Perera</b> <br>
                                      <b>Galle</b>
                                  </td>
                                  <td>
                                      <button class="blue-button">
                                               Accept
                                      </button>
                                  </td>
                                  <td>
                                      <button class="pink-button2">
                                              Decline
                                      </button>
                                  </td>
                              </tr>

                           </table>
                          
                           <table>
                              <tr>
                                  <td>
                                  <img src="../../../public/img/w3.jpg" class="img-ad">
                                  </td>
                                  <td>
                                     <b>Amal Perera</b> <br>
                                      <b>Galle</b>
                                  </td>
                                  <td>
                                      <button class="blue-button">
                                               Accept
                                      </button>
                                  </td>
                                  <td>
                                      <button class="pink-button2">
                                              Decline
                                      </button>
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
                    <p class="heading" style="margin-top: 1em; margin-left:35%;">Hire a service provider <img src="../../../public/img/service.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25">
                            <label for="category" style="color: #0526BA; font-size:15px;">category</label>
                            </div>
                            <div class="col-75">
                            
                            <select name="category" id="category">
                            <option value="">Plumber</option>
                            <option value="">Masons</option>
                            <option value="">Tile</option>
                            <option value="">Carpenter</option>
                            <option value="">Painter</option>
                            <option value="">Electrician</option>
                            <option value="">Landscaping</option>
                            <option value="">  Contractors</option>
                            <option value="">  Professionals</option>
                            <option value=""> Stones/Sand/soil</option>
                            <option value="">Concrete slab</option>
                            <option value=""> Equipment Repairing</option>
                            <option value=""> A/C</option>
                            <option value=""> Welding</option>
                            <option value="">Cooking</option>
                            <option value="">Cushion works</option>
                            <option value="">Vehicle repairs</option>
                            <option value="">Cleaners</option>
                            <option value="">CCTV</option>
                            <option value="">Ceiling</option>
                            <option value="">Well</option>
                            <option value=""> Chair weavers</option>
                            <option value="">Solar panel fixing</option>
                            <option value=""> Demolishing</option>
                            <option value=""> Pest control</option>
                            <option value="">Mug Designer</option>
                            <option value="">Movers</option>
                            <option value=""> Aluminium</option>
                            <option value="">Catering</option>
                            <option value="">Makeup Artists</option>


                             </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            <label for="title" style="color: #0526BA; font-size:15px;">Title</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="title" name="title" placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            <label for="time" style="color: #0526BA; font-size:15px;">Job Description</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="" name="" placeholder="Enter job description " required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            <label for="address" style="color: #0526BA; font-size:15px;">Address</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Enter address" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="address" style="color: #0526BA; font-size:15px;">Contact Number</label>
                            </div>
                            <div class="col-75">
                            <input type="tel" id="" name="" placeholder="Enter Contact number" required>
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
                            <label for="sdate" style="color: #0526BA; font-size:15px;">End Date</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="edate" name="edate" placeholder="Enter end date" required>
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

                        <div class="row">
                            <div class="col-25">
                            <label for="amount" style="color: #0526BA; font-size:15px;">Work to be done</label>
                            </div>
                            <div class="col-75">
                            <input type="file" id="work" name="work" placeholder="" required>
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

    <!------------------Java Script------------------------------->
    <script src="../../../public/js/top-button1-popup.js"> 
    </script>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="../../../public/img/arrow.png" alt="up_arrow"></a>
</div> 
            
<?php include("../home/footer.php"); ?>
