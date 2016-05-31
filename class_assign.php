<?php
$conn = oci_connect('system','oracle','XE');
ob_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$massage= "";
	
//print_r($_POST);
//die();

$CODE_SUBJECT = $_POST['code_subject'];
$STUD_BIL = $_POST['stud_bil'];
$SEM_STUD = $_POST['sem_stud'];
$SESSION_STUD = $_POST['session_stud'];


       
	        $sql = 'begin insert_subjstudent(:c1,:c2,:c3,:c4);end;';
               $stid = oci_parse($conn,$sql);
                $r = @oci_execute($stid);
				oci_bind_by_name($stid,':c1',$CODE_SUBJECT);
				oci_bind_by_name($stid,':c2',$STUD_BIL);
				oci_bind_by_name($stid,':c3',$SEM_STUD);
				oci_bind_by_name($stid,':c4',$SESSION_STUD);
				
				
				oci_execute($stid);
				//var_dump($sql);
				
             echo"<script language = 'Javascript'>
					alert('Done assign subject to new student.')
					location.href ='student_class.php' </script>";

	oci_close($conn);
?>

