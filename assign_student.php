<?php
$conn = oci_connect('system','oracle','XE');
session_start();
//if(!isset($_SESSION['lecturer_id'])) header ('location: ');
//if($_GET['LECTURER_ID'] == ''){
	//header('Location: ');
//}else{
	//$LECTURER_ID = $_GET['LECTURER_ID'];
//}
?>
<?php
//$query = "select * from  student JOIN ASSIGN_CLASS ON LECTURER.LECTURER_ID = ASSIGN_CLASS.LECTURER_ID where lecturer.lecturer_id = '$LECTURER_ID'";
//$stid = oci_parse($conn,$query);
//oci_execute($stid);
//
// FECTH STUDENT
$querystudent = "select * from student";
$stidStudent = oci_parse($conn,$querystudent);
oci_execute($stidStudent);

// FECTH SUBJECT
$querySubject = "select * from subject";
$stidSubject = oci_parse($conn,$querySubject);
oci_execute($stidSubject);
//
//// FECTH GROUPNAME
$queryGroup = "select * from GROUPNAME";
$stidGroup = oci_parse($conn,$queryGroup);
oci_execute($stidGroup);
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
          <li><a href="index.php">Logout</a></li>
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
          <li class="active"><a href="assign_lecturer.php">Assign Lecturer <span class="sr-only">(current)</span></a></li>
          <li><a href="student_class.php">Assign Student</a></li>
          <li><a href="subjectUpdate.php">List Subject </a></li>
           <li><a href="list_lecturer.php">List Lecturer</a></li>
            <li><a href="list_student.php">List Student</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="sub-header">Assign Subject</h2>
      <form action="class_assign.php" method="post" class="form-horizontal">
             
             
        <label for="details" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <select class="form-control" id="stud_bil" name="stud_bil">
                <option>Choose</option>
                <?php
				while($row = oci_fetch_array($stidStudent)){
					echo "<option value='".$row['STUD_BIL']."'>".$row['STUD_BIL']." - ".$row['STUD_NAME']."</option>";
				}
				?>
              </select>
            </div>


              <label for="exampleInputEmail1" class="col-sm-2 control-label">Code Subject</label>
            <div class="col-sm-10">
              <select class="form-control" id="code_subject" name="code_subject">
                <option>Choose</option>
                <?php
				while($row = oci_fetch_array($stidSubject)){
					echo "<option value='".$row['CODE_SUBJECT']."'>".$row['CODE_SUBJECT']." - ".$row['SUBJECT_NAME']."</option>";
				}
				?>
               </select>
            </div>
            
              <label for="exampleInputEmail1" class="col-sm-2 control-label">Sem</label>
            <div class="col-sm-10">
              <select class="form-control" id="sem_stud" name="sem_stud">
                <option>Choose</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="2">3</option>
                <option value="2">4</option>

               </select>
            </div>
            
                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Class Session</label>
            <div class="col-sm-10">
              <select class="form-control" id="session_stud" name="session_stud">
                <option>Choose</option>
                <option value="2013/2014">2013/2014</option>
                <option value="2014/2015">2014/2015</option>
                <option value="2015/2016">2015/2016</option>
               </select>
            </div>
            
            
           
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            	<input type="hidden" name="lecturer_id" value="<?= $LECTURER_ID; ?>">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
        

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
