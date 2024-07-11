<?php
	include("../../connect/db.php");
	
	$prd_id=$_GET["prd_id"];

	$sql="update  product  set dmstat='damage' where prd_id='$prd_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	header("location:../damage_search.php");
		
	
?>