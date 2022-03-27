<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<div class="category" id="my-profile" style="margin-top: -15em; margin-left:19em;"> <p> Bank Details </p> </div>

<div class="form-space"->
    <form action="<?php echo URLROOT;?> /workers/worker_bank_detail" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="name">Holder's Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            <span class="invalidFeedback">
                <?php  echo $data['nameError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="b-name">Bank Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="b-name" name="b-name" placeholder="Enter Your Bank Name" required>
            <span class="invalidFeedback">
                <?php  echo $data['b-nameError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="branch">Bank Branch</label>
            </div>
            <div class="col-75">
            <input type="text" id="branch" name="branch" placeholder="Enter Your Bank Branch" required>
            <span class="invalidFeedback">
                <?php  echo $data['branchError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="code">Bank Code</label>
            </div>
            <div class="col-75">
            <input type="text" id="code" name="code" placeholder="Enter Your Bank Code" required>
            <span class="invalidFeedback">
                <?php  echo $data['codeError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="account">Account Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="account" name="account" placeholder="Enter Your Account number" required>
            <span class="invalidFeedback">
                <?php  echo $data['accountError'];?>
            </span> </br> </br>
            </div>
        </div>

        </br>
        <div class="row">
            <button type="submit" class="green-button">Save </button>
        </div>
    </form>
</div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
