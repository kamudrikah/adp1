<?php
     $conn = oci_connect('system','oracle','XE');
    ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$CODE_SUBJECT = $_POST['code_subject'];
$SUBJECT_NAME = $_POST['subject_name'];
$TYPE_SUBJECT = $_POST['type_subject'];

       
	         $sql = 'begin insert_subj_stud(:c1,:c2,:c3);end;';
                $stid = oci_parse($conn,$sql);
                $r = @oci_execute($stid);
				oci_bind_by_name($stid,':c1',$CODE_SUBJECT);
				oci_bind_by_name($stid,':c2',$SUBJECT_NAME);
				oci_bind_by_name($stid,':c3',$TYPE_SUBJECT);
				oci_execute($stid);
				//var_dump($sql);
				
             Echo"<script language = 'Javascript'>
					alert('Done added subject in your system.')
					location.href ='subjectUpdate.php' /script>";
					
					
               

       
    

	oci_close($conn);
?>

