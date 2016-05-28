<?php 
$filName = "student.csv";  
$objWrite = fopen($filName, "w");  

$conn = oci_connect('system','oracle','XE');

if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

$strSQL = "SELECT * FROM STUDENT";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  

?>  
<div  align="center"><br /><br />

<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{ 
fwrite($objWrite, "\"$objResult[STUD_BIL]\",\"$objResult[MATRIC_NO]\",\"$objResult[STUD_NAME]\",");  
fwrite($objWrite, "\"$objResult[STUD_YEAR]\",\"$objResult[STUD_COURSE]\",\"$objResult[STUD_SESSION]\", \"$objResult[STUD_GROUP]\", \"$objResult[STUD_FACULTY]\",");

}  
fclose($objWrite); 
 
echo "GENERATED CSV COMPLETED.<br><br><a href=$filName>DOWNLOAD</a>";  
?>  