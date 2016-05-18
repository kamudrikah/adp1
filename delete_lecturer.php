<?php
session_start();
$conn = oci_connect('system','oracle','XE');
	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		  $LECTURER_ID=$_GET['LECTURER_ID'];
		  
         
$sql ='begin deletelecturer_proc (:v_lecturer_id);end;';

                $stid = oci_parse($conn,$sql);
				oci_bind_by_name($stid,':v_lecturer_id',$MATRIC_NO);
                $r = @oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
                if($r)
                {
                    Echo"<script language = 'Javascript'>
     				 alert('Data berjaya dihapuskan')
     				  location.href = 'list_lecturer.php'</script>";
                   
                }
                else
                {
                   
                     Echo"<script language = 'Javascript'>
     				 alert('Data gagal dihapuskan')
     				 location.href = ''</script>";
                    
                }
oci_free_statement($stid);
 oci_close($conn);
?>

