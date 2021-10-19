<?php include('../../Backend/db_connection.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title> | FAQ </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!----Profile---->

        <?php
        include '../../Repeating-pages/topnav/topnav2-customer.php'
        ?> 
         <style type="text/css">
            body {
                font-family: 'Poppins', sans-serif;
                background-image: url('../../Images/bg2.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;  */
            }

            .fluid-container {
                width: 80%;
        	    margin: 0 auto;
        	    margin-top: 10px;
               
            }

            .fluid-container h2 {
        		color: #3a3b3c;
        		position: relative;
        		width: 23rem;
        	}

            .fluid-container h2::after {
        	    content: "";
        	    position: absolute;
        	    bottom: 0;
        	    right: 12px;
        	    width: 67px;
        	    height: 2px;
        	    background-color: #3a3b3c;
            }
            
            .accordian {
        	    width: 100%;
        	    padding: 0 5px;
        	   /* border: 3px solid #333333;*/
                box-shadow: 0px 4px 8px 0 rgba(0,0,0,0.4);		;
        	    cursor: pointer;
        	    border-radius: 0;
        	    display: flex;
        	    margin: 10px 0;
        	    align-items: center;
                background-color:white;
            }
            .accordian .icon {
        	    margin: 0 10px 0 0;
        	    width: 30px;
        	    height: 30px;
        	    background: url(plus.png) no-repeat 8px 7px #151965;
        	    border-radius: 50%;
        	    float: left;
        	    transition: all .5s ease-in;
            }
            .accordian h5 {
        	    font-size: 16px;
        	    margin: 0;
        	    padding: 3px 0 0 0 ;
        	    font-weight: normal;
        	    color: black;
            }
            .panel {
        	    padding: 0 15px;
        	    border-left: 1px solid #6db5ff;
        	    margin-left: 25px;
        	    font-size: 14px;
        	    text-align: justify;
        	    overflow: hidden;
        	    max-height: 0;
        	    transition: all .5s ease-in;
                background-color:white;
                box-shadow: 0px 4px 8px 0 rgba(0,0,0,0.4);
            }
            .panel p {
                color:  #0000ff;
            }
        </style>
    </head>
    <body> 

        <!-- FAQ -->
        <div class="container">
          	<div class="fluid-container">
          		<center>
                    <p style="margin: 2em; font-size: 3em "> 
                        <b><span style="color: #e0ac1c; font-size: 2em">F</span>requently <span style="color: #e0ac1c; font-size: 2em">A</span>sked <span style="color: #e0ac1c; font-size: 2em">Q</span>uestions</b>	
                    </p>
                </center>
          	    
                <table cellspacing="30">
                    <tr>
                        <!-- 1 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <center>
                                        <h4>How to add my service as a ‘Service Provider’/Worker ?<br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p>Firstly you have to register to our website  as  a worker.
                                        If you are looking for jobs  ,you have to register as  a worker and then you can fill your details in my profile page.
                                    </p>
                                </div>
                            </center>
                        </th>
                        <!-- 2 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <h4> I‘m getting contacted about an ad I didn’t post. Can you help me?<br><br></h4>
                                </div>
                                <div class="panel">
                                    <p>Yes, of course. Call us on 011 xxx xxxx & we will help you accordingly.</p>
                                </div>
                            </center>
                        </th>
                    </tr>
                    <tr>
                        <!-- 1 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <center>
                                        <h4> Are these service providers trustworthy?<br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p>The service providers listed here are same as any other service provider. Owner should be aware iWop is only an intermediary</p>
                                </div>
                            </center>
                        </th>
                        <!-- 2 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <h4> Have these service providers provided honest information, such as experience?</h4>
                                </div>
                                <div class="panel">
                                    <p>Most of the time yes.
	                                    Most of the published information of Service Providers have been gathered through the information they have sent with the News Paper Ad. Other information has been gathered from known parties. Iwop Customer Service calls all the service providers in every 4 months. Therefore, info gets verified twice. Service receiver can double check with the reviews they have received & by directly contacting them.
                                    </p>
                                </div>
                            </center>
                        </th>
                    </tr>

                    <tr>
                        <!-- 1 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <center>
                                        <h4> Do I have to pay for this service?<br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p> No. This is an absolutely free service.</p>
                                </div>
                            </center>
                        </th>
                        <!-- 2 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <h4>How long will it take for me to receive the ordered item?</h4>
                                </div>
                                <div class="panel">
                                    <p>You will receive the items you ordered within a week.</p>
                                </div>
                            </center>
                        </th>
                    </tr>
                    <tr>
                        
                </table>

                <script >
                    var acc = document.getElementsByClassName('accordian');
                    var i;
                    var len = acc.length;
          		    for(i=0; i<len; i++) {
          		        acc[i].addEventListener('click', 
                            function() {
          				        this.classList.toggle('active');
          				        var panel = this.nextElementSibling;
          				        if(panel.style.maxHeight) {
          					        panel.style.maxHeight = null;
          				        } else{
          					        panel.style.maxHeight = panel.scrollHeight + 'px';
          				        }
          		            }
                        );
          		    }
                </script>
            </div>
        </div>

       
    </body>
</html>

