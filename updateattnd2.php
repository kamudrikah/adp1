<!DOCTYPE html>
<html lang="en">
  <head>
   
   <title>UTeM Attendance Student </title>  

    
  </head>
  <body bgcolor = "#f2f2f2">
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></center>
    	 </div>
			
		</div><br />
 
<?php
session_start();
$LECTURER_ID=$_GET['LECTURER_ID'];
$conn = oci_connect('system','oracle','XE');
$sql ="select lecturer_id, lecturer_name, phoneNo, lecturer_position, lecturer_email, pword, status from LECTURER_ID where LECTURER_ID='".$LECTURER_ID."'";
//print($sql);
$stid = oci_parse($conn,$sql);
oci_execute($stid);
$result=oci_fetch_array($stid);

?>
 
  <form role="form" action="updateattnd3.php?LECTURER_ID=<?=$_GET['LECTURER_ID'];?>" method="post">
  <table border="0" style="border-top:solid; border-bottom:solid; border-left:none; border-right:none; border-width:8px;" width="100%">
  <tr>
  <td width="30%" style="background-color:#eeeeee" align="center">
  <table border="0">
    
   <tr style="height:20px">
   <td align="right">LECTURER ID:</td><td><input type="text" id="LECTURER_ID" class="form-control" name="LECTURER_ID" 
   value="<?php echo $result['LECTURER_ID'];?>" readonly /></td>
   </tr>
   
    <tr style="height:20px">
   <td align="right">LECTURER NAME:</td><td><input type="text" id="LECTURER_NAME" class="form-control" name="LECTURER_NAME" 
   value="<?php echo $result['LECTURER_NAME'];?>" /></td>
   </tr>
    
    <tr style="height:20px">
   <td align="right">PHONE NUMBER:</td><td><input type="text" id="PHONENO" class="form-control" name="PHONENO" 
   value="<?php echo $result['PHONENO'];?>"/></td>
   </tr>
   
    <tr style="height:20px">
   <td align="right">LECTURER POSITION:</td><td><input type="text" id="LECTURER_POSITION" class="form-control" name="LECTURER_POSITION" 
   value="<?php echo $result['LECTURER_POSITION'];?>"/></td>
   </tr>
   
    <tr style="height:20px">
   <td align="right">LECTURER EMAIL:</td><td><input type="text" id="LECTURER_EMAIL" class="form-control" name="LECTURER_EMAIL" 
   value="<?php echo $result['LECTURER_EMAIL'];?>"/></td>
   </tr>
   
    <tr style="height:20px">
   <td align="right">PASSWORD:</td><td><input type="text" id="PWORD" class="form-control" name="PWORD" 
   value="<?php echo $result['PWORD'];?>"/></td>
   </tr>
   
   <tr style="height:20px">
   <td align="right">STATUS:</td><td><input type="text" id="STATUS" class="form-control" name="STATUS" 
   value="<?php echo $result['STATUS'];?>"/></td>
   </tr>
    
   <tr style="height:40px">
   <td colspan="2" align="center" ><br /><input type="submit" value="SAVE" font-style="bold" class="btn"/></td>
   </tr>
 	<br>
     
   </form>
</table>
</div>
<?php  
oci_close($conn);  
?> 
</body>
</html>






