<?php
	//Start session
	session_start();
	
	include('connect/db.php');
		
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	//Create query
	$qrya= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Admin' AND stat='Active'");
	$qrya->execute();
	$counta = $qrya->rowcount();
	
	
	$qrysh = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Manager' AND stat='Active'");
	$qrysh->execute();
	$countsh = $qrysh->rowcount();
	
	
	$qryemp = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Employee' AND stat='Active'");
	$qryemp->execute();
	$countemp = $qryemp->rowcount();
	
	
	$qryu = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='User' AND stat='Active'");
	$qryu->execute();
	$countu = $qryu->rowcount();
	//Check whether the query was successful or not
	if($counta > 0) {
		//Login Successful
		session_regenerate_id();
		$rowa = $qrya->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowa['Log_Id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}
	else if($countsh > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsh = $qrysh->fetch();
		$_SESSION['SESS_SHOPS_ID'] = $rowsh['Log_Id'];
		session_write_close();
		header("location: shops/index.php");
		exit();
	}
	else if($countemp > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsemp = $qryemp->fetch();
		$_SESSION['SESS_EMP_ID'] = $rowsemp['Log_Id'];
		session_write_close();
		header("location: employee/index.php");
		exit();
	}
	else if($countu > 0) {
		//Login Successful
		session_regenerate_id();
		$rows = $qryu->fetch();
		$_SESSION['SESS_USER_ID'] = $rows['Log_Id'];
		session_write_close();
		header("location: customer/index.php");
		exit();
	}
	
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password'); window.location='index.php'</script>";
		exit();
	}
?>
