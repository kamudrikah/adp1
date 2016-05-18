<?php
session_start();
$conn = oci_connect('system','oracle','XE');

	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		  
		  $strSQL = "UPDATE LECTURER SET ";  
			$strSQL .="LECTURER_ID = '".$_POST["LECTURER_ID"]."' ";  
			$strSQL .=",LECTURER_NAME = '".$_POST["LECTURER_NAME"]."' ";  
			$strSQL .=",PHONENO = '".$_POST["PHONENO"]."' ";  
			$strSQL .=",LECTURER_POSITION = '".$_POST["LECTURER_POSITION"]."' ";  
			$strSQL .=",LECTURER_EMAIL = '".$_POST["LECTURER_EMAIL"]."' ";  
			$strSQL .=",STATUS = '".$_POST["STATUS"]."' ";  
			
			$strSQL .="WHERE LECTURER_ID = '".$_GET["LECTURER_ID"]."' ";  
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
















