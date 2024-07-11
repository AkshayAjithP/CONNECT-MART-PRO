<?php
	include("../../connect/db.php");

	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$location=$_POST["location"];
	
	$manager=$_POST["manager"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$bdesc=$_POST["bdesc"];
	
	$date=date("Y-m-d");
	
	$Log_Id="MRTP".rand(789654452,0);
	
	$utype="Manager";
	$stat="Active";
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into user(Log_Id,name,contact_no,location,email,password,liceno,adharno,date,utype,stat,photo)values('$Log_Id','$name','$cntno','$location','$email','$password','$manager','$bdesc','$date','$utype','$stat','$photo')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../branch_search.php");
?>

