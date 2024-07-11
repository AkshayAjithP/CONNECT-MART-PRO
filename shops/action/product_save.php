<?php
	include("../../connect/db.php");
	include("../auth.php");
	$Log_Id=$_SESSION['SESS_SHOPS_ID'];

	$name=$_POST["name"];
	$qty=$_POST["qty"];
	$price=$_POST["price"];
	$tax=$_POST["tax"];
	$location=$_POST["location"];
	$desp=$_POST["desp"];
	$branch=$_POST["bname"];
	$date=date("Y-m-d");
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../product_ph/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into product(Log_Id,name,qty,price,tax,location,photo,desp,branch,date)values('$Log_Id','$name','$qty','$price','$tax','$location','$photo','$desp','$branch','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../product_search.php");
?>
