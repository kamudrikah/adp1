<?php
session_start();
$conn = oci_connect('system','oracle','XE');

	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		
		
		$lecturer_id = $_POST['LECTURER_ID'];
		$lecturer_name = $_POST['LECTURER_NAME'];
		$phoneNo = $_POST['PHONENO'];
		$lecturer_position = $_POST['LECTURER_POSITION'];
		$lecturer_email = $_POST['LECTURER_EMAIL'];
		$pword = $_POST['PWORD'];
		$status = $_POST['STATUS'];
		  
		  $strSQL = "UPDATE LECTURER SET LECTURER_NAME='$lecturer_name' , PHONENO='$phoneNo',
		  LECTURER_POSITION='$lecturer_position' , LECTURER_EMAIL='$lecturer_email',
		  PWORD='$pword', STATUS='$status' WHERE LECTURER_ID='$lecturer_id'";  
			
			$objParse = oci_parse($conn, $strSQL);  
			$objExecute = oci_execute($objParse, OCI_DEFAULT);  
			if($objExecute)  
			{  
			oci_commit($conn);
			Echo"<script language = 'Javascript'>
								 alert('Update success')
								  location.href = 'list_lecturer.php'</script>";
			}  
			else  
			{  
			oci_rollback($conn);
			$e = oci_error($objParse);  
			Echo"<script language = 'Javascript'>
								 alert('Update fail')
								 location.href = '#'</script>";
			}  
			oci_close($conn);  
?>
















