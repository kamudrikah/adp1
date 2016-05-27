
<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

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
         
         <li>WELCOME <?php echo $test ["LECTURER_ID"] ?></li>
       
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      
    
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h3 class="sub-header">Class </h3>
        <form action="subject.php" method="post" class="form-horizontal">
        <div class="form-group">
          <label for="code_subject" class="col-sm-2 control-label">Subject Code</label>
          <div class="col-sm-2 ">
              <select class="form-control" name="code_subject" placeholder="Code">
                <option>Choose</option>
                <option value="BITP 1121 Programming Database">BITP 1121 Programming Database</option>
                <option value="BITP 1231 Database">BITP 1231 Database</option>
                
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="subject_name" class="col-sm-2 control-label">Group</label>
            <div class="col-sm-2">
              <select class="form-control" name="groupname" placeholder="Code">
                <option>Choose</option>
                <option value="1 BITC S1G1">1 BITC S1G1</option>
                <option value="1 BITC S1G2">1 BITC S1G2</option>
                
              </select>
            </div>
          </div>
          <div class="form-group">
            <p>
              <label for="type_subject" class="col-sm-2 control-label" placeholder="Upload Class"></label>
            </p>
            <div class="col-md-5">
            <p><input name="csv" type="file" id="csv" class="form-control"/>
              <input  type="submit" name="Submit" value="SUBMIT" align="center"/>
            </p>
            </div>
            
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Register</button>
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
