<?php include("../home/topnav.php"); ?>

<?php include("../home/admin_sidenav.php"); ?>

<link rel='stylesheet' href="../../../public/css/home/table.css"/>
<link rel='stylesheet' href="../../../public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<!------heading----------->
<div class="category"> <p> Manager </p> </div>

<img src="../../../public/img/admin.jpg" style="border-radius: 200px; height:160px; width: 160px; margin-left:55%">
<p style="color: #113CFC; font-size:14px; margin-left:57.5%"> last active 5m </p>
<p style="font-size:16px; margin-left:57%;"> Kasun Perera </p>

<div class= "table"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>NIC</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>Kasun Perera</td>
                        <td> 123456789V</td>
                        <td>0711112223</td>
                        <td> kasun@gmail.com</td>
                        <td> <input type="reset" class="pink-button" value="Remove"/></td>
                    </tr>

                </tbody>
            </table> 
        </div> 
    </div>

<!-----------------------------------Add new Manager--------------------------------------->
<div class="heading"> <p> Add New Manager </p> </div>

<div class="form-space">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Enter Manager Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="nic">NIC Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="nic" name="nic" placeholder="Enter NIC Number" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" placeholder="Enter Email" required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="password">Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
        </div>
        </br>
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