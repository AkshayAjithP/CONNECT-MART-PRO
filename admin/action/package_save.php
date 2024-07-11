<?php
	include("../../connect/db.php");

	
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
	

	$sql = "insert into bpackage(name,bname,amt,location,fdate,tdate,photo,descrp)values('$name','$bname','$amt','$location','$fdate','$tdate','$photo','$descrp')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../package_search.php");
?>
