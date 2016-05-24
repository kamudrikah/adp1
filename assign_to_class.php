<?php
$conn = oci_connect('system','oracle','XE');
session_start();
//if(!isset($_SESSION['lecturer_id'])) header ('location: ');
$LECTURER_ID = $_GET['LECTURER_ID'];
$query = "select * from lecturer where lecturer_id = '$LECTURER_ID'";
$stid = oci_parse($conn,$query);
oci_execute($stid);
$row = oci_fetch_array($stid);
?>

<?php
$conn = oci_connect('system','oracle','XE');
$query1 = "select * from assign_class";
$stid1 = oci_parse($conn,$query1);
oci_execute($stid1);
$row1 = oci_fetch_array($stid1);
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
          <li><a href="mainpage.php">Register Subject</a></li>
          <li class="active"><a href="register_lecturer.php">Register Lecturer <span class="sr-only">(current)</span></a></li>
          <li><a href="assign_lecturer.php">Assign Lecturer</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h2 class="sub-header">Assign Lecturer</h2>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class="media-object" src="/image/ninja.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?php echo $row[1] ?></h4>
                <p>
                  <b>Lecturer ID:</b><?php echo $row[0] ?><br>
                  <b>Subject:</b><?php echo $row1[2] ?>
				  <br>
                  <b>Class:</b><?php echo $row1[3] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
<form action="assign.php" method="post" class="form-horizontal">
          <div class="form-group">
          
           <label for="exampleInputEmail1" class="col-sm-2 control-label">Lecturer ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lecturer_id" name="lecturer_id" value = "<?php echo $row['LECTURER_ID'];?>">
              
            </div>
              <label for="exampleInputEmail1" class="col-sm-2 control-label">Subject</label>
            <div class="col-sm-10">
              <select class="form-control" id="code_subject" name="code_subject">
                <option>Choose</option>
                <option value="BITP 3423">BITP 3423</option>
                <option value="BITP 1323">BITP 1323</option>
               </select>
            </div>
            <label for="details" class="col-sm-2 control-label">Assign to</label>
            <div class="col-sm-10">
              <select class="form-control" id="group_id" name="group_id">
                <option>Choose</option>
                <option value=""> -- BITC -- </option>
                <option value="1BITC S1G1">1BITC S1G1</option>
                <option value="1BITC S1G2">1BITC S1G2</option>
                <!--<option value="">2BITS S1G1</option>
                <option value="">2BITS S1G2</option>
                <option value="">3BITS S1G1</option>
                <option value="">3BITS S1G2</option>
                <option value=""> -- BITM -- </option>
                <option value="">1BITM S1G1</option>
                <option value="">1BITM S1G2</option>
                <option value="">2BITM S1G1</option>
                <option value="">2BITM S1G2</option>
                <option value="">3BITM S1G1</option>
                <option value="">3BITM S1G2</option>-->
              </select>
            </div>
            <br>
           
            
            <label for="exampleInputEmail1" class="col-sm-2 control-label">Sem</label>
            <div class="col-sm-10">
              <select class="form-control" id="sem" name="sem">
                <option>Choose</option>
                <option value="1">1</option>
                <option value="2">2</option>
               </select>
            </div>
            
            <label for="exampleInputEmail1" class="col-sm-2 control-label">Class Session</label>
            <div class="col-sm-10">
              <select class="form-control" id="class_session" name="class_session">
                <option>Choose</option>
                <option value="2013/2014">2013/2014</option>
                <option value="2014/2015">2014/2015</option>
               </select>
            </div>

          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
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
