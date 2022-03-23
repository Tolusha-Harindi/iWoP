<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/admin_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/login.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<!------heading----------->
<div class="category"> <p> Manager </p> </div>

<!----<img src="<?php echo URLROOT;?>/public/img/ <?php //echo $manager->pro_pic; ?> " style="border-radius: 200px; height:160px; width: 160px; margin-left:55%">------>
<!--------<p style="color: #113CFC; font-size:14px; margin-left:57.5%"> last active 5m </p> ------->
<!---------<p style="font-size:16px; margin-left:57%;"> <?php //echo $manager->name; ?> </p> ------->

<div class= "table"> 
        <div class="table-wrapper">
            <table style="border-spacing: 25px" class="fl-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>NIC</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Profile picture</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($data['manager'] as $manager): ?>
                        <tr>
                            <td> <?php echo $manager->name; ?> </td>
                            <td> <?php echo $manager->nic; ?> </td>
                            <td> <?php echo $manager->contact; ?> </td>
                            <td> <?php echo $manager->email; ?> </td>
                            <td>  <img src="<?php echo URLROOT ?> /public/img/<?php echo $manager->profile; ?>" class="pic1"> </td>
                                <td>  
                                    <?php if(isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == $manager->admin_id): ?>
                                        <a class="blue-button" style="text-decoration:none;"  href="<?php echo URLROOT . "/admins/update_manager/" . $manager->manager_id ?>"> Edit </a>
                                    <?php endif; ?>       
                                </td>
                                <td>
                                    <?php if(isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == $manager->admin_id): ?>
                                        <form action="<?php echo URLROOT . "/admins/delete_manager/" . $manager->manager_id ?>" method="POST">
                                        <input type="submit" class="pink-button" value="Remove"/>
                                    <?php endif; ?>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
        </div> 
    </div>

<!-----------------------------------Add new Manager--------------------------------------->
<div class="heading"> <p> Add New Manager </p> </div>

<div class="form-space">
    <form action="<?php echo URLROOT; ?>/admins/admin_manager" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="name">Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Enter Manager Name">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['nameError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="nic">NIC Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="nic" name="nic" placeholder="Enter NIC Number">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['nicError']; ?>
                </span>
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
            <label for="contact">Contact Number</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number">
            </br> </br>
                    <span class="invalidFeedback">
                        <?php echo $data['contactError']; ?>
                    </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" placeholder="Enter Email">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="address">Address</label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" placeholder="Enter address">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['addressError']; ?>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="profile">Profile picture</label>
            </div>
            <div class="col-75">
                <input type="file" id="profile" name="profile">
            </div>
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['profileError']; ?>
                </span>
        </div>

        <div class="row">
            <div class="col-25">
            <label for="password">Password</label>
            </div>
            <div class="col-75">
            <input type="password" id="password" name="password" placeholder="Enter Password">
            </br> </br>
                <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                </span>
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
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div>

<?php include_once APPROOT . '/views/includes/footer.php'; ?>