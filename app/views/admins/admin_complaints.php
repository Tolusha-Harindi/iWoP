
<?php include("../home/topnav.php"); ?>

<?php include("../home/admin_sidenav.php"); ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<a href="#cus-complaint" class="top-button1"  style="margin-left:78em; width:10em;"> Customer Complaints </a>
<a href="#worker-complaint" class="top-button2"  style="margin-left:64em;"> Worker Complaints </a>
                

<!------heading----------->
<div class="category" style="margin-top: -15em;"> <p> Complaints </p> </div>

<!----------------------------------------customer complaints----------------------------------------------->
<!------heading----------->
<div class="heading"  style="margin-bottom: 1.5em;"> <p> Customer complaints </p> </div>

<!------------------- worker table-------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top:2em;">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Reason</th>
                        <th>Worker</th>
                        <th>Complaint count</th>
                        <th>Cancel</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>Charges are high</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>5</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>Not satisfied</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>1</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>Not responding</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>4</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                     <tr>
                        <td>Charges are high</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>6</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>


<!----------------------------------------Worker complaints----------------------------------------------->
<!------heading----------->
<div class="heading" id="worker-complaint"> <p> Worker complaints </p> </div>


    <!------------------- Customer table-------------------->
    <div class= "table"> 
        <div class="table-wrapper" style="margin-top: 3em;">
            <table class="fl-table" style="border-spacing: 25px;" >
                <thead>
                    <tr>
                        <th>Reason</th>
                        <th>Customer</th>
                        <th>Complaint count</th>
                        <th>Cancel</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>Not Paid</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/w1.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>5</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>Not paid</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/w2.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>1</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>Not responding</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>4</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                     <tr>
                        <td>Not paid</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/admin.jpg" class="table-image" style="border-radius: 50px;"></td>
                        <td>6</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>

    <!------------------- Company table-------------------->
    <div class= "table"> 
        <div class="table-wrapper"   style="margin-top: 5em;">
            <table style="border-spacing: 25px;" class="fl-table">
                <thead>
                    <tr>
                        <th>Reason</th>
                        <th>Company</th>
                        <th>Complaint count</th>
                        <th>Cancel</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>Not paid</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/comp.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>5</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>Not satisfied</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/comp.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>1</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>Not paid</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/comp.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>4</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                     <tr>
                        <td>Not paid</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/comp.png" class="table-image" style="border-radius: 50px;"></td>
                        <td>6</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div> 
    
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>  


<?php include("../home/footer.php"); ?>