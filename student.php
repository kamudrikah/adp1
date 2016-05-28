
<?php
     $conn = oci_connect('system','oracle','XE');
    ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$MATRIC_NO = $_POST['matric_no'];
$STUD_NAME = $_POST['stud_name'];
$STUD_YEAR = $_POST['stud_year'];
$STUD_COURSE = $_POST['stud_course'];
$STUD_SESSION = $_POST['stud_session'];
$STUD_GROUP = $_POST['stud_group'];
$STUD_FACULTY = $_POST['stud_faculty'];

       
	         $sql = 'begin insert_new_stud(:c1,:c2,:c3,:c4,:c5,:c6,:c7,:8);end;';
                $stid = oci_parse($conn,$sql);
                $r = @oci_execute($stid);
				
				oci_bind_by_name($stid,':c2',$MATRIC_NO);
				oci_bind_by_name($stid,':c3',$STUD_NAME);
				oci_bind_by_name($stid,':c4',$STUD_YEAR);
				oci_bind_by_name($stid,':c5',$STUD_COURSE);
				oci_bind_by_name($stid,':c6',$STUD_SESSION);
				oci_bind_by_name($stid,':c7',$STUD_GROUP);
				oci_bind_by_name($stid,':c78',$STUD_FACULTY);
				oci_execute($stid);
				//var_dump($sql);
				
             Echo"<script language = 'Javascript'>
					alert('Done added your student.')
					location.href = 'list_student.php'</script>";
					
					
               

       
    

	oci_close($conn);
?>
