<!DOCTYPE html>
<html lang="en">
  <head>
   
   <title>UTeM Attendance Student </title>  

    
  </head>
  <body bgcolor = "#48D1CC">
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></center>
    	 </div>
			
		</div><br />
 
<?php
session_start();
$MATRIC_NO=$_GET['MATRIC_NO'];
$conn = oci_connect('system','oracle','XE');
$sql ="select * from STUDENT where MATRIC_NO='".$MATRIC_NO."'";
//print($sql);
$stid = oci_parse($conn,$sql);
oci_execute($stid);
$result=oci_fetch_array($stid);

?>
 
  <form role="form" action="updateattnd3.php?MATRIC_NO=<?=$_GET['MATRIC_NO'];?>" method="post">
  <table border="0" style="border-top:solid; border-bottom:solid; border-left:none; border-right:none; border-width:8px;" width="100%">
  <tr>
  <td width="30%" style="background-color:#eeeeee" align="center">
  <table border="0">
    
   <tr style="height:20px">
   <td align="right">MATRIC NO:</td><td><input type="text" id="MATRIC_NO" class="form-control" name="MATRIC_NO" 
   value="<?php echo $result['MATRIC_NO'];?>" readonly /></td>
   </tr>
   
    <tr style="height:20px">
   <td align="right">STUDENT NAME:</td><td><input type="text" id="STUD_NAME" class="form-control" name="STUD_NAME" 
   value="<?php echo $result['STUD_NAME'];?>" /></td>
   </tr>
    
    <tr style="height:20px">
   <td align="right">PHONE:</td><td><input type="text" id="PHONE" class="form-control" name="PHONE" 
   value="<?php echo $result['PHONE'];?>"/></td>
   </tr>
   
    <tr style="height:20px">
   <td align="right">IDENTITY CARD:</td><td><input type="text" id="IC" class="form-control" name="IC" 
   value="<?php echo $result['IC'];?>"/></td>
   </tr>
   
    <tr style="height:20px">
   <td align="right">ADDRESS:</td><td><input type="text" id="ADDRESS" class="form-control" name="ADDRESS" 
   value="<?php echo $result['ADDRESS'];?>"/></td>
   </tr>
   
   <tr style="height:20px">
   <td align="right">EMAIL:</td><td><input type="text" id="EMAIL" class="form-control" name="EMAIL" 
   value="<?php echo $result['EMAIL'];?>"/></td>
   </tr>
    
   <tr style="height:20px">
   <td align="right">COURSE CLASS:</td><td><input type="text" id="COURSE_CLASS" class="form-control" name="COURSE_CLASS" 
   value="<?php echo $result['COURSE_CLASS'];?>"/></td>
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






