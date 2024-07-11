<?php
	include("../../connect/db.php");

	$name=$_POST["name"];
	$cntno=$_POST["contact_no"];
	$location=$_POST["location"];
	
	$bname=$_POST["bname"];
	
	$age=$_POST["age"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$sex=$_POST["sex"];

	$date=date("Y-m-d");
	
	$Log_Id="MRTP".rand(789654452,0);
	
	$utype="User";
	$stat="Active";
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into user(Log_Id,name,contact_no,location,email,password,age,sex,date,utype,stat,photo,liceno)values('$Log_Id','$name','$cntno','$location','$email','$password','$age','$sex','$date','$utype','$stat','$photo','$bname')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../customer_search.php");
?>

