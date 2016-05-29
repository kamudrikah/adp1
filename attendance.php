<?php
$conn = oci_connect('priya', '123', 'localhost/orcl');
session_start();

if(!isset($_SESSION['matric_no'])) header ('location: ');
$matric_no = $_SESSION['matric_no'];
$query = "select * from member where matric_no = '$matric_no'";
$stid = oci_parse($conn,$query);
$r = @oci_execute($stid);
 while($objResult = oci_fetch_array($stid,OCI_BOTH))  
{ 
	$sName="$objResult[1]";
}
$meeting_id = $_GET['meeting_id'];
$query = "select * from meeting where meeting_id= '$meeting_id'";
$stid = oci_parse($conn,$query);
$r = @oci_execute($stid);  

while($objResult = oci_fetch_array($stid,OCI_BOTH))  
{
	$meeting_name ="$objResult[1]";
    $meeting_date   ="$objResult[2]";	
}
?>
<?php
if(!empty($_POST['att'])) {
    foreach($_POST['att'] as $check) {
         $check; 

		//$SQL='Begin proce_attendance(:matric_no, :meeting_id,);end;';
		$SQL="insert into attendance(matric_no,meeting_id)values('".$check."','".$meeting_id."')";
$stmt=oci_parse($conn,$SQL);

		oci_execute($stmt);
		}
		Echo"<script language = 'Javascript'>
					alert('Attendance Taken !')
					location.href='view_attendance.php?meeting_id=<?php echo $objResult[0];?>'</script>";	
}

?>
<?php
	
	$result = "SELECT * FROM member";
	$stid = oci_parse($conn,$result);
                $r = @oci_execute($stid);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Meeting</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <tr>
	
  </tr>
    <div id="wrapper"><td>
	<img src="images/logo_ftmk.png" alt="" width="350" height="100" align="right"/>
	
	
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
				
	</li>
				<li>
                    <a href="mainmenu.php">
                        HOMEPAGE
                    </a>
                </li>
               
                <li>
                    <a href="view_attendance.php">View Attendance</a>
                </li>
                <li>
                    <a href="join.php">Attendance Details</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
		<h6><?php echo "USER:"; ?><?php echo $sName;?><h6>
            <div class="container-fluid">
                <div class="row">
        <!-- /#page-content-wrapper -->
		<h1></h1>
		
<form action="" method="post">

<legend><b>Attendance</b></legend>
<table width="346" border="0">
<tr>
    <td>DATE</td>
    <td>:</td>
    <td><input type="text" name="meeting_date" value="<?php echo $meeting_date;?>" id="meeting_date"></td>
  </tr>
<tr>
    <td>MEETING NAME</td>
    <td>:</td>
    <td><input type="text" name="meeting_id" value="<?php echo $meeting_name;?>" id="meeting_name" readonly></td>
  </tr>
  <tr>
  <p></p>
  <table width="500" align="left" border="2"> 
		<td width="100"><b>NAME</div></td>
		<td width="50"><b>MATRIC NUMBER</div></td>
		<td width="100"><b>ABSENT<div></td>
		
		<?php
		$i=0;
while($objResult = oci_fetch_array($stid,OCI_BOTH))  
{
	?>
	<tr> 
		<td><?php echo $objResult[1];?></td>
    	<td><?php echo $objResult[0];?></td>
    	<td><input type="checkbox" name="att[<?php echo $i ?>]" value="<?php echo $objResult[0] ?>"></td>
	</tr> 
 <?php
$i++; 
	}  
	?> 
	
	</table> 
	<br><input type="submit" name="submitButton" value="SUBMIT"></br>	
	<?php  
	oci_close($conn); 
	?>
	</table>
<br />
</table>
<legend><br>
<br />
</legend>
</form>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
