<?php
	include("../../connect/db.php");
	
	$user_id=$_POST["user_id"];
	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$manager=$_POST["manager"];
	$location=$_POST["location"];
	$bdesc=$_POST["bdesc"];
	
	$password=$_POST["password"];
	$email=$_POST["email"];
	
	
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	if($photo=="")
	{
	$sql = "update user set name='$name',contact_no='$cntno',location='$location',adharno='$bdesc',liceno='$manager',password='$password',email='$email'  where user_id='$user_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	else
	{
	$sql = "update user set name='$name',contact_no='$cntno',location='$location',adharno='$bdesc',liceno='$manager',password='$password',email='$email',photo='$photo' where user_id='$user_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	header("location:../branch_search.php");
?>
