<?php 
$filName = "student.csv";  
$objWrite = fopen($filName, "w");  

$conn = oci_connect('system','oracle','XE');

if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

$strSQL = "SELECT * FROM LECTURER";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  

?>  
<div  align="center"><br /><br />

<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{ 
fwrite($objWrite, "\"$objResult[MATRIC_NO]\",\"$objResult[STUD_NAME]\",\"$objResult[STUD_FACULTY]\",");  
fwrite($objWrite, "\"$objResult[STUD_FACULTY]\",\"$objResult[STUD_COURSE]\",\"$objResult[STUD_GROUP]\",");

}  
fclose($objWrite); 
 
echo "GENERATED CSV COMPLETED.<br><br><a href=$filName>DOWNLOAD</a>";  
?>  