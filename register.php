<?php
     $conn = oci_connect('system','oracle','XE');
    ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$LECTURER_ID = $_POST['lecturer_id'];
$LECTURER_NAME = $_POST['lecturer_name'];
$PWORD = $_POST['pword'];
$PHONENO = $_POST['phoneno'];
$PHOTO = $_POST['photo'];

       
	         $sql = 'begin insert_new_stud(:c1,:c2,:c3,:c4,:c5);end;';
                $stid = oci_parse($conn,$sql);
                $r = @oci_execute($stid);
				oci_bind_by_name($stid,':c1',$LECTURER_ID);
				oci_bind_by_name($stid,':c2',$LECTURER_NAME);
				oci_bind_by_name($stid,':c3',$PWORD);
				oci_bind_by_name($stid,':c4',$PHONENO);
				oci_bind_by_name($stid,':c5',$PHOTO);
				oci_execute($stid);
				//var_dump($sql);
				
             Echo"<script language = 'Javascript'>
					alert('Lecturer registered done !')
					location.href = 'login.php'</script>";
					
					
               

       
    

	oci_close($conn);
?>

