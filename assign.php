<?php
     $conn = oci_connect('system','oracle','XE');
    ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$GROUP_ID = $_POST['group_id'];
$CODE_SUBJECT = $_POST['code_subject'];
$LECTURER_ID = $_POST['lecturer_id'];
$SEM = $_POST['sem'];
$CLASS_SESSION = $_POST['class_session'];


       
	         $sql = 'begin insert_assign_class(:c1,:c2,:c3,:c4,:c5);end;';
                $stid = oci_parse($conn,$sql);
                $r = @oci_execute($stid);
				oci_bind_by_name($stid,':c1',$GROUP_ID);
				oci_bind_by_name($stid,':c2',$CODE_SUBJECT);
				oci_bind_by_name($stid,':c3',$LECTURER_ID);
				oci_bind_by_name($stid,':c4',$SEM);
				oci_bind_by_name($stid,':c5',$CLASS_SESSION);
				
				oci_execute($stid);
				//var_dump($sql);
				
             echo"<script language = 'Javascript'>
					alert('Done assign class.')
					location.href ='assign_to_class.php' </script>";

	oci_close($conn);
?>

