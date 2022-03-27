<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/manager_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/customer/category.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">


<div class="heading1"> Categories</div>

<?php

$con=mysqli_connect('localhost:3308','root',"",'iwop');
	$sql = "SELECT cat_id, category, logo, add_date FROM category";
		$res = mysqli_query($con, $sql);
	    $resid=array();
	    $rescategory=array();
	    $reslogo=array();
	    $resadd_date=array();
	
	if(mysqli_num_rows($res)>0)
		{
		while($row = mysqli_fetch_assoc($res))
		{
			array_push($resid,$row['cat_id']);
			array_push($rescategory,$row['category']);
			array_push($reslogo,$row['logo']);
			array_push($resadd_date,$row['add_date']);
		}
		}
	
		$arraySize = sizeof($reslogo);
	
	//how many rows
	if($arraySize % 5 == 0)
		{ 
        $rows = $arraySize/5; 
        } 
        else
		{ 
        $rows = ($arraySize/5); 
        } 



			$index =0;
for($i=0; $i<$rows ;$i++)
{
	echo'<form method="post" action=" " style="margin-left:350px; margin-top:10px; ">';
	echo '<div class="rowProd" style="content: "";clear: both; display: table;">';
  echo '<div class="columnProd" style="float: left;width: 15%;padding: 5px;margin-left: 40px;">';
	if($index < $arraySize){
    echo '<img src="data:image/jpeg;base64, '.base64_encode($reslogo[$index]).'" alt="Image-1" style="width:100px;">';
	  echo '<p>'.$rescategory[$index].'</p>';
		$index++;
	}
  echo '</div>';
		
	
  
  echo '<div class="columnProd"style="float: left;width: 15%;padding: 5px;margin-left: 40px;">';
	if($index < $arraySize){
    echo '<img src="data:image/jpeg;base64, '.base64_encode($reslogo[$index]).'" alt="Image-2" style="width:100px;">';
	  echo '<p>'.$rescategory[$index].'</p>';
		$index++;
	}
  echo '</div>';

  
  echo '<div class="columnProd"style="float: left;width: 15%;padding: 5px;margin-left: 40px;">';
	if($index < $arraySize){
    echo '<img src="data:image/jpeg;base64, '.base64_encode($reslogo[$index]).'" alt="Image-3" style="width:100px;">';
	  echo '<p>'.$rescategory[$index].'</p>';
		$index++;
	}
  echo '</div>';
	
	
	
  echo '<div class="columnProd"style="float: left;width: 15%;padding: 5px;margin-left: 40px;">';
	if($index < $arraySize){
    echo '<img src="data:image/jpeg;base64, '.base64_encode($reslogo[$index]).'" alt="Image-4" style="width:100px;">';
	  echo '<p>'.$rescategory[$index].'</p>';
		$index++;
	}
  echo '</div>';
	
	
  
  echo '<div class="columnProd"style="float: left;width: 15%;padding: 5px;margin-left: 40px;">';
	if($index < $arraySize){
    echo '<img src="data:image/jpeg;base64, '.base64_encode($reslogo[$index]).'" alt="Image-5" style="width:100px;">';
	  echo '<p>'.$rescategory[$index].'</p>';
		
		$index++;
	}
	echo '</div>';
	echo '</div>';
	echo'</form>';	
}
	

?>
   
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>  

<div class="footer" style="margin-top: 800px;">
<?php include_once APPROOT . '/views/includes/footer.php'; ?></div>
