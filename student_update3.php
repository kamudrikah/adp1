
<?php
session_start();
$conn = oci_connect('system','oracle','XE');

	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		
		$matric_no = $_POST['matric_no'];
		$stud_name= $_POST['stud_name'];
		$stud_year = $_POST['stud_year'];
		$stud_course = $_POST['stud_course'];
		$stud_session = $_POST['stud_session'];
		$stud_group = $_POST['stud_group'];
		$stud_faculty = $_POST['stud_faculty'];
		  
		  $strSQL = "UPDATE STUDENT SET 
		  MATRIC_NO='$matric_no',
		  STUD_NAME='$stud_name',
		  STUD_YEAR='$stud_year',
		  STUD_COURSE='$stud_course',
		  STUD_SESSION='$stud_session', 
		  STUD_GROUP='$stud_group',
		  STUD_FACULTY='$stud_faculty'
		  WHERE MATRIC_NO='$matric_no'";  
			
			$objParse = oci_parse($conn, $strSQL);  
			$objExecute = oci_execute($objParse, OCI_DEFAULT);  
			if($objExecute)  
			{  
			oci_commit($conn);
			Echo"<script language = 'Javascript'>
								 alert('Update success')
								  location.href = 'list_student.php'</script>";
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
































