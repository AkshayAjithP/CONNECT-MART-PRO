<?php
	include("../../connect/db.php");
	
	$prd_id=$_POST["prd_id"];
	$price=$_POST["price"];
	$qty=$_POST["qty"];
	$tax=$_POST["tax"];
	$desp=$_POST["desp"];
	
	$result = $db->prepare("select * from product where prd_id='$prd_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$olqty = $row['qty'];
	}
	$qup=$olqty+$qty;
	$sql="update product set price='$price',qty='$qup',tax='$tax',desp='$desp' where prd_id='$prd_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	header("location:../product_update.php");
		
	
?>