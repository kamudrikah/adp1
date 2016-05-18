<?php
     $conn = oci_connect('system','oracle','XE');
    ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$LECTURER_ID = $_POST['lecturer_id'];
$LECTURER_NAME = $_POST['lecturer_name'];
$PHONENO = $_POST['phoneNo'];
$LECTURER_POSITION = $_POST['lecturer_position'];
$LECTURER_EMAIL = $_POST['lecturer_email'];
$PWORD = $_POST['pword'];
$STATUS = $_POST['status'];

       
	         $sql = 'begin insert_lecturer(:c1,:c2,:c3,:c4,:c5,:c6,:c7);end;';
                $stid = oci_parse($conn,$sql);
                $r = @oci_execute($stid);
				oci_bind_by_name($stid,':c1',$LECTURER_ID);
				oci_bind_by_name($stid,':c2',$LECTURER_NAME);
				oci_bind_by_name($stid,':c3',$PHONENO);
				oci_bind_by_name($stid,':c4',$LECTURER_POSITION);
				oci_bind_by_name($stid,':c5',$LECTURER_EMAIL);
				oci_bind_by_name($stid,':c6',$PWORD);
				oci_bind_by_name($stid,':c7',$STATUS);
				
				oci_execute($stid);
				//var_dump($sql);
				
             Echo"<script language = 'Javascript'>
					alert('Done register.')
					location.href = 'register_lecturer.php'</script>";
				
	oci_close($conn);
?>

