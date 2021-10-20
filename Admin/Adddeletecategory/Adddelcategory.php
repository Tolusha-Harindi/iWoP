<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add or delete category</title>
    <link rel="stylesheet" href="adddelcategory.css">
   <link rel="stylesheet" href="../../Repeating-pages/topnav/topnav.css">
   <link rel="stylesheet" href="../../Repeating-pages/sidenav/sidenavigation.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  
  
  <?php
        include '../../Repeating-pages/topnav/topnav8-admin.php';
  ?>


</head>
<body>
<div class="box1">

<!-----------------------------side nav bar-------------------------->

    <div class="sidebar close">

        <ul class="nav-links">
            <li>
                <a href="../Adminprofile/Adminprofile.php">
                    <i class='bx bxs-user' ></i>
                    <span class="link_name">My Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Adminprofile/Adminprofile.php">My Profile</a></li>
                </ul>
            </li>


            <li>
                    <a href="../admin_dashboard/admin_dashboard.php">
                      <i class='bx bx-plus' ></i>
                      <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="../admin_dashboard/admin_dashboard.php">Dashboard</a></li>
                    </ul>
                  </li>

            <li>
                <a href="../ManagerPageforAdmin/ManagerPageforAdmin.php">
                    <i class='bx bx-street-view' ></i>
                    <span class="link_name">Managers</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../ManagerPageforAdmin/ManagerPageforAdmin.php">Managers</a></li>
                </ul>
            </li>


            <li>
                <a href="../Changepassword/changepwd.php">
                    <i class='bx bxs-check-shield' ></i>
                    <span class="link_name">Change Password</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Changepassword/changepwd.php">Change Password</a></li>
                </ul>
            </li>

            <li>
                <a href="../Adddeletecategory/Adddelcategory.php">
                    <i class='bx bxs-spreadsheet' ></i>
                    <span class="link_name">Category</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Adddeletecategory/Adddeletecategory.php">Category</a></li>
                </ul>
            </li>

            <li>
                <a href="../Reportpage/reportpage.php">
                    <i class='bx bxs-hand-right' ></i>
                    <span class="link_name">Reports</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Reportpage/reportpage.php">Reports</a></li>
                </ul>
            </li> </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <!--       <span class="text">Drop Down Sidebar</span>
             -->    </div>
    </section>

    <script src="../../Repeating-pages/sidenav/sidenavigation.js"></script>




</div>
</div>
<div>
<a href="../category/category.php" class="viewButton"> View all users </a>
</div>

<div class="box2">
    <div class="main">
        
    </br><h3>Add new category</h3> </br> </br>

    <form method="post" action="add_delete_insert.php" enctype="multipart/form-data">
        <input type="text" id="lname" name="category_name" placeholder="Enter the new category name"  required><br><br>
        <input type="file"  name="upload_file"  class="fileupload" required />
        <input type="submit" name="submit"  class="addButton" value="Add" required> </br>
    </form>

        <h3>Delete category</h3></br> </br>
        <select name="deletecategory" id="lang">
            <option value="">Delete Category</option>
            <option value="">Plumber</option>
            <option value="">Masons</option>
            <option value="">Tile</option>
            <option value="">Carpenter</option>
            <option value="">Painter</option>
            <option value="">Electrician</option>
            <option value="">Landscaping</option>
            <option value="">Contractors</option>
            <option value="">Professionals</option>
            <option value="">Stones/Sand/soil</option>
            <option value="">Concrete slab</option>
            <option value="">Equipment Repairing</option>
            <option value="">A/C</option>
            <option value="">Welding</option>
            <option value="">Cooking</option>
            <option value="">Cushion works</option>
            <option value="">Vehicle repairs</option>
            <option value="">Cleaners</option>
            <option value="">CCTV</option>
            <option value="">Ceiling</option>
            <option value="">Well</option>
            <option value="">Chair weavers</option>
            <option value="">Solar panel fixing</option>
            <option value="">Demolishing</option>
            <option value="">Pest control</option>
            <option value="">Mug Designer</option>
            <option value="">Movers</option>
            <option value="">Aluminium</option>
            <option value="">Catering</option>
            <option value="">Makeup Artists</option>


            <option value=""></option>
        </select>
        <input type="reset" name="delete" id="delete" class="deleteButton" value="Delete" required> 
    </div>
</div>>


</div>
</body>
</html>

