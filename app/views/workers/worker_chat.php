<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

        <link rel="stylesheet" href="<?php echo URLROOT;?> /public/css/worker/chat.css">
        <link rel="stylesheet" href="<?php echo URLROOT;?> /public/css/home/button.css">
        <script type="module" src="http://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="http://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     <div class="chat-container">
            <div class="leftside">
        
                <!---------search------------------>
                 <div class="search_chat">
                    <div style="margin-left: -20px;">
                        <input type="text" placeholder="Search or start new chat">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                </div> 
           
               <!-----------------------chat list------------->
               <div class="chatlist">
                   <div class="block">
                       <div class="imgbx">
                           <img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="cover">
                       </div>
                       <div class="details">
                           <div class="listhead">
                               <h4>Aadhithya Murugavel</h4>
                               <p class="time">10:56</p>
                           </div>
                           <!-- <div class="message_p">
                               <p>how to make a call</P>
                           </div> -->
                       </div>
                   </div> 

                   <div class="block unread">
                       <div class="imgbx">
                           <img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="cover">
                       </div>
                       <div class="details">
                           <div class="listhead">
                               <h4>Vinoth Prem</h4>
                               <p class="time">07:06</p>
                           </div>
                           <!-- <div class="message_p">
                               <p>I want to know aboit today lesson</P>
                           </div> -->
                       </div>
                   </div>

                   <div class="block unread">
                       <div class="imgbx">
                           <img src="<?php echo URLROOT;?> /public/img/log.png" class="cover">
                       </div>
                       <div class="details">
                           <div class="listhead">
                               <h4>Megana Amuthan</h4>
                               <p class="time">Yesterday</p>
                           </div>
                           <!-- <div class="message_p">
                               <p>take care of your health</P>
                           </div> -->
                       </div>
                   </div>

                   <div class="block unread">
                       <div class="imgbx">
                           <img src="<?php echo URLROOT;?> /public/img/log.png" class="cover">
                       </div>
                       <div class="details">
                           <div class="listhead">
                               <h4>Vinoth Prem</h4>
                               <p class="time">07:06</p>
                           </div>
                           <!-- <div class="message_p">
                               <p>I want to know aboit today lesson</P>
                           </div> -->
                       </div>
                   </div>

                   <div class="block unread">
                       <div class="imgbx">
                           <img src="<?php echo URLROOT;?> /public/img/w1.jpg" class="cover">
                       </div>
                       <div class="details">
                           <div class="listhead">
                               <h4>Vinoth Prem</h4>
                               <p class="time">07:06</p>
                           </div>
                           <!-- <div class="message_p">
                               <p>I want to know aboit today lesson</P>
                           </div> -->
                       </div>
                   </div>

                   <div class="block unread">
                       <div class="imgbx">
                           <img src="<?php echo URLROOT;?> /public/img/w2.jpg" class="cover">
                       </div>
                       <div class="details">
                           <div class="listhead">
                               <h4>Vinoth Prem</h4>
                               <p class="time">07:06</p>
                           </div> 
                           <!-- <div class="message_p">
                               <p>I want to know aboit today lesson</P>
                           </div> -->
                       </div>
                   </div>

               </div> 

            </div>

            <div class="rightside">
                <div class="header">
                    <div class="imgtext">
                        <div class="userimg" style="margin-left:-25em;">
                            <img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="cover">
                        </div>
                        <h4>Aadhithya Murugavel<br/><span>online</span></h4>
                    </div>
                        <!-- <ul class="nav_icons">
                            <li><ion-icon name="search-outline"></ion-icon></li>
                        </ul> -->
                </div>

                <!-----------chatbox------------------------->
                <div class="chatbox">
                    <div class="message my_message">
                        <p>Hi<br><span>12.15</span></p>
                    </div>
                    <div class="message frnd_message">
                        <p>Hello<br><span>12.17</span></p>
                    </div>
                    <div class="message my_message">
                        <p>How are u<br><span>12.19</span></p>
                    </div>
                    <div class="message frnd_message">
                        <p>Fine you?<br><span>12.25</span></p>
                    </div>
                    <div class="message my_message">
                        <p>I am perfectly alright. what's going on<br><span>12.31</span></p>
                    </div>
                    <div class="message frnd_message">
                        <p>Exam will conduct on coming monday<br><span>12.40</span></p>
                    </div>
                    <div class="message my_message">
                        <p>I am perfectly alright. what's going on<br><span>12.31</span></p>
                    </div>
                    <div class="message frnd_message">
                        <p>Exam will conduct on coming monday<br><span>12.40</span></p>
                    </div>
                    <div class="message my_message">
                        <p>I am perfectly alright. what's going on<br><span>12.31</span></p>
                    </div>
                    <div class="message frnd_message">
                        <p>Exam will conduct on coming monday<br><span>12.40</span></p>
                    </div>
                </div>
              <!---------chat input----------------------------------------->
                <div class="chatbox_input">
                    <ion-icon name="happy-outline"></ion-icon>
                    <ion-icon name="attach-outline"></ion-icon>
                    <input type="text" placeholder="Type a message">
                    <ion-icon name="mic"></ion-icon>
                </div>

            </div>

    </div>
    

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>

    
