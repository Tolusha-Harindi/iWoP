<?php


include('../../Backend/db_connection.php');

// //$status=TRUE; 


//   // add category function
//   if(isset($_POST['submit'])){

//     $category_name=$_POST['category_name'];
//     //$upload_file = $_POST['upload_file'];
//     $filename = $_FILES['upload_file']['name'];
//     $filetmpname = $_FILES['upload_file']['tmp_name'];
//     $folder = "Uploads";

//     $sql="INSERT INTO add_or_delete_category VALUES (NULL, '$category_name', '$filename')";
//         echo $sql;
//         $result=mysqli_query($db, $sql);

//     if ($result === TRUE) {
//         echo "New record created successfully";
//         header('location:../../Customer/Allcategories/categories.php');
//         } 
//     else {
//         echo "Error: " .$db->error;
//         mysqli_close($db);
//           }     
//   }

if (isset($_POST['submit']) && isset($_FILES['upload_file'])) {
	

	echo "<pre>";
	print_r($_FILES['upload_file']);
	echo "</pre>";
	$img_name = $_FILES['upload_file']['name'];
	$img_size = $_FILES['upload_file']['size'];
	$tmp_name = $_FILES['upload_file']['tmp_name'];
	$error = $_FILES['upload_file']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: ../../Customer/Allcategories/categories.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO add_or_delete_category(category_name,file_url) 
				        VALUES($new_img_name')";
				mysqli_query($db, $sql);
				header("Location:../../Customer/Allcategories/categories.php ");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../../Admin/Adddeletecategory/Adddelcategory.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: ../../Admin/Adddeletecategory/Adddelcategory.php?error=$em");
	}

}else {
	header("Location: ../../Admin/Adddeletecategory/Adddelcategory.php");
}

  ?>