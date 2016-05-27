
<?php  
$conn = oci_connect('system','oracle','XE');

 ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];    $massage= "";
$curs = oci_new_cursor($conn);
$stid = oci_parse($conn, "begin listlecturer_proc(:rc); end;");
oci_bind_by_name($stid, ":rc", $curs, -1, OCI_B_CURSOR);
oci_execute($stid);

oci_execute($curs);  
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
  <link rel="icon" href="../../favicon.ico">

  <title>Admin - UTeM Attendance System</title>

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
        <a class="navbar-brand" href="#">ADP - Administrator</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
         <ul class="nav nav-sidebar">
          <li><a href="mainpage.php">Register Subject</a></li>
          <li class="active"><a href="register_lecturer.php">Register Lecturer <span class="sr-only">(current)</span></a></li>
          <li><a href="assign_lecturer.php">Assign Lecturer</a></li>
          <li><a href="subjectUpdate.php">List Subject Registered</a></li>
           <li><a href="list_lecturer.php">List Lecturer</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="sub-header">Assign Lecturer</h2>
        <div class="table-responsive">
          <?php  

 ?>
 
<table width="1020" border="1" align="left">  
<tr>
<th width="111"> <div align="center">Lecturer ID</div></th>    
<th width="179"> <div align="center">Lecturer Name </div></th>  
<th width="140"> <div align="center">Phone Number</div></th>  
   
<th width="187"> <div align="center">Lecturer Position</div></th>  
<th width="148"> <div align="center">Email</div></th>  
  
<th width="128"> <div align="center">Status </div></th> 

</tr> 

<?php  
while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
$lecturer_id = $row['LECTURER_ID'];
 ?>  
	 
<tr>  
<td><div align="center"><?php echo $row['LECTURER_ID'];?></div></td>  
<td><div align="center"><?php echo $row['LECTURER_NAME'];?></div></td>  
<td><div align="center"><?php echo $row['PHONENO'];?></div></td>  
<td><div align="center"><?php echo $row['LECTURER_POSITION'];?></div></td>  
<td><div align="center"><?php echo $row['LECTURER_EMAIL'];?></div></td>   
<td><div align="center"><?php echo $row['STATUS'];?></div></td>   
 <td width="81" align="center"><a href="assign_to_class.php?LECTURER_ID=<?php echo $lecturer_id?>">ASSIGN</a></td>
  
</tr>  
<?php  
}
?> 
</table> 
<?php
oci_free_statement($stid);
oci_free_statement($curs);
oci_close($conn);
				
 ?>   
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../ie10-viewport-bug-workaround.js"></script>
</body>
</html>
