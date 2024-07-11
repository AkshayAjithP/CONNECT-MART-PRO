<?php
	include("../../connect/db.php");
	
	$bk_id=$_POST["bk_id"];
	
	
	$name=$_POST["name"];
	$bname=$_POST["bname"];
	$amt=$_POST["amt"];
	
	$location=$_POST["location"];
	$fdate=$_POST["fdate"];
	$tdate=$_POST["tdate"];
	$descrp=$_POST["descrp"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	if($photo=="")
	{
	$sql = "update bpackage set name='$name',bname='$bname',amt='$amt',location='$location',fdate='$fdate',tdate='$tdate',descrp='$descrp' where bk_id='$bk_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	else
	{
	$sql = "update bpackage set name='$name',bname='$bname',amt='$amt',location='$location',fdate='$fdate',tdate='$tdate',descrp='$descrp',photo='$photo' where bk_id='$bk_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	header("location:../package_search.php");
?>
