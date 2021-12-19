<?php include("../home/topnav.php"); ?>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/popup.css"/>
<link rel='stylesheet' href="../../../public/css/company/star.css"/>
<link rel='stylesheet' href="../../../public/css/company/ratingsbar.css"/>
<link rel='stylesheet' href="../../../public/css/company/form.css"/>

<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<style>
    

.vertical-line{
  border-left: 2px solid grey;
  height: 100%;
  margin-left:550px;
  margin-top:-1500px;
  
}  
.left{
  width: 40%;
  height: 1500px;
  border: 1px solid white;  
  box-sizing: border-box;
  
}

.company-dis{
    border: 1px solid white; 
    margin-top:10px; 
    height:700px;
    width:85%;
    border-radius:5px;
    margin-left:50px; 
    box-shadow: 4px 8px 16px lightgray;

}
.user-reviews-heading{
    border: 1px ; 
    height:100px;
    width:85%;
    margin-left:50px; 
    margin-top:50px;
   }

 .heading-img{
    margin-top:10px; 
     border:1px ;
     height:80px;
     width: 100px;
     margin-left:20px;
 }  
 .heading-review{
     border:1px ;
     margin-top:-50px;
    margin-left:150px;
    font-size:25px;
    
 }
.img-container{
    border:1px solid white;
    margin-top:50px;
}
.img1{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    border-radius:5px;
    margin-top:10px;
}
.img2{
    display: block;
    margin-left: 180px;
    margin-right: auto;
    width: 20%;
    border-radius:5px;
}

.companyname{
    font-size:10px;
    /* margin-left:150px; */
    font-weight:bold;
    text-align:center;
}

.user_ratings{
    font-size:8px;
    /* margin-left:125px; */
    font-weight:bold;
    color:blue;
    text-align:center;
}
.ex{
    color:rgba(241, 11, 103, 1);
    font-size:10px;
    /* margin-left:120px; */
    text-align:center;
}
.number{
    /* margin-left:80px; */
    text-align:center;
    font-size:14px;
}
.right{
    width: 80%;
  height: 800px;
  /* border: 1px solid blue; */
  /* box-sizing: border-box; */
  margin-left:90px;
  margin-top:0px;
  
}
.right-lower{
    margin-top:-10px;
    width: 95%;
    height: 500px;
    /* border: 1px solid blue; */
    box-sizing: border-box;
    margin-left:20px;
    /* background:#dff9fb; */
    background-color: #ECEFFF;
    box-shadow: 4px 8px 16px lightgray;
    border-radius:5px;

}
.right-upper{
    margin-top:20px;
    width: 80%; 
    margin-left:90px;
    box-shadow: 4px 8px 16px lightgray;
    border-radius:5px;
}
/* last active  */
.last-active{
    margin-top:20px;
    margin-left:500px;
    color:blue;
}
#review{
    border: 1px solid #6f7dd8;
    resize:none;
    height:150px;
    width:380px;
}
h5{
    float:right;
    color:blue;
}
/* label{

    font-weight:bold;
} */

h3{
   text-align:center;
   font-family: 'Rancho', sans-serif;
   font-size:25px;
}
.location,.pnumber{
    text-align:center;
    color:blue;
}
.message{
    /* color: #F10B67; */
    border: 2px solid #F10B67;
    background-color: white;
    color: black;
    padding: 10px 28px;
    font-size: 16px;
    cursor: pointer;
    border-radius:5px;
    
}
.message:hover{
    /* background-color:#FC427B; */
    background-color: #F10B67;
    color: white;
}
/* pop window css */
.pop-up-heading{
    /* margin-left: 20%; */
    font-size:18px;
    text-align:center;
    color:#ff3f34;
}
.btn {
    margin-left:50px;
    border: 2px solid grey;
    border-radius: 5px;
    background-color: white;
    color: red;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}
.btn:hover{
    background: #ff3f34;
    color:white;
}
#reporttext{
    border: 1px solid gray;
    resize:none;
    height:150px;
    width:580px;
    margin-top:20px;
    margin-left:60px;
}
.red-button{
    color: white;
    border:none;
    padding: 8px 25px;
    border-radius: 5px;
    cursor: pointer;
}
.right-down{
    width: 90%;
    height: 300px;
    margin-top:10px;
    /* border: 1px solid blue; */
    box-sizing: border-box;
    margin-left:20px;
     /* background:#dff9fb; */
    }

