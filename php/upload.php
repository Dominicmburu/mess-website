<?php 
session_start();
include_once "config.php";
$unique_id = $_SESSION['unique_id'];

// Get the user ID based on the unique ID
  $sql3 = "SELECT id FROM users WHERE unique_id = '$unique_id'";
  $result3 = mysqli_query($conn, $sql3);
  if (!$result3) {
	  die('Could not fetch user data from the database: ' . mysqli_error($conn));
  }
  $row3 = mysqli_fetch_assoc($result3);

  // Check if the user is logged in and has the correct ID
if(!isset($_SESSION['unique_id']) && $row3['id'] != 8){
  header("location: login.php");
  exit;
}

if (isset($_FILES['my_image'])) {

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	// Get the image type
	$img_type = $_FILES['my_image']['type'];

	//This splits the image name from where the dot starts like cca.jpg 
	$img_explode = explode('.',$img_name);

	//it takes the last word after spliting it
	$img_ext = end($img_explode);

	$extensions = ["jpeg", "png", "jpg"];


	if(in_array($img_ext, $extensions) === true){
		$types = ["image/jpeg", "image/jpg", "image/png"];

		//this array searchs whether the image type exits in the variable type
		if(in_array($img_type, $types) === true){
			$time = time();

			//create a new image name
			$new_img_name = $time.$img_name;

			//this function moves a new uploaded file to a new destination
			if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
				
				$insert_query = mysqli_query($conn, "UPDATE users SET image = '{$new_img_name}' WHERE unique_id = '{$unique_id}'");

				if($insert_query){
					echo "success";
				}else{
					echo "Something went wrong. Please try again!";
				}
			}else{
				echo "Something went wrong. Please try again!";
			}
		}
	}else{
		echo "Please upload an image file - jpeg, png, jpg";
	}
}else{
	echo "Please upload an image";
}
?>
