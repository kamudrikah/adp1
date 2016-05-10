







<?php
     $conn = oci_connect('system','oracle','XE');
    ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$MATRIC_NO = $_POST['matric_no'];
$NAME = $_POST['stud_name'];
$PHONE = $_POST['phone'];
$IC = $_POST['ic'];
$ADDRESS = $_POST['address'];
$EMAIL = $_POST['email'];
$COURSE_CLASS = $_POST['course_class'];

       
	         $sql = 'begin insert_new_stud(:c1,:c2,:c3,:c4,:c5,:c6,:c7);end;';
                $stid = oci_parse($conn,$sql);
                $r = @oci_execute($stid);
				oci_bind_by_name($stid,':c1',$MATRIC_NO);
				oci_bind_by_name($stid,':c2',$NAME);
				oci_bind_by_name($stid,':c3',$PHONE);
				oci_bind_by_name($stid,':c4',$IC);
				oci_bind_by_name($stid,':c5',$ADDRESS);
				oci_bind_by_name($stid,':c6',$EMAIL);
				oci_bind_by_name($stid,':c7',$COURSE_CLASS);
				oci_execute($stid);
				//var_dump($sql);
				
             Echo"<script language = 'Javascript'>
					alert('Done added your student.')
					location.href = 'student.php'</script>";
					
					
               

       
    

	oci_close($conn);
?>
