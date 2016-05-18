<html>  
 <head>  
<title>UTeM Attendance Student </title>  

</head>  
<body>
<body bgcolor = #f2f2f2>
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></center>
    	 </div>
			
		</div><br /> 
<form action="mainPage.php" method="post">
 <p align="right"><button type="submit" value="submit" class="btn btn-primary" >Home</button></p>
 </form>
<form class="form-horizontal" method="POST">
<h3 align="center">LECTURER</h3>
<br>
<?php  
$conn = oci_connect('system','oracle','XE');

 ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$curs = oci_new_cursor($conn);
$stid = oci_parse($conn, "begin listlecturer_proc(:rc); end;");
oci_bind_by_name($stid, ":rc", $curs, -1, OCI_B_CURSOR);
oci_execute($stid);

oci_execute($curs);  
?>

 
<table width="1100" border="1" align="center">  
<tr>
<th width="115"> <div align="center">Lecturer ID</div></th>    
<th width="210"> <div align="center">Lecturer Name </div></th>  
<th width="115"> <div align="center">Phone Number</div></th>  
   
<th width="235"> <div align="center">Lecturer Position</div></th>  
<th width="105"> <div align="center">Email</div></th>  
  
<th width="132"> <div align="center">Action </div></th> 

</tr> 

<?php  
while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
 ?>  
	 
<tr>  
<td><div align="center"><?php echo $row['LECTURER_ID'];?></div></td>  
<td><div align="center"><?php echo $row['LECTURER_NAME'];?></div></td>  
<td><div align="center"><?php echo $row['PHONENO'];?></div></td>  
<td><div align="center"><?php echo $row['LECTURER_POSITION'];?></div></td>  
<td><div align="center"><?php echo $row['LECTURER_EMAIL'];?></div></td>   
<td><div align="center"><?php echo $row['STATUS'];?></div></td>   
 <td align="center"><a href="updateattnd2.php?LECTURER_ID=<?=$row['LECTURER_ID'];?>">UPDATE</a>||<a href="delete_lecturer.php?LECTURER_ID=<?=$row['LECTURER_ID'];?>">DELETE</a></td>
  
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