<?php
	include("../../connect/db.php");
	include("../auth.php");
	
	
	$prd_id=$_POST["prd_id"];
	$BLog_Id=$_SESSION['SESS_USER_ID'];
	$SLog_Id=$_POST["SLog_Id"];
	
	$cname=$_POST["cname"];
	$ccontact_no=$_POST["ccontact_no"];
	$clocation=$_POST["clocation"];
	
	$pname=$_POST["pname"];
	$qty=$_POST["qty"];
	$price=$_POST["price"];
	$dat=$_POST["dat"];
	
	$tax=$_POST["tax"];
	$taxa=$_POST["taxa"];
	
	
	$photo=$_POST["photo"];
	
	
	$branch=$_POST["branch"];

	$tot=$qty*$price;
	
	$stat="Pending";
		
	$result = $db->prepare("select * from product where prd_id='$prd_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$qty1 = $row['qty'];
	}
	
	$qtyb=$qty1-$qty;
	
	$pnts=$tot*3/100;
	
	$Od_Id=rand(4566222,0);
	$pstatus="pending";

	
	
$sql = "insert into productorder(BLog_Id,SLog_Id,cname,ccontact_no,clocation,pname,qty,price,dat,photo,tot,stat,tax,taxa,branch,Od_Id,pstatus) VALUES ('$BLog_Id','$SLog_Id','$cname','$ccontact_no','$clocation','$pname','$qty','$price','$dat','$photo','$tot','$stat','$tax','$taxa','$branch','$Od_Id','$pstatus')";
$q1 = $db->prepare($sql);
$q1->execute();


$sql = "insert into ppoints(BLog_Id,cname,ccontact_no,clocation,dat,branch,tot) VALUES ('$BLog_Id','$cname','$ccontact_no','$clocation','$dat','$branch','$pnts')";
$q1 = $db->prepare($sql);
$q1->execute();


$sql = "update product set qty='$qtyb' where prd_id='$prd_id'";
$q1 = $db->prepare($sql);
$q1->execute();


header("location:../cart_list.php");

?>