.review-1{
    width: 100%;
    height:150px;
    box-shadow: 4px 8px 16px lightgray;
    border-radius:5px;
}
/* review iamge */
#rimg{
    width:80px;

}

#star{
    
    width:90px;
}


/* user review */
.user-reviews{
    height:180px;
    margin-top:50px;
    width:85%;
    border-radius:5px;
    margin-left:50px; 
     box-shadow: 4px 8px 16px lightgray;
}
.user-img{
    border:1px ;
    height:100px;
    width:100px;
    margin-left:15px;
}
.time-wrapper{
    border-radius:5px;
    background-color:rgba(236, 239, 255, 1);
    border:1px solid white;
    height:30px;
    width:100px;
    margin-top:-100px;
    margin-left:350px;
   
}
.time{
    color:rgba(5, 38, 186, 1); 
    
    margin-top:5px;
    text-align: center;
}

.name-of-user{
    border:1px ;
    margin-top:20px;
    margin-left:150px;
}
.review-star{
  border:1px;
  
}
.star{
    width:100px;
}
/* report-pop-up */

</style>
 <div  class = "left" style="margin-top: 100px; border:1px ;">

    <div class="company-dis">
     <!-- last active -->
      <!-- <h5>Last Active 2 days ago</h5> -->
            <div class="img-container">
                <img src="../../../public/img/comp.png" alt="propic" class="img1"/>
            </div>
           <p class="companyname">
               Dream Wave
           </p>
           <p class="user_ratings">
               User Rastings  60%
           </p>

           <div class="img-container2">
                <img src="../../../public/img/star.png" alt="propic" class="img2"/>
            </div>
            <p class="ex">
               10+ Years Business
           </p>

           <p class="number">
              40 service providers ratings 
           </p>
           <div class="ratings-bar" style="border:1px ; height:220px; margin-left:5px;">
          
                <div class="side">
                    <div>5 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                    <div class="bar-5"></div>
                    </div>
                </div>
                <div class="number-of-ratings">
                    <div> &nbsp &nbsp 150</div>
                </div>
                <br>

                <div class="side">
                    <div>4 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                    <div class="bar-4"></div>
                    </div>
                </div>
                <div class="number-of-ratings">
                   <div> &nbsp &nbsp 63</div>
                </div>    
                 <br>
                <div class="side">
                    <div>3 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                    <div class="bar-3"></div>
                    </div>
                </div>
                <div class="number-of-ratings">
                 <div>&nbsp  &nbsp 45</div> 
                </div> 
                <br>
                <div class="side">
                    <div>2 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                    <div class="bar-2"></div>
                    </div>
                </div>
                <div class="number-of-ratings">
                    <div>&nbsp  &nbsp 26</div>
                </div>  
                <br>
                
                <div class="side">
                    <div>1 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                    <div class="bar-1"></div>
                    </div>
                </div>
                <div class="number-of-ratings">
                    <div>&nbsp &nbsp 45</div>
                </div>    
                <br>
          </div>
          <br>
          <br>
          <div class="no-of-jobs"  style="border:1px solid white; width:100%; height:50px;">
               <b>Number of jobs given for this month :24<b>
               &nbsp <button class="message">Message</button>
           </div>

           </div>
        <div class="user-reviews-heading">
             <div class="heading-img" >
               <img src="../../../public/img/headingrating.png" alt="heading">
             </div>
               <div class="heading-review">
                   <b>User Reviews</b>
              </div>
              
              </div>
           
       <hr>

          <!-- example of user review -->

          <div class="user-reviews" style="border:1px ;">
          
                <div class="user-img">
                 <img src="../../../public/img/review.png" alt="">
              </div>

                 <div class="time-wrapper">
                      <div class="time">
                          2M ago
                      </div>
                 </div>

              <div class="name-of-user">
                     Posted by Namal Perera 
                   <br>
                   <br>
                           Good service
                   <br>
                   <br>
                        <div class="review-star">
                              <img src="../../../public/img/star.png" alt="star" class="star">
                       </div>

              </div>
        </div> 
  </div>
  
