
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
<div class="category" id="category"> <p> Category </p> </div>

<!------------------- Category table-------------------->
    <div class= "table"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Added date</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($data['add'] as $add): ?>
                        <tr>
                            <td> <?php echo $add->category; ?> </td>
                            <td>  <img src="<?php echo URLROOT ?> /public/img/category/<?php echo $add->logo; ?>" class="table-image"> </td>
                            <td> <?php echo date('j F Y', strtotime($add->add_date)) ?> </td>
                            <td> <input type="reset" class="blue-button" value="Edit"/></td>
                            <td> <input type="reset" class="pink-button" value="Remove"/></td>
                        </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table> 
        </div> 
    </div>






    <!-----------------------------------Add new category--------------------------------------->
    <div class="heading"> <p> Add New Category </p> </div>

    <div class="form-space">
        <form action= "<?php echo URLROOT; ?>/admins/admin_category" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="category">Category</label>
                </div>
                <div class="col-75">
                    <input type="text" id="category" name="category" placeholder="Enter new Category">

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
                    <input type="file"  name="logo"  class="fileupload">

                    </br> </br>
                    <span class="invalidFeedback">
                        <?php echo $data['logoError']; ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Add" class="green-button">
            </div>
        </form>
    </div>

    
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>


<?php include_once APPROOT . '/views/includes/footer.php'; ?>