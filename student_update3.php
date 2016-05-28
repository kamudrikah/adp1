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
			$strSQL .=",STUD_YEAR = '".$_POST["STUD_YEAR"]."' ";  
			$strSQL .=",STUD_COURSE = '".$_POST["STUD_COURSE"]."' ";  
			$strSQL .=",STUD_SESSION = '".$_POST["STUD_SESSION"]."' "; 
			$strSQL .=",STUD_GROUP = '".$_POST["STUD_GROUP"]."' ";  
			$strSQL .=",STUD_FACULTY = '".$_POST["STUD_FACULTY"]."' ";  
			$strSQL .="WHERE MATRIC_NO = '".$_GET["MATRIC_NO"]."' ";  
			$objParse = oci_parse($conn, $strSQL);  
			$objExecute = oci_execute($objParse, OCI_DEFAULT);  
			if($objExecute)  
			{  
			oci_commit($conn);
			Echo"<script language = 'Javascript'>
								 alert('Update success')
								  location.href = 'list_student.php</script>";
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
















