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
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
          <li ><a href="mainpage.php">Register Subject </a></li>
          <li><a href="register_lecturer.php">Register Lecturer </a></li>
          <li><a href="uploadClass.php">Upload Student</a></li>
          <li ><a href="assign_lecturer.php">Assign Lecturer </a></li>
          <li class="active"><a href="student_class.php">Assign Student <span class="sr-only">(current)</span></a></li>
          <li><a href="subjectUpdate.php">List Subject </a></li>
           <li><a href="list_lecturer.php">List Lecturer</a></li>
            <li><a href="list_student.php">List Student</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="sub-header">Add New Student</h2>
        <form action="student.php" method="post" class="form-horizontal">
        
          <div class="form-group">
            <label for="matric_no" class="col-sm-2 control-label">Matric Number</label>
            <div class="col-sm-6">
              <input type="text" name="matric_no" class="form-control" placeholder="Matric Number">
            </div>
          </div>
          <div class="form-group">
            <label for="stud_name" class="col-sm-2 control-label">Student Name</label>
            <div class="col-sm-6">
              <input type="text" name="stud_name" class="form-control" placeholder="Full Name">
            </div>
          </div>
          <div class="form-group">
            <label for="stud_group" class="col-sm-2 control-label">Group Class</label>
            <div class="col-sm-4">
             <input type="text" name="stud_year" class="form-control" placeholder="Year">
             <input type="text" name="stud_course" class="form-control" placeholder="Course">
             <input type="text" name="stud_session" class="form-control" placeholder="Session">
             <input type="text" name="stud_group" class="form-control" placeholder="Group">
           </div>
           </div>
                        
          <div class="form-group">
            <label for="stud_faculty" class="col-sm-2 control-label">Faculty</label>
            <div class="col-sm-4">
              <select class="form-control" id="stud_faculty" name="stud_faculty" placeholder="Code">
                <option>Faculty</option>
                <option value="FTMK">FTMK</option>
                <option value="FKP">FKP</option>
                <option value="FKEKK">FKEKK</option>
                <option value="FKE">FKE</option>
                <option value="FTK">FTK</option>
                <option value="FKM">FKM</option>
                <option value="FPTT">FPTT</option>
              </select>
            </div>
          </div>	
           <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
<form class="form-horizontal" method="POST">
<h2 class="sub-header">List Student</h2>
<h4>Class : </h4>
<?php  
$conn = oci_connect('system','oracle','XE');

 ob_start();
    $current_file=$_SERVER['SCRIPT_NAME'];
    $massage= "";
	

$curs = oci_new_cursor($conn);
$stid = oci_parse($conn, "begin liststudent_proc(:rc); end;");
oci_bind_by_name($stid, ":rc", $curs, -1, OCI_B_CURSOR);
oci_execute($stid);

oci_execute($curs);  

$curs2 = oci_new_cursor($conn);
$stid2 = oci_parse($conn, "begin totalstudent_proc(:rc); end;");
oci_bind_by_name($stid2, ":rc", $curs2, -1, OCI_B_CURSOR);
oci_execute($stid2);

oci_execute($curs2); 
?>
            
<?php 
while (($row2 = oci_fetch_array($curs2, OCI_ASSOC+OCI_RETURN_NULLS)) != false) { 
?>

<h5>Total Student <?php echo $row2['TOTAL_STUDENT'];?></h5> 

<?php  
}
 ?>
 <table width="1000" border="1" align="center">  
<tr>
<!--<th width="50"> <div align="center">No.</div></th> -->
<th width="126"> <div align="center">Matric Number</div></th>    
<th width="351"> <div align="center">Student Name </div></th>
<th width="50"> <div align="center">Year </div></th>
<th width="50"> <div align="center">Course </div></th>
<th width="50"> <div align="center">Session </div></th> 
<th width="50"> <div align="center">Group </div></th>  
<th width="50"> <div align="center">Faculty</div></th>  
<th width="131"> <div align="center">Action </div></th> 


</tr> 

<?php  
while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
 ?>  
	 
<tr>  
 
<td><div align="center"><?php echo $row['MATRIC_NO'];?></div></td>  
<td><div align="center"><?php echo $row['STUD_NAME'];?></div></td> 
<td><div align="center"><?php echo $row['STUD_YEAR'];?></div></td>
<td><div align="center"><?php echo $row['STUD_COURSE'];?></div></td>
<td><div align="center"><?php echo $row['STUD_SESSION'];?></div></td>
<td><div align="center"><?php echo $row['STUD_GROUP'];?></div></td>
<td><div align="center"><?php echo $row['STUD_FACULTY'];?></div></td>
<td><div align="center"><a href="student_update2.php?MATRIC_NO=<?=$row['MATRIC_NO'];?>">UPDATE</a>||<a href="student_delete.php?MATRIC_NO=<?=$row['MATRIC_NO'];?>">DELETE</a></td>
  
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
