<?php
//create connection

$conn = oci_connect('system','oracle','XE');

if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

$strSQL = "SELECT * FROM STUDENT";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
?>  

<div  align="center"><br /><br /><label>EXPORT STUDENT INFORMATION</label><br /><br /><br />

<table width="1000" border="1">  
<tr>  
<th width="143"> <div align="center">NO BIL</div></th>
<th width="143"> <div align="center">MATRIC NUMBER </div></th>
<th width="131"> <div align="center">FULL NAME  </div></th>  
<th width="157"> <div align="center">YEAR  </div></th> 
<th width="128"> <div align="center">COURSE </div></th>
<th width="251"> <div align="center">SESSION </div></th> 
<th width="251"> <div align="center">GROUP </div></th>
<th width="251"> <div align="center">FACULTY </div></th>
</tr> 
<?php 
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>  
<tr>  
<td><div  align="center"><?=$objResult["STUD_BIL"];?></td>  
<td><div  align="center"><?=$objResult["MATRIC_NO"];?></td>  
<td><div  align="center"><?=$objResult["STUD_NAME"];?></td>
<td><div  align="center"><?=$objResult["STUD_YEAR"];?></td>
<td><div  align="center"><?=$objResult["STUD_COURSE"];?></td>
<td><div  align="center"><?=$objResult["STUD_SESSION"];?></td>
<td><div  align="center"><?=$objResult["STUD_GROUP"];?></td>
<td><div  align="center"><?=$objResult["STUD_FACULTY"];?></td>


</tr>  
<?php  
}  
?> 
</table>  
<?php 
oci_close($conn);  
?> 
<div align="center"><br>  
<input name="btnExport" type="button" value="EXPORT" onClick="JavaScript:window.location='export2.php';">  