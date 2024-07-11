<?php
include("../../connect/db.php");
require("../auth.php");
$Log_Id=$_SESSION['SESS_ADMIN_ID'];

	$name=$_POST["name"];
	$cntno=$_POST["contact_no"];
	$subj=$_POST["subjd"];
	$sdate=date("Y-m-d");
	
$sql = "insert into notification(Log_Id,name,cntno,subj,sdate)values('$Log_Id','$name','$cntno','$subj','$sdate')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../notification_view.php");
?>
