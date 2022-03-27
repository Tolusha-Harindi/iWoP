<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<a href="#payments" class="top-button1" style="margin-top: -45em; margin-left:55em; width:8em;"> Payments to get </a>
<a href="#recieved" class="top-button2" style="margin-top: -45em; margin-left:68em; width:10em;"> Received Payments </a>

<!-----------------------payments to get------------------------------------>
<div class="category" id="payments" style="margin-top: -14em;"> <p> Payments to get</p> </div>

<div class="table">
    <div class="table-wrapper" style="margin-top:2em;">
        <table style="border-spacing: 25px" class="fl-table">
            <thead>
                <tr>
                    <!-- <th>Profile Pic</th> -->
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Contact</th>
                    <th>Completed Date</th>
                    <!-- <th>Status</th> -->
                </tr>
            </thead>

            <tbody>
            <?php foreach($data['gets'] as $gets):?> 
                <tr>
                    <!-- <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td> -->
                    <td><?php echo $gets->cus_name ?></td>
                    <td style="color: #1E3CC0;"><?php echo $gets->budget ?></td>
                    <td><?php echo $gets->contact_no ?></td>
                    <td><?php echo $gets->date ." " . " ". $gets->end_time ?></td>
                    <!-- <td> <form action=""><input type="reset" class="pink-out-button" value="Recieved"/></td> -->
                </tr>
            
            <?php endforeach;?>
        
            </tbody>
        </table> 
    </div> 
</div>

<!--------------------------------Recieved Payments--------------------------------------------->
<div class="heading" id="recieved"> <p> Received Payments </p> </div>

<!-- <form action="<?php echo URLROOT;?> /workers/worker_receive_payment/$data"> -->

<div class= "table"> 
        <div class="table-wrapper" style="margin-top: 3em;">
            <table class="fl-table" style="border-spacing: 25px;" >
                <thead>
                    <tr>
                        <!-- <th>Profile Pic</th> -->
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Contact</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($data['rows'] as $rows):?>
                <tr>
                    <!-- <td><img src="<?php echo URLROOT;?> /public/img/w3.jpg" class="table-image" style="border-radius: 50px;"></td> -->
                    <td><?php echo $rows->fname ?></td>
                    <td><?php echo $rows->lname; ?></td>
                    <td><?php echo $rows->paid_at; ?></td>
                    <td style="color: #1E3CC0;">Rs.<?php echo $rows->amount; ?>.00</td>
                    <td><?php echo $rows->contact_no; ?></td>
                </tr>

                <?php endforeach;
                //}?>
                </tbody>
            </table> 
        </div> 
    </div>
    
</form>
    <br/><br/>
    
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>