</div>

          
    
</div>
<!-- vertical line in the middle of the page -->
<div class="vertical-line">
<!-- Report button -->
            <div class="reportbutton">
                <button class="pink-button" style="margin-left:650px; margin-top:-1500px; font-size:20px; width:100px; ">
                      Report 
                </button>
            </div>

  <!-- company-address,email,contatct -->
        <div class="right-upper" style="border:1px solid white; height:350px;">
          <div class="last-active" style="border:1px solid white; height:50px;" >
                 Last active 5h 
          </div>
          <div class="address"  style="border:1px solid white; height:100px; margin-left:100px; padding-top:10px;">
                   Dream Wave <br>
                   Construction Company, <br>
                   Matara Road,  <br>
                   Matara.
          </div>

          <hr>

          <div class="contact-number" style="border:1px solid white; height:50px; margin-left:100px; padding-top:10px;">
                   <p>Contact Number  </p>
                
                  <div  class="p-number"style="border:1px solid white; height:50px; margin-left:150px; margin-top:-35px;">
                        077-450125698
                  </div> 
          </div>

          <div class="Email" style="border:1px solid white; height:50px; margin-left:100px; padding-top:10px;">
                       <p>E-mail   </p>
                 <div  class="p-number"style="border:1px solid white; height:50px; margin-left:150px; margin-top:-35px;">
                           dreamwave145@gmail.com
                </div> 
          </div>
        
     </div>


  <!-- Write a review -->


  <div class="right" style="border: 1px solid red ; margin-top:0px;">
         <h3>Write a review</h3>
             <div class="right-lower"style="border: 1px solid white"; >
                <div class="container">
                     <form action="/action_page.php">
                         <div class="row">
                            <div class="col-25">
                                 <label for="fname"> Name</label>
                             </div>

                            <div class="col-75">
                                 <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            </div>
                         </div>
                            <br>

                            <div class="row">
                                <div class="col-25">
                                        <label for="fname">E-mail</label>
                                </div>

                                <div class="col-75">
                                     <input type="text" id="email" name="email" placeholder="Your email..">
                               </div>
                             </div>
                                      <br>
                                
                            <div class="row">
                                 <div class="col-25">
                                         <label for="subject">Review</label>
                                 </div>
                                 <div class="col-75">
                                        <textarea id="subject" name="subject" placeholder="Write review.." style="height:100px"></textarea>
                                 </div>
                            </div>
                                    <br>
                                    <br>
               

                            <div class="row">
                                 <input type="submit" value="submit" class="green-button">
                             </div>
                     </form> 
              </div>
          </div>     
      </div>
   </div>  
</div>


 


<!-- pop up window -->

<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 5%;">
                <form action="">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:35%; color:blue">Report User <img src="../../../public/img/report.png" class="popup-image"></p>
                        
                     <div class="row" style="margin-left:50px";>
                              <input type="radio" id="first" name="report" value="NOT">
                                  <label for="html" style="color:rgba(5, 38, 186, 1)">Do not pay</label>

                             <input type="radio" id="second" name="report" value="Unprof"  style="margin-left:100px">
                              <label for="css"style="color:rgba(5, 38, 186, 1)">Fake user</label>    
                     </div>

                   <div class="row"  style="margin-left:50px";>
                           <input type="radio" id="third" name="report" value="Unprof">
                             <label for="css"style="color:rgba(5, 38, 186, 1)">Unwanted feedbacks</label>

                             <input type="radio" id="fourth" name="report" value="notcom" style="margin-left:35px;">
                                <label for="css"style="color:rgba(5, 38, 186, 1)">Fake information</label>
                  </div>         
   
                       <textarea id="reporttext" name="reporttext" placeholder="Provide additional details.." ></textarea><br>

                       </textarea>
                   
                        <br>
                        <div class="row">
                            <input type="submit" value="Report" class="blue-button" style=" margin-left:300px;">
                        </div>

                        </br>
             </form>
    </div>
</div>

    <!------------------Java Script------------------------------->
    <script type="text/javascript" src="../../../public/js/pink-button-popup.js"> 
    </script>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="../../../public/img/arrow.png" alt="up_arrow"></a>
</div> 

<?php include("../home/footer.php"); ?>