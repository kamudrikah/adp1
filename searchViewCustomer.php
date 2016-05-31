<?php 
$conn = oci_connect('system','oracle','XE');
session_start();

if(!isset($_SESSION['lecturer_id'])) header ('location: ');
$LECTURER_ID = $_SESSION['lecturer_id'];
$sql = "select * from LECTURER WHERE LECTURER_ID = '".$LECTURER_ID."'";
$objParse = oci_parse ($conn,$sql);
oci_execute ($objParse, OCI_DEFAULT);
while ($test = oci_fetch_assoc ($objParse))
{	
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="file:///C|/xampp/htdocs/favicon.ico">

  <title>UTeM Attendance System</title>
 
  <!-- Bootstrap core CSS -->
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
         
         <li>  </li>
       
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container-fluid">
    <div class="row">
      
     <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          
          <li><a href="searchViewCustomer.php">Class</a></li>
          <li><a href="student_attendance.php">Student Attendance</a></li>
           <li><a href="blobins.php">Upload</a></li>
           
        </ul>
      </div>
      
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h2>Welcome <?php echo $_SESSION["lecturer_name"];?></h2><br><br>
      
        <form class="form-horizontal" name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>"> 
       
        <div class="form-group">
            <label for="exampleInputEmail1" class="col-sm-2 control-label">Search Student Here</label>
          <div class="col-sm-5">
              <input type="text" name="txtKeyword" id="txtKeyword" class="form-control" placeholder=" "/><input  type="submit" value="Search">
           
          </div>
</form>   
<br />
</div>

  
<?php
if(isset($_GET["txtKeyword"])){
if($_GET["txtKeyword"] != "")  
{  
if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

 
$strSQL = "SELECT * FROM STUDENT 
WHERE (MATRIC_NO LIKE '%".$_GET["txtKeyword"]."%' ) OR (STUD_NAME LIKE '%".$_GET["txtKeyword"]."%') OR (STUD_BIL LIKE '%".$_GET["txtKeyword"]."%') OR (STUD_COURSE LIKE '%".$_GET["txtKeyword"]."%') OR (STUD_YEAR LIKE '%".$_GET["txtKeyword"]."%') OR (STUD_FACULTY LIKE '%".$_GET["txtKeyword"]."%')";
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse);  
?> 
 
<table width="941" border="1" align="center"> 
<tr bordercolor="#000000">  
<th width="59"> <div align="center">No </div></th>
<th width="149"> <div align="center">Matric Number</div></th>  
<th width="239"> <div align="center">Name  </div></th>  
<th width="40"> <div align="center">Year </div></th>  
<th width="91"> <div align="center">Course</div></th>  
<th width="69"> <div align="center">Session </div></th>
<th width="61"> <div align="center">Group</div></th>
<th width="181"> <div align="center">Faculty</div></th>   
</tr>  
<br />
<?php  
while($result = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>  
<tr>  
<td><div align="center"><?=$result["STUD_BIL"];?></div></td>
<td><div align="center"><?=$result["MATRIC_NO"];?></div></td>  
<td><div align="center"><?=$result["STUD_NAME"];?></td>  
<td><div  align="center"><?=$result["STUD_YEAR"];?></td>  
<td><div  align="center"><?=$result["STUD_COURSE"];?></div></td>  
<td><div align="center"><?=$result["STUD_SESSION"];?></td>
<td><div align="center"><?=$result["STUD_GROUP"];?></td>
<td><div align="center"><?=$result["STUD_FACULTY"];?></td>
</tr>  
<?php 
}  
?>  
</table>  
<?php  
oci_close($conn);  
}}
       
?>     
  </div>
    </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="ie10-viewport-bug-workaround.js"></script>
 
</body>
</html>
