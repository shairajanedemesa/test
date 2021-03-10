<?php
include "../functions/db.php";
  if(isset($_GET['post_Id'])){
		$id = $_GET['post_Id'];
	}
	if(empty($id)){
		header("location:index.php");
	}

	$run = mysqli_query($con,"DELETE FROM tbluser WHERE post_Id = '$user_Id'")
	or die(mysqli_error($con));  	

	header("Location:post.php");
	
?>