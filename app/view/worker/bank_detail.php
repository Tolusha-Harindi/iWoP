<?php include("../home/topnav.php"); ?>

<?php include("../home/worker_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<div class="category" id="my-profile" style="margin-top: -15em"> <p> Bank Details </p> </div>

<div class="form-space"->
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="b-name">Bank Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="b-name" name="b-name" placeholder="Enter Your Bank Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="branch">Bank Branch</label>
            </div>
            <div class="col-75">
            <input type="text" id="branch" name="branch" placeholder="Enter Your Bank Branch" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="code">Bank Code</label>
            </div>
            <div class="col-75">
            <input type="text" id="code" name="code" placeholder="Enter Your Bank Code" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="account">Account Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="account" name="account" placeholder="Enter Your Account number" required>
            </div>
        </div>

        </br>
        <div class="row">
            <input type="submit" value="Save" class="green-button">
        </div>
    </form>
</div>


<?php include("../home/footer.php"); ?>
