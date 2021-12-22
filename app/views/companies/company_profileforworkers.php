<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/company/star.css"/>

<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<style>
    

.vertical-line{
  border-left: 2px solid grey;
  height: 100%;
  margin-left:550px;
  margin-top:-750px;
  
}  
.left{
  width: 40%;
  height: 700px;
 border: 1px solid white;  
  box-sizing: border-box;
  
}

.company-dis{
    border: 1px solid white; 
    margin-top:10px; 
   height:500px;
   width:80%;
   border-radius:5px;
    margin-left:50px; 
   
   
   box-shadow: 4px 8px 16px lightgray;

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
  margin-left: 150px;
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
}
.right{
    width: 80%;
  height: 800px;
  /* border: 1px solid blue; */
  /* box-sizing: border-box; */
  margin-left:90px;
  margin-top:20px;
  
}
.right-upper{
    margin-top:0px;
    width: 90%;
  height: 500px;
  /* border: 1px solid blue; */
  box-sizing: border-box;
  margin-left:20px;
  /* background:#dff9fb; */
  background-color: #ECEFFF;
    box-shadow: 4px 8px 16px lightgray;
    border-radius:5px;

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
  margin-left:130px;
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

table,th,td{
    margin-left:20px;
    margin-top:0px;
    /* border: 1px solid black; */
    
    border-collapse: collapse;
}
/* .review-day{
    margin-left:450px;
} */

.review-last{
    /* border: 1px solid red; */
    float:right;
    width:10%;
    height:25px;
    color:blue;
}
</style>
 <div  class = "left" style="margin-top: 100px;">

 <div class="company-dis">
     <!-- last active -->
      <!-- <h5>Last Active 2 days ago</h5> -->
            <div class="img-container">
                <img src="<?php echo URLROOT;?> /public/img/comp.png" alt="propic" class="img1"/>
            </div>
           <p class="companyname">
               Dream Wave
           </p>
           <p class="user_ratings">
               User Rastings  60%
           </p>

           <div class="img-container2">
                <img src="<?php echo URLROOT;?> /public/img/star.png" alt="propic" class="img2"/>
            </div>
            <p class="ex">
               10+ Years Experience
           </p>

           <p class="number">
              Number of jobs given this month: 24 
           </p>
           <p class="location">
              Location : Matara
           </p>
           <p class="pnumber">
              Contact Number:077-480223366
           </p>

           <!-- message button -->
           <button class=message>Message</button>
 </div>

</div>
<div class="vertical-line">
<!-- Report button -->
  <div class="reportbutton">
      <button class="pink-button" style="margin-left:650px; margin-top:32px; font-size:20px; width:100px; ">
          Report 
       </button>
  </div>
  <!-- Write a review -->
  <div class="right">
       <h3>Write a review</h3>
       <div class="right-upper">
         <form action="/action_page.php">
            <div class="row">
                   <div class="col-25">
                       <label for="name">  Name</label>
                 </div>
                 <div class="col-75">
                   <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                 </div>
           </div>

            <div class="row">
                <div class="col-25">
                      <label for="email">Email</label>
                </div>
                     <div class="col-75">
                       <input type="email" id="email" name="nic" placeholder="Enter Your email" required>
                    </div>
            </div>

           <div class="row">
                  <div class="col-25">
                      <label for="contact">Review</label>
                 </div>
                  <div class="col-75">
            <!-- <input type="textarea" id="contact" name="contact" placeholder="Enter your review" required> -->
                   <textarea id="review" name="review" placeholder="Write your review.." ></textarea><br>
                  </div>
           
           </div>

        
          </br>
          
          
          


          <!-- star ratings -->
          <div class="star-source">
  <svg>
         <linearGradient x1="50%" y1="5.41294643%" x2="87.5527344%" y2="65.4921875%" id="grad">
            <stop stop-color="#bf209f" offset="0%"></stop>
            <stop stop-color="#d62a9d" offset="60%"></stop>
            <stop stop-color="#ED009E" offset="100%"></stop>
        </linearGradient>
            <symbol id="star" viewBox="153 89 106 108">   
             <polygon id="star-shape" stroke="url(#grad)" stroke-width="5" fill="currentColor" points="206 162.5 176.610737 185.45085 189.356511 150.407797 158.447174 129.54915 195.713758 130.842203 206 95 216.286242 130.842203 253.552826 129.54915 222.643489 150.407797 235.389263 185.45085"></polygon>
           </symbol>
  </svg>

</div>
<!-- rating stars -->
<div class="star-container">
    <input type="radio" name="star" id="five">
    <label for="five">
    <svg class="star">
      <use xlink:href="#star"/>
    </svg>
  </label>
  <input type="radio" name="star" id="four">
  <label for="four">
    <svg class="star">
      <use xlink:href="#star"/>
    </svg>
  </label>
  <input type="radio" name="star" id="three">
  <label for="three">
    <svg class="star">
      <use xlink:href="#star"/>
    </svg>
  </label>
  <input type="radio" name="star" id="two">
  <label for="two">
    <svg class="star">
      <use xlink:href="#star" />
    </svg>
  </label>
  <input type="radio" name="star" id="one">
  <label for="one">
   <svg class="star">
    <use xlink:href="#star" />
   </svg>
  </label>

</div>

            <div class="row">
              <input type="submit" value="Submit" class="green-button">
           </div>
          </form>
       </div>
<!-- exaples of review -->
<div class="right-down"> 
<p class="review-day">
        
       
    <div class="review-1">
        <!-- <p class="review-day">
            2M ago
        </p > -->
        <div class="review-last">
                
                    2M ago
                
        </div>
            <table >
                <tr>
                    <td>
                        <img src="<?php echo URLROOT;?> /public/img/review.png" alt="review" id="rimg">
                    </td>

                    <td>
                       <h2> &nbsp Amila Perera</h2> 
                    </td>
                    
                    
                   

                </tr>
                <tr>
                   <td></td> 
                   <td>   &nbsp&nbsp&nbsp<img src="<?php echo URLROOT;?> /public/img/star.png" alt=" star" id="star"></td> 
                </tr>
                <tr>
                    <td></td>
                    <td> &nbsp&nbsp&nbspGood service</td>
                </tr>
                
                
            </table>
            </div>
            </div>

  
   </div>
  

</div>


 


<!-- pop up window -->

<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 10%;">
                <form action="">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:35%; color:red">Report User <img src="<?php echo URLROOT;?> /public/img/invite.png" class="popup-image"></p>
                        <p class="pop-up-heading">
                            Please select your issue type
                       </p>
                    
                     <!-- <div class="radio-btn" style="border: 1px solid red; margin-left:50px;">  
                         <input type="radio" id="" name="one" value="" style="padding-left:0px;">
                        <label for="one" style="background-color:red"> Not Responding</label>

                        <input type="radio" id="" name="" value="not responding">
                        <label for=""> Not Responding</label>
        
                       <input type="radio" id="" name="" value="not responding">
                        <label for=""> Not Responding</label>
                      <input type="radio" id="" name="" value="not responding">
                        <label for=""> Not Responding</label>
                        
                     </div>   -->
                        <input type="radio" id="first" name="report" value="NOT">
                        <label for="html">Not Responding</label>
                        <input type="radio" id="second" name="report" value="Unprof">
                        <label for="css">Unprofessional</label><br>
                        <input type="radio" id="third" name="report" value="notcom">
                        <label for="css">Did not complete the job</label>
                        <input type="radio" id="fourth" name="report" value="high">
                        <label for="css">Chargers are high</label>
                        <textarea id="reporttext" name="reporttext" placeholder="Provide additional details.." ></textarea><br>

                        </textarea>
                    <!-- <div class="row">
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
                        </br> </br> -->
                        <br>
                        <div class="row">
                            <input type="submit" value="Submit" class="red-button" style="margin-left:45%; background-color:#ff3f34">
                        </div>

                        </br>
                </form>
        </div>
    </div>

    <!------------------Java Script------------------------------->
    <script type="text/javascript" src="<?php echo URLROOT;?> /public/js/pink-button-popup.js"> 
    </script>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div> 

<?php include_once APPROOT . '/views/includes/footer.php'; ?>