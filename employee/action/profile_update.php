<?php
include("../../connect/db.php");

	
	$name=$_POST["name"];

	$contact_no=$_POST["contact_no"];
	$email=$_POST["email"];
	$location=$_POST["location"];
	$password=$_POST["password"];
	
	$liceno=$_POST["liceno"];
	
	$age=$_POST["age"];
	$sex=$_POST["sex"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	if($photo=="")
	{
		$sql = "update user set contact_no='$contact_no',email='$email',location='$location',password='$password',liceno='$liceno',sex='$sex',age='$age' where name='$name'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}
	else
	{
		$sql = "update user set contact_no='$contact_no',email='$email',location='$location',password='$password',liceno='$liceno',photo='$photo',sex='$sex',age='$age' where name='$name'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}

	header("location:../profile.php");
?>
