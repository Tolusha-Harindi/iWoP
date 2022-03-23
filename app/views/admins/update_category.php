<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
<div class="category" id="category"> <p> Category </p> </div>

<!-----------------------------------Update new category--------------------------------------->
<div class="heading"> <p> Update Category </p> </div>

<div class="form-space">
    <form action= "<?php echo URLROOT; ?>/admins/update_category   <?php echo $data['add']->cat_id ?>" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="category">Category</label>
            </div>
            <div class="col-75">
                <input type="text" id="category" name="category" value="<?php echo $data['add']->category ?>">

                </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['categoryError']; ?>
                </span>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
                <label for="category">Image</label>
            </div>
            <div class="col-75">
                <input type="file"  name="logo"  class="fileupload" value="<?php echo $data['add']->logo ?>">

                </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['logoError']; ?>
                </span>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Update" class="green-button" style="margin-bottom:10em;">
        </div>
    </form>
</div>


<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>


<?php include_once APPROOT . '/views/includes/footer.php'; ?>