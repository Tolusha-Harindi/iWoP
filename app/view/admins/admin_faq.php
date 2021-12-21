
<?php include("../home/topnav.php"); ?>

<?php include("../home/admin_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">



<!------heading----------->
<div class="category"> <p> FAQ </p> </div>

<!------------------- Category table-------------------->
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
                
                    <tr>
                        <td>How to add my service?</td>
                        <td>Refer services Page</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>How to add my service?</td>
                        <td>Refer services Page</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                    <tr>
                        <td>How to add my service?</td>
                        <td>Refer services Page</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                     <tr>
                        <td>How to add my service?</td>
                        <td>Refer services Page</td>
                        <td> <input type="reset" class="blue-button" value="Edit"/></td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>


    <!-----------------------------------Add new category--------------------------------------->
    <div class="heading"> <p> Add  Questions and Answers </p> </div>

    <div class="form-space">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-25">
                <label for="question">Question</label>
                </div>
                <div class="col-75">
                <input type="text" id="question" name="question" placeholder="Enter your Question" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                <label for="answer">Answer</label>
                </div>
                <div class="col-75">
                <input type="text" id="answer" name="answer" placeholder="Enter your Answer" required>
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
	<a href="#"><img src="../../../public/img/arrow.png" alt="up_arrow"></a>
</div>  

<?php include("../home/footer.php"); ?>