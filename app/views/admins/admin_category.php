
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

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
                
                    <tr>
                        <td>Painter</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/category/paintbrush.png" class="table-image"></td>
                        <td>04/11/2021</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>CCTV repair</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/category/cctv.png" class="table-image"></td>
                        <td>04/11/2021</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>Cleaner</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/category/cleaning.png" class="table-image"></td>
                        <td>04/11/2021</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                     <tr>
                        <td>Plumber</td>
                        <td><img src="<?php echo URLROOT;?>/public/img/category/plumber.png" class="table-image"></td>
                        <td>04/11/2021</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>


    <!-----------------------------------Add new category--------------------------------------->
    <div class="heading"> <p> Add New Category </p> </div>

    <div class="form-space">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-25">
                <label for="category">Category</label>
                </div>
                <div class="col-75">
                <input type="text" id="category" name="category" placeholder="Enter new Category" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="category">Image</label>
                    </div>
                    <div class="col-75">
                    <input type="file"  name="upload_file"  class="fileupload" required>
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