<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table width="65" border="0" align="left">
  <tr>
    <td width="59" height="73"><a href="CustomerPage.php">
    <div align="center"><img src="image/BackButton.png" width="50" height="50"></a></div></td>
  </tr>
</table>


<form name="formSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">  
<table width="624" border="0" align="center">  
<tr>	
<th width="419" height="35">Search Customer Here 
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

$conn = oci_connect("sabreena", "12345", "orcl");

if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

  
  
  
$strSQL = "SELECT * FROM CUSTOMER
WHERE (CUSTOMER_ID LIKE '%".$_GET["txtKeyword"]."%' ) OR (FIRST_NAME LIKE '%".$_GET["txtKeyword"]."%') OR (LAST_NAME LIKE '%".$_GET["txtKeyword"]."%')";
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse);  
?>  
<tr><td><div align="center"><table width="1340" height="129" border="1"></div></tr></td>
<tr bordercolor="#000000">  
<th width="157"> <div align="center">Customer ID  </div></th>
<th width="157"> <div align="center">First Name </div></th>  
<th width="157"> <div align="center">Last Name  </div></th>  
<th width="209"> <div align="center">Date of Birth </div></th>  
<th width="157"> <div align="center">Phone Number</div></th>  
<th width="157"> <div align="center">Email </div></th>
<th width="319"> <div align="center">Address</div></th>  
</tr>  
<br />
<?php  
while($result = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>  
<tr>  
<td><div  align="center"><?=$result["CUSTOMER_ID"];?></div></td>
<td><div  align="center"><?=$result["FIRST_NAME"];?></div></td>  
<td><div  align="center"><?=$result["LAST_NAME"];?></td>   
<td><div  align="center"><?=$result["DOB"];?></div></td>  
<td align="center"><?=$result["PHONE_NO"];?></td>
<td align="center"><?=$result["EMAIL"];?></td>
<td align="center"><?=$result["ADDRESS"];?></td>
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