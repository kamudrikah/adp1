<?php

$conn = oci_connect('system','oracle','XE');
	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}

session_start();

$error='';

if (empty($_POST['LECTURER_ID']) || empty($_POST['PWORD']))
{
	echo"<script language = 'Javascript'>
					alert('Fill All Field!')
					location.href = 'try.php'</script>";
				
}
else
{
	
$LECTURER_ID = $_POST['LECTURER_ID'];
$PWORD = $_POST['PWORD'];

$sql = "SELECT COUNT(*) AS NUMBER_OF_ROWS FROM LECTURER where LECTURER_ID= '".$LECTURER_ID."' and PWORD = '".$PWORD."'";
$stid = oci_parse($conn,$sql);

oci_define_by_name($stid, 'NUMBER_OF_ROWS', $number_of_rows);

oci_execute($stid);

oci_fetch($stid);

echo $number_of_rows;
	if($number_of_rows==1)
	{
		$_SESSION["LECTURER_ID"] = $_POST['LECTURER_ID'];
		echo"<script language = 'Javascript'>
					alert('Login success')
					location.href = 'mainPage.php'</script>";
	} 
	else 
	{
		echo"<script language = 'Javascript'>
					alert('Invalid Staff ID or Password , Please Try Again.')
					location.href = 'try.php'</script>";
	}
}
oci_close($conn);
?>
