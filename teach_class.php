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
          
          <li><a href="list_student.php">Class</a></li>
          <li><a href="">Student Attendance</a></li>
           <li><a href="">Report</a></li>
           
        </ul>
      </div>
      
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h2>Welcome <?php echo $_SESSION["lecturer_name"];?></h2><br><br>
        <h3 class="sub-header">Class </h3>
        <!--<form action="" method="post" class="form-horizontal">
        <div class="form-group">
          <label for="code_subject" class="col-sm-2 control-label">Subject Code</label>
          <div class="col-sm-5 ">
              <select class="form-control" name="code_subject" placeholder="Code">
                <option>Choose</option>
                <option value="BITP 1121 Programming Database">BITP 1121 Programming Database</option>
                <option value="BITP 1231 Database">BITP 1231 Database</option>
                
              </select>
          </div>
         </div>
           <div class="form-group">
          <label for="group_id" class="col-sm-2 control-label">Group</label>
          <div class="col-sm-2 ">
              <select class="form-control" name="group_id" placeholder="Code">
                <option>Choose</option>
                <option value="1 BITC S1G1">1 BITC S1G1</option>
                <option value="1 BITC S1G2">1 BITC S1G2</option>
                
              </select>
             </div>
         </div>
          <div class="form-group">
          <label for="type" class="col-sm-2 control-label">Upload Student</label>
          <div class="col-sm-5 ">
              <p><input name="csv" type="file" id="csv" class="form-control" class="col-sm-5"/> <br>
                 <input type="submit" name="Submit" value="SUBMIT" align="center"/>
            </div>
         </div>
          </form>-->
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
