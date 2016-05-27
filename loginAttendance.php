<?php

session_start();
$conn = oci_connect('system','oracle','XE');
$_SESSION['lecturer_id'] = $_POST['lecturer_id'];
$_SESSION['pword'] = $_POST['pword'];

$error='';

if (empty($_POST['lecturer_id']) || empty($_POST['lecturer_id']))
	{
		Echo"<script language = 'Javascript'>
					alert('Please Fill All Field !')
					location.href = 'index.php'</script>";
				
	}
else
	{
	
	$sql = "SELECT * FROM lecturer WHERE lecturer_id='".$_SESSION['lecturer_id']."' AND pword='".$_SESSION['pword']."'";
	$stid = oci_parse($conn,$sql);
	oci_execute($stid);
	$row = oci_fetch_array($stid);
	
if ($row['STATUS'] == 'admin')	
	{
		$_SESSION["lecturer_name"] = $row['LECTURER_NAME'];
		$_SESSION["lecturer_id"] = $_POST['lecturer_id'];
		Echo"<script language = 'Javascript'>
					alert('SUCCESSFUL LOGIN !')
					location.href = 'mainpage.php'</script>";
	}
	elseif ($row['STATUS'] == 'lecturer')	
	{
		$_SESSION["lecturer_name"] = $row['LECTURER_NAME'];
		$_SESSION["lecturer_id"] = $_POST['lecturer_id'];
		Echo"<script language = 'Javascript'>
					alert('SUCCESSFUL LOGIN !')
					location.href = 'mainlecturer.php'</script>";
	}
	else 
	{
      Echo"<script language = 'Javascript'>
					alert('INVALID USERNAME OR PASSWORD !')
					location.href = 'index.php'</script>";
	
	}
	}
oci_close($conn);
?>