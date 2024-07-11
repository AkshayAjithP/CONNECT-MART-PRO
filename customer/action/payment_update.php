<?php
	include("../auth.php");
	include("../../connect/db.php");
	$Log_Id=$_SESSION['SESS_USER_ID'];	
	

	$sql = "update productorder	set pstatus='confirm' where BLog_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../product_request.php");
?>
