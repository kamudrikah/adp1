<!DOCTYPE html>
<html lang="en">
  <head>
   
   <title>UTeM Attendance Student </title>  

    
  </head>
  <body bgcolor = #48D1CC>
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></center>
    	 </div>
			
		</div><br />
 
<?php
session_start();
$CODE_SUBJECT=$_GET['CODE_SUBJECT'];
$conn = oci_connect('system','oracle','XE');
$sql ="select * from SUBJECT where CODE_SUBJECT='".$CODE_SUBJECT."'";
//print($sql);
$stid = oci_parse($conn,$sql);
oci_execute($stid);
$result=oci_fetch_array($stid);

?>
 
  <div class="container">
  <table border="0" style="border-top:solid; border-bottom:solid; border-left:none; border-right:none; border-width:8px;" width="100%" align="center">
     <form role="form" action="subjectUpdate3.php?CODE_SUBJECT=<?=$_GET['CODE_SUBJECT'];?>"method="post">
   
    
    <div class="form-group">
      <label for="CODE_SUBJECT" >CODE SUBJECT:</label> 
        <input class="form-control" id="CODE_SUBJECT" type="text" name="CODE_SUBJECT" value="<?php echo $result['CODE_SUBJECT'];?>" readonly><br><br>
      </div>

     <div class="form-group">
      <label for="SUBJECT_NAME" >SUBJECT NAME:</label> 
       <input class="form-control" id="SUBJECT_NAME" type="text" name="SUBJECT_NAME" value="<?php echo $result['SUBJECT_NAME'];?>"><br><br>
      </div>
    
    <div class="form-group"> 
       <label for="type_subject" class="col-sm-2 control-label">SUBJECT TYPE</label>
     <!-- <input type="text" class="form-control" id="TYPE_SUBJECT" name="TYPE_SUBJECT" value="<?php echo $result['TYPE_SUBJECT'];?>">-->
     		  <select class="form-control" id="TYPE_SUBJECT" name="TYPE_SUBJECT" value="<?php echo $result['TYPE_SUBJECT'];?>">
                <option></option>
                <option value="Course Core Subject">Course Core Subject</option>
                <option value="Program Core Subject">Program Core Subject</option>
                <option value="University Subject">University Subject</option>
              </select>
              <br><br>
    </div>

     <br>
     <input id="submit" name="submit" type="submit" value="SAVE" class="btn btn-primary btn-lg pull-right">
     
    
   </form>
</table>
</div>
<?php  
oci_close($conn);  
?> 
</body>
</html>






