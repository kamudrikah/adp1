<?php 
$conn = oci_connect('system','oracle','XE');
session_start();

if(!isset($_SESSION['lecturer_id'])) header ('location:');
$LECTURER_ID = $_SESSION['LECTURER_ID'];
$query = "select * from lecturer where LECTURER_ID ='$LECTURER_ID'";
$stid = oci_parse($conn, $query);
$r = @oci_execute($stid);
while($objResult = oci_fetch_array($stid,OCI_BOTH))
{
	$LECTURER_ID="$objResult[0]";
	$lecturer_name="$objResult[1]";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UTeM Attendance System</title>
</head>

<body>
<body bgcolor = #48D1CC>
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></a></p></center>
    	 </div>
			
		</div><br />
		<div bgcolor="#ADD8E6">
		  
	    </div>
        
        
		<div class="content">
			<div class="container">
				<div class="main">
				
					<h1>
					  <right><b>Welcome to Attendance System,</b></right></h1>
                    
               <table border="0" style="border-top:solid; border-bottom:solid; border-left:none; border-right:none; border-width:8px;" width="100%">
                    <tr>
                    <td width="18%" style="background-color:#ecc6d9" align="right " word-spacing:"3em">
                    <table border="0">
                    
                    <form action="login.php" method="POST">
                    <tr style="height:40px">
                    <!--<tr>
                    <td align="right">Image</td><td><input type="" name="pword"readonly /></td>
                    </tr>-->
                    <td width="131" align="right">Lecturer ID : <?php echo $LECTURER_ID;?></td>
                    </tr>
                    <tr>
                    <td align="right">Name: <?php echo $lecturer_name;?></td>
                    </tr>
                    
                     <tr>
                    <td colspan="2" align="center" ><br /><input type="submit" value="Sign Out" font-style="bold" class="btn"/></td>
					</tr>
                    </form>
                    </table>	
                    </td>
                   
                    <td width="13%" align="center"><a href="student.php"><input type="submit" value="Add Student" font-style="bold" class="btn"  /><br /></td>
					
                    <td width="69%" style="background-color:#c6538c" align="left" word-spacing:"3em">
                    <p><a href="updateattnd.php">BITD</a></p>
                      </td>
                   	
                    
                    </tr>
                    </table>   
</div>
</div>
</div>
</div>

</body>
</html>