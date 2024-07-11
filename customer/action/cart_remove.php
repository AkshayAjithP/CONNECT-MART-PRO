<?php
include("../../connect/db.php");
	
	$ord_id=$_GET["ord_id"];
	$qty=$_GET["qty"];
	$pname=$_GET["prd_id"];

	$result = $db->prepare("select * from product where name='$pname'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$olqty = $row['qty'];
	}
	$qup=$olqty+$qty;
	
	
	$sql="update product set qty='$qup'  where name='$pname'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	
	$sql = "delete from productorder where ord_id='$ord_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	header("location:../cart_list.php");
?>
