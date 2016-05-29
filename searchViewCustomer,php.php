<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="file:///C|/Users/Personal/Downloads/css/bootstrap.min.css"/>
<!-- Optional theme -->
<link rel="shortcut icon" href="file:///C|/Users/Personal/Downloads/image/logoshortcut.jpg"/>
<link rel="stylesheet" href="file:///C|/Users/Personal/Downloads/css/bootstrap-theme.min.css"  />
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="file:///C|/Users/Personal/Downloads/js/bootstrap.min.js"></script>
<title>ADP</title>
<link rel="stylesheet" href="file:///C|/Users/Personal/Downloads/layout.css" type="text/css">
<style type="text/css">
<!--
.style1 {color: #000066}
-->
</style>
<div id="header">
<center>
<h2>CardioZA Enterprise Sales and Inventory System</h2>
</div>
</head>
<body bgcolor="#FFFFCC">
<div id="navigation">

</div>
<br />
<br />
<br />
<br />
<table width="65" border="0" align="left">
  <tr>
    <td width="59" height="73"><a href="CustomerPage.php">
    <div align="center"><img src="file:///C|/Users/Personal/Downloads/image/BackButton.png" width="50" height="50"></a></div></td>
  </tr>
</table>


<form name="frmSearch" method="get" action="<?=$_SERVER['file:///C|/Users/Personal/Downloads/SCRIPT_NAME'];?>">  
<table width="624" border="0" align="center">  
<tr>	
<th width="419" height="35">Search Class Here 
  <input name="txtKeyword" type="text" id="txtKeyword">     
	<td width="189"> <input type="submit" value="Search"></th></td>
	<td width="2"></th></tr>  
    
    <tr>	
<th width="419" height="35"> 
  <input name="txtKeyword" type="text" id="txtKeyword">     
	<td width="189"> <input type="submit" value="Search"></th></td>
	<td width="2"></th></tr>  
</table>  
</form>   
<br />
</div>
 
  
  
<?php
if(isset($_GET["txtKeyword"])){

if($_GET["txtKeyword"] != "")  
{  
//create connection

$conn = oci_connect('system','oracle','XE');

if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

  
  
  
$strSQL = "SELECT * FROM ATTENDANCE
WHERE (CUST_ID LIKE '%".$_GET["txtKeyword"]."%' ) OR 
(F_NAME LIKE '%".$_GET["txtKeyword"]."%') OR 
(L_NAME LIKE '%".$_GET["txtKeyword"]."%') OR 
(CITY LIKE '%".$_GET["txtKeyword"]."%') OR 
(STATE LIKE '%".$_GET["txtKeyword"]."%')";
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse);  
?> 
 
<td><div align="center"><table width="1200" border="1"></div></td>
<tr bordercolor="#000000">  
<th width="60"> <div align="center">No</div></th>
<th width="93"> <div align="center">Name</div></th>  
<th width="46"> <div align="center">No Matric</div></th>  
<th colspan="2"> <div align="center">Week 1</div></th>
  
<th colspan="2"> <div align="center">Week 2</div></th>  
<th colspan="2"> <div align="center" colspan="2">Week 3</div></th>
<th width="50"> <div align="center">Week 4</div></th>
<th width="50"> <div align="center">Week 5</div></th>
<th width="50"> <div align="center">Week 6</div></th>
<th width="50"> <div align="center">Week 7</div></th>
<th width="50"> <div align="center">Week 8</div></th>
<th width="50"> <div align="center">Week 9</div></th>
<th width="50"> <div align="center">Week 10</div></th>
<th width="50"> <div align="center">Week 11</div></th>
<th width="50"> <div align="center">Week 12</div></th>
<th width="50"> <div align="center">Week 13</div></th>
<th width="50"> <div align="center">Week 14</div></th>   
</tr>  
<br />
<?php  
while($result = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>  
<tr>  
<td><div  align="center"><?=$result["CUST_ID"];?></div></td>
<td><div  align="center"><?=$result["F_NAME"];?></div></td>  
<td><div  align="center"><?=$result["L_NAME"];?></td>  
<td width="46"><?=$result["ADDRESS"];?></td>  
<td width="41"><div  align="center"><?=$result["POSTCODE"];?></div></td>  
<td align="center"><?=$result["CITY"];?></td>
<td align="center"><?=$result["STATE"];?></td>
<td align="center"><?=$result["PHONENO"];?></td>
</tr>  
<?php 
}  
?>  
</table>  
<?php  
oci_close($conn);  
}}
?>   
 
 

</body>
</html>
