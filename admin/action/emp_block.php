<?php
	include("../../connect/db.php");
	
	$user_id=$_GET["user_id"];

	$sql="update user set stat='Block' where user_id='$user_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	header("location:../employee_permission.php");		
	
?>