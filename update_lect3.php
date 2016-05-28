<?php
session_start();
$conn = oci_connect('system','oracle','XE');

	if (!$conn) 
		{
  	  	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		
		
		$LECTURER_ID = $_POST["LECTURER_ID"];
		$LECTURER_NAME = $_POST["LECTURER_NAME"];
		$PHONENO = $_POST["PHONENO"];
		$LECTURER_POSITION = $_POST["LECTURER_POSITION"];
		$LECTURER_EMAIL = $_POST["LECTURER_EMAIL"];
		$PWORD = $_POST["PWORD"];
		$STATUS = $_POST["STATUS"];
		  
		$sql ='begin updatelecturer_proc(:a1,:a2,:a3,:a4,:a5,:a6,:a7);end;';

                $stid = oci_parse($conn,$sql);
				oci_bind_by_name($stid,':a1',$LECTURER_ID);
				oci_bind_by_name($stid,':a2',$LECTURER_NAME);
				oci_bind_by_name($stid,':a3',$PHONENO);
				oci_bind_by_name($stid,':a4',$LECTURER_POSITION);
				oci_bind_by_name($stid,':a5',$LECTURER_EMAIL);
				oci_bind_by_name($stid,':a6',$PWORD);
				oci_bind_by_name($stid,':a7',$STATUS);
			
                $r = @oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
                if($r)
                {
                    Echo"<script language = 'Javascript'>
     				 alert('Update success')
     				  location.href = 'list_lecturer.php'</script>";
                   
                }
                else
                {
                   
                     Echo"<script language = 'Javascript'>
     				 alert('Update fail')
     				 location.href = '#'</script>";
                    
                }
oci_free_statement($stid);
 oci_close($conn);
?>
















