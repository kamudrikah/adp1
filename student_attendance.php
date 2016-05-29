<?php
// $conn = oci_connect('system','oracle','XE');
// session_start();

// if(!isset($_SESSION['lecturer_id'])) header ('location: ');
// $LECTURER_ID = $_SESSION['lecturer_id'];
// $sql = "select * from LECTURER WHERE LECTURER_ID = '".$LECTURER_ID."'";
// $objParse = oci_parse ($conn,$sql);
// oci_execute ($objParse, OCI_DEFAULT);
// while ($test = oci_fetch_assoc ($objParse))
// {
// }
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

          <li>WELCOME <?php echo $_SESSION["lecturer_name"];?>  </li>

          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class="active"><a href="uploadClass.php"> <span class="sr-only">(current)</span></a></li>
          <li><a href="">Upload Class</a></li>
          <li><a href="">Class</a></li>
          <li><a href="">Student Attendance</a></li>
          <li><a href="">Report</a></li>

        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h3 class="sub-header">Student Attendance </h3>
        <form action="#" method="post">
          <div class="well">
          Select Class:
          <select name="class">
            <option> -- Choose -- </option>
            <option>1 BITD S1G1</option>
            <option>1 BITD S1G2</option>
            <option>2 BITD S1G1</option>
            <option>2 BITD S1G2</option>
            <option>3 BITD S1G1</option>
            <option>3 BITD S1G2</option>
          </select>
          <button type="submit" class="btn btn-primary btn-xs">Display</button>
        </div>
        </form>
        <h5 class="sub-header">1 BITD S1G1</h5>
        <form class="" action="#" method="post">
          <table class="table table-striped table-bordered">
            <tr>
              <td rowspan="2">#</td>
              <td rowspan="2">Matriks No</td>
              <td rowspan="2">Name</td>
              <td colspan="2">Week 1</td>
              <td colspan="2">Week 2</td>
              <td colspan="2">Week 3</td>
              <td colspan="2">Week 4</td>
              <td colspan="2">Week 5</td>
              <td colspan="2">Week 6</td>
              <td rowspan="2">Action</td>
            </tr>
            <tr>
              <td>Lecture</td><td>Lab</td>
              <td>Lecture</td><td>Lab</td>
              <td>Lecture</td><td>Lab</td>
              <td>Lecture</td><td>Lab</td>
              <td>Lecture</td><td>Lab</td>
              <td>Lecture</td><td>Lab</td>
            </tr>
            <tr>
              <td>1</td>
              <td>B031410315</td>
              <td>Ku Ahmad Mudrikah Ku Mukhtar</td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>B031410335</td>
              <td>Seman bin Senin</td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1" checked></td>
              <td><input type="checkbox" name="week1lec" value="1"></td>
              <td><input type="checkbox" name="week1lec" value="1"></td>
              <td><input type="checkbox" name="week1lec" value="1"></td>
              <td><a href="#">Upload</a></td>
            </tr>
          </table>
          <button type="submit" name="Save" class="btn btn-primary pull-right">Save</button>
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
