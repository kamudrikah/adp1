<?php
session_start();
$conn = oci_connect('system','oracle','XE');

	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		  
		  $strSQL = "UPDATE STUDENT SET ";  
			$strSQL .="MATRIC_NO = '".$_POST["MATRIC_NO"]."' ";  
			$strSQL .=",STUD_NAME = '".$_POST["STUD_NAME"]."' ";  
			$strSQL .=",PHONE = '".$_POST["PHONE"]."' ";  
			$strSQL .=",IC = '".$_POST["IC"]."' ";  
			$strSQL .=",ADDRESS = '".$_POST["ADDRESS"]."' ";  
			$strSQL .=",EMAIL = '".$_POST["EMAIL"]."' ";  
			$strSQL .=",COURSE_CLASS = '".$_POST["COURSE_CLASS"]."' "; 
			$strSQL .="WHERE MATRIC_NO = '".$_GET["MATRIC_NO"]."' ";  
			$objParse = oci_parse($conn, $strSQL);  
			$objExecute = oci_execute($objParse, OCI_DEFAULT);  
			if($objExecute)  
			{  
			oci_commit($conn);
			Echo"<script language = 'Javascript'>
								 alert('Update success')
								  location.href = 'updateattnd.php'</script>";
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
















