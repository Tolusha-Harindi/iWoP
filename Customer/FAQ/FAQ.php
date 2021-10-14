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
                font-family: 'Baloo Bhaina 2', cursive;
                background-image: url('./images/a.png');
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
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
        	    border: 3px solid #333333		;
        	    cursor: pointer;
        	    border-radius: 100px;
        	    display: flex;
        	    margin: 10px 0;
        	    align-items: center;
            }
            .accordian .icon {
        	    margin: 0 10px 0 0;
        	    width: 30px;
        	    height: 30px;
        	    background: url(plus.png) no-repeat 8px 7px #CC9933;
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
            }
            .panel p {
                color: #000000;
            }
        </style>
    </head>
    <body> 

        <!-- FAQ -->
        <div class="container">
          	<div class="fluid-container">
          		<center>
                    <p style="margin: 1em; font-size: 3em"> 
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
                                        <h4>How can I select the item category  which I need ?<br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                                </div>
                            </center>
                        </th>
                        <!-- 2 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <h4>Is it permissible to sell more than one item at a time?<br><br></h4>
                                </div>
                                <div class="panel">
                                    <p>Yes,you can sell one or more items at a time.</p>
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
                                        <h4>What is the payment method which i can use for buy items ?<br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p>You are allowed to pay by card payment or "cash on delivery".</p>
                                </div>
                            </center>
                        </th>
                        <!-- 2 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <h4>What can I do if there any damage in an item which I purchased ?</h4>
                                </div>
                                <div class="panel">
                                    <p>You must inform it. Fill out the "Return a Product" form on the home page.</p>
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
                                        <h4>Can I exchange an item I purchased, to another item of the same price?<br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p>You will not be allowed to exchange products, but you will receive a replacement for any damaged product.</p>
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
                        <!-- 1 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <center>
                                        <h4>Within how many days should inform about a damaged item ?<br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p>You must inform us of any damaged items within one week of receiving them.</p>
                                </div>
                            </center>
                        </th>
                        <!-- 2 -->
                        <th>
                            <center>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <h4>Does the delivery charge depend on the quantity of items purchased?</h4>
                                </div>
                                <div class="panel">
                                    <p>Delivery charges are depends on the distance traveled to deliver the items and the quantity of items does not consider.</p>
                                </div>
                            </center>
                        </th>
                    </tr>
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

