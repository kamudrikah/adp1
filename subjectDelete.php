<?php
session_start();
$conn = oci_connect('system','oracle','XE');
	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		  $CODE_SUBJECT=$_GET['CODE_SUBJECT'];
		  
         
$sql ='begin deletesubject_proc(:v_code_subject);end;';

                $stid = oci_parse($conn,$sql);
				oci_bind_by_name($stid,':v_code_subject',$CODE_SUBJECT);
                $r = @oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
                if($r)
                {
                    Echo"<script language = 'Javascript'>
     				 alert('Subject has been delete from your list')
     				  location.href = 'subjectUpdate.php'</script>";
                   
                }
                else
                {
                   
                     Echo"<script language = 'Javascript'>
     				 alert('Unsuccessful delete')
     				 location.href = ''</script>";
                    
                }
oci_free_statement($stid);
 oci_close($conn);
?>

