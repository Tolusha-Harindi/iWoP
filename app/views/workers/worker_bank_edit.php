<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/worker_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<div class="category" id="my-profile" style="margin-top: -15em"> <p> Bank Details </p> </div>

<div class="form-space"->
    <form action="<?php echo URLROOT; ?>/workers/worker_bank_edit" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" value="<?php echo $data['bankdata']->holder; ?>" required>
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
            <input type="text" id="bname" name="bname" value="<?php echo $data['bankdata']->bank_name; ?>" required>
            <span class="invalidFeedback">
                <?php  echo $data['bnameError'];?>
            </span> </br> </br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="branch">Bank Branch</label>
            </div>
            <div class="col-75">
            <input type="text" id="branch" name="branch" value="<?php echo $data['bankdata']->branch; ?>" required>
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
            <input type="text" id="code" name="code" value="<?php echo $data['bankdata']->code; ?>" required>
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
            <input type="text" id="account" name="account" value="<?php echo $data['bankdata']->account_no; ?>" required>
            <span class="invalidFeedback">
                <?php  echo $data['accountError'];?>
            </span> </br> </br>
            </div>
        </div>

        </br>
        <div class="row">
            <button type="submit" class="green-button">Update</button>
        </div>
    </form>
</div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>   

<?php include_once APPROOT . '/views/includes/footer.php'; ?>
