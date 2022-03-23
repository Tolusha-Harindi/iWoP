<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
<div class="category"> <p> FAQ </p> </div>

<!-----------------------------------Update Question--------------------------------------->
<div class="heading"> <p> Update  Questions and Answers </p> </div>

<div class="form-space" style="margin-top: 5em;">
    <form action="<?php echo URLROOT; ?>/admins/update_faq/<?php echo $data['faq']->faq_id ?>" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="question">Question</label>
            </div>
            <div class="col-75">
            <input type="text" name="question" value="<?php echo $data['faq']->question ?>">
            </br> </br>
            <span class="invalidFeedback">
                <?php echo $data['questionError']; ?>
            </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="answer">Answer</label>
            </div>
            <div class="col-75">
            <input type="text" name="answer" value="<?php echo $data['faq']->answer ?>">
            </br> </br>
            <span class="invalidFeedback">
                <?php echo $data['answerError']; ?>
            </span>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Update" class="green-button" style="margin-bottom:4em;">
            <!-----<a class="pink-button" style="text-decoration:none; font-size:13px; margin-left:40em; margin-bottom:-2em; padding: 12px 24px; display:inline;" href="<?php echo URLROOT; ?> /admins/admin_faq/"> Cancel </a>---->
        </div>
    </form>
</div>




<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>