<?php
session_start();
if(!isset($_SESSION['SESS_EMP_ID']) || (trim($_SESSION['SESS_EMP_ID']) == '')) {
	header("location:../");
	exit();
}

?>
