
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
<div class="category"> <p> FAQ </p> </div>

<!------------------- FAQ table-------------------->
    <div class= "table"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($data['newfaq'] as $newfaq): ?>
                    <tr>
                        <td> <?php echo $newfaq->question; ?> </td>
                        <td> <?php echo $newfaq->answer; ?> </td>
                        <td> 
                            <?php if(isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == $newfaq->admin_id): ?>
                                <!--<input type="reset" class="blue-button" value="Edit"/> -->
                                <a class="blue-button" style="text-decoration:none;" href="<?php echo URLROOT . "/admins/update_faq/" . $newfaq->faq_id ?>"> Edit </a>
                            <?php endif; ?> 
                        </td>
                        <td> 
                            <?php if(isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == $newfaq->admin_id): ?>
                            <form action="<?php echo URLROOT . "/admins/delete_faq/" . $newfaq->faq_id ?>" method="POST">
                                <input type="submit" name="delete" class="pink-button" value="Remove"/>
                            </form>
                            <?php endif; ?> 
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
        </div> 
    </div>


    <!-----------------------------------Add new Question--------------------------------------->
    <div class="heading"> <p> Add  Questions and Answers </p> </div>

    <div class="form-space">
        <form action="<?php echo URLROOT; ?>/admins/admin_faq" method="POST">
            <div class="row">
                <div class="col-25">
                <label for="question">Question</label>
                </div>
                <div class="col-75">
                <input type="text" id="question" name="question" placeholder="Enter your Question">
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
                <input type="text" id="answer" name="answer" placeholder="Enter your Answer">
                </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['answerError']; ?>
                </span>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit" class="green-button">
            </div>
        </form>
    </div>

<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include_once APPROOT . '/views/includes/footer.php'; ?>