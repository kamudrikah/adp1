<html>  
<head>  
<title>UTeM Attendance Student </title>  

</head>  
<body>
<body bgcolor = "#48D1CC">
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></center>
    	 </div>
			
		</div><br /> 
<form action="mainPage.php" method="post">
 <p align="right"><button type="submit" value="submit" class="btn btn-primary" >Home</button></p>
 </form>
<form class="form-horizontal" method="POST">
<h3 align="center">LIST SUBJECT</h3>
<br>
<?php  
$conn = oci_connect('system','oracle','XE');

 ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$curs = oci_new_cursor($conn);
$stid = oci_parse($conn, "begin listsubject_proc(:rc); end;");
oci_bind_by_name($stid, ":rc", $curs, -1, OCI_B_CURSOR);
oci_execute($stid);

oci_execute($curs);  
?>

 
<table width="800" border="1" align="center">  
<tr>
<th width="150"> <div align="center">Subject Code</div></th>    
<th width="500"> <div align="center">Subject Name </div></th>  
<th width="150"> <div align="center"> Type</div></th>  
<th width="150"> <div align="center">Action </div></th> 

</tr> 

<?php  
while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
 ?>  
	 
<tr>  
<td><div align="center"><?php echo $row['CODE_SUBJECT'];?></div></td>  
<td><div align="center"><?php echo $row['SUBJECT_NAME'];?></div></td>  
<td><div align="center"><?php echo $row['TYPE_SUBJECT'];?></div></td>  
<td align="center"><a href="subjectUpdate2.php?CODE_SUBJECT=<?=$row['CODE_SUBJECT'];?>">UPDATE</a>||<a href="subjectDelete.php?CODE_SUBJECT=<?=$row['CODE_SUBJECT'];?>">DELETE</a></td>
  
</tr>  
<?php  
}
?> 
</table> 
<?php
oci_free_statement($stid);
oci_free_statement($curs);
oci_close($conn);
				
 ?>    
   </form>        
</body>  
</html>