<?php 
$conn = oci_connect('system','oracle','XE');
session_start();

$LECTURER_ID = $_SESSION['lecturer_id'];
$sql = "select * from LECTURER WHERE LECTURER_ID = '".$LECTURER_ID."'";
$stid = oci_parse ($conn,$sql);
oci_execute ($stid, OCI_DEFAULT);
$result = oci_fetch_assoc($stid);
 
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

  <?php
$LECTURER_ID = $_GET['LECTURER_ID'];
$conn = oci_connect('system','oracle','XE');
$sql = "select * from LECTURER WHERE LECTURER_ID = '".$LECTURER_ID."'";
$stid = oci_parse ($conn,$sql);
oci_execute ($stid, OCI_DEFAULT);
$result = oci_fetch_assoc($stid);
?>

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
          <li><a href="logout.php">Logout</a></li>
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
          <li><a href="uploadClass.php">Upload Student</a></li>
          <li><a href="assign_lecturer.php">Assign Lecturer</a></li>
          <li><a href="subjectUpdate.php">List Subject Registered</a></li>
           <li><a href="list_lecturer.php">List Lecturer</a></li>
            <li><a href="list_student.php">List Student</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="sub-header">Update Lecturer</h2>
        <form action="update_lect3.php" method="post" class="form-horizontal">
              <div class="form-group">
            <label for="matric_no" class="col-sm-2 control-label">Lecturer ID</label>
            <div class="col-sm-6">
              <input type="text" id="LECTURER_ID" class="form-control" name="LECTURER_ID" value="<?php echo $result['LECTURER_ID'];?>" readonly />
            </div>
          </div>
          <div class="form-group">
            <label for="stud_name" class="col-sm-2 control-label">Student Name</label>
            <div class="col-sm-6">
              <input type="text" id="LECTURER_NAME" class="form-control" name="LECTURER_NAME" value="<?php echo $result['LECTURER_NAME'];?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label for="phoneNo" class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-6">
              <input type="text" id="PHONENO" class="form-control" name="PHONENO" value="<?php echo $result['PHONENO'];?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label for="position" class="col-sm-2 control-label">Lecturer Position</label>
            <div class="col-sm-6">
             <input type="text" id="LECTURER_POSITION" class="form-control" name="LECTURER_POSITION" value="<?php echo $result['LECTURER_POSITION'];?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Lecturer Email</label>
            <div class="col-sm-6">
              <input type="text" id="LECTURER_EMAIL" class="form-control" name="LECTURER_EMAIL" value="<?php echo $result['LECTURER_EMAIL'];?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label for="pword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-6">
              <input type="text" id="PWORD" class="form-control" name="PWORD" value="<?php echo $result['PWORD'];?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-6">
              <input type="text" id="STATUS" class="form-control" name="STATUS" value="<?php echo $result['STATUS'];?>" />
            </div>
          </div>
         
                
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
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
