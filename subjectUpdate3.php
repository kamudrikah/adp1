<?php
session_start();
$conn = oci_connect('system','oracle','XE');

	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		  
		  $strSQL = "UPDATE SUBJECT SET ";  
			$strSQL .="CODE_SUBJECT = '".$_POST["CODE_SUBJECT"]."' ";  
			$strSQL .=",SUBJECT_NAME = '".$_POST["SUBJECT_NAME"]."' ";  
			$strSQL .=",TYPE_SUBJECT = '".$_POST["TYPE_SUBJECT"]."' ";  
			$strSQL .="WHERE CODE_SUBJECT = '".$_POST["CODE_SUBJECT"]."' ";  
			$objParse = oci_parse($conn, $strSQL);  
			$objExecute = oci_execute($objParse, OCI_DEFAULT);  
			if($objExecute)  
			{  
			oci_commit($conn);
			Echo"<script language = 'Javascript'>
								 alert('Update success')
								  location.href = 'subjectUpdate.php'</script>";
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
















