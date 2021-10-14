<!-- <?php
  session_start();
  if(isset($_SESSION['username'])) {
    include '../../db/db_connection.php';
    $temp = $_SESSION['username'];
    $sqlForSession = "SELECT username FROM admin WHERE username = '$temp'";
    $resultForSession = mysqli_query($con, $sqlForSession);
    if (mysqli_num_rows($resultForSession) === 1) {
 ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
<?php
      $result = require '../../db/all/all_faq.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-FAQ</title>
    <link rel="stylesheet" href="../../css/admin/admin_faq.css">

</head>
<body>
<section class="admin-destinations">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

  <div class="main">
    <!--End form of adding new destination-->

<h1 class="heading-one">FAQ</h1>

<!--Start "FAQ" table-->
<div class="table">
    <table class="content-table" id="faq_table" >
        <thead>
            <tr>
                <th>QUESTION</th>
                <th>ANSWER</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($rows = mysqli_fetch_array($result)){
                echo "<tr>
                    <td class='tdtxt'>".$rows['question']."</td>
                    <td class='tdtxt'>".$rows['answer']."</td>
                    <td class='tdbtn'>
                    <form method='post' >
                        <input type='hidden' value='$rows[0]' name=faq_id>
                        <input type='submit' id='removebtn' name ='editbtn' class='removebtn' value='EDIT'>
                    </form>
                    </td>
                    <td class='tdbtn'>
                    <form method='post' action='../../db/admin/admin_delete_faq.php'>
                        <input type='hidden' value='$rows[0]' name=faq_id>
                        <input type='submit' id='removebtn' name ='removebtn' class='removebtn' value='REMOVE'>
                    </form>
                    </td>
                </tr>";
            }
          ?>
        </tbody>
    </table>
</div>
<!--End "FAQ" table-->

<!--Start form of adding new destination-->
<h1 class="heading-one">ADD NEW FAQ</h1>
<div class="form-container">
    <form action="../../php/admin/admin_addfaq.php" method="POST">
        <label for="fquestion" class="fques">QUESTION</label>
            <input type="text" id="fquestion" name="fquestion" required><br />
        <label for="fanswer" class="fans">ANSWER</label>
            <input type="text" id="fanswer" name="fanswer" required><br />
        <input type="submit" id="addbtn" value="SUBMIT" name="submitbtn">
    </form>
  <!--End form of adding new destination-->


</div>


</div>

  <!--<script src="../../JS/filter.js"></script>-->
</section>
</body>
</html>
<?php
  } else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>';
    exit();
  }
}else{
  header("location: ../ManagerPageforAdmin");
  exit();
}
 ?>
