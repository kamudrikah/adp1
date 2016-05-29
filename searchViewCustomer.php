<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<!-- Optional theme -->
<link rel="shortcut icon" href="image/logoshortcut.jpg"/>
<link rel="stylesheet" href="css/bootstrap-theme.min.css"  />
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<title>ADP</title>
<link rel="stylesheet" href="layout.css" type="text/css">
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
<ul>
<li><a href="mainpageStaff.php">Home</a></li>
<li><a href="CustomerPage.php">Customer Details</a></li>
<li><a href="ProductPage.php">Our Products</a></li>
<li><a href="OrderPage.php">Product Orders</a></li>
<li><a href="mainpageStaff.php">Contact us</a></li>
<li><div align="right"><a href="loginStaff.php">Logout</a></div></li>
</ul>
</div>
<br />
<br />
<br />
<br />
<table width="65" border="0" align="left">
  <tr>
    <td width="59" height="73"><a href="CustomerPage.php">
    <div align="center"><img src="image/BackButton.png" width="50" height="50"></a></div></td>
  </tr>
</table>


<form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">  
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

$conn = oci_connect('sofea','sofea','oraclesofea');

if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

  
  
  
$strSQL = "SELECT * FROM CUSTOMER1 
WHERE (CUST_ID LIKE '%".$_GET["txtKeyword"]."%' ) OR (F_NAME LIKE '%".$_GET["txtKeyword"]."%') OR (L_NAME LIKE '%".$_GET["txtKeyword"]."%') OR (CITY LIKE '%".$_GET["txtKeyword"]."%') OR (STATE LIKE '%".$_GET["txtKeyword"]."%')";
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse);  
?> 
 
<tr><td><div align="center"><table width="1200" border="1"></div></tr></td>
<tr bordercolor="#000000">  
<th width="150"> <div align="center">Customer ID  </div></th>
<th width="150"> <div align="center">Firstname </div></th>  
<th width="150"> <div align="center">Lastname  </div></th>  
<th width="200"> <div align="center">Address </div></th>  
<th width="150"> <div align="center">Postcode</div></th>  
<th width="150"> <div align="center">City </div></th>
<th width="150"> <div align="center">State</div></th>
<th width="200"> <div align="center">Phone No</div></th>   
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
<td><?=$result["ADDRESS"];?></td>  
<td><div  align="center"><?=$result["POSTCODE"];?></div></td>  
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
