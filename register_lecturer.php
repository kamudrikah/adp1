

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

  <title>Admin - UTeM Attendance System<</title>

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

        <h2 class="sub-header">Register Lecturer</h2>
        <form action="registerlecturer.php" method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1" class="col-sm-2 control-label">Lecturer ID</label>
            <div class="col-sm-10">
              <input type="text" name="lecturer_id" class="form-control" placeholder="Lecturer ID" required />
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" name="lecturer_name" class="form-control" placeholder="Full Name" required />
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" name="phoneNo" class="form-control" placeholder="Phone Number" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Position</label>
            <div class="col-sm-10">
              <input type="text" name="lecturer_position" class="form-control" placeholder="Position" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" name="lecturer_email" class="form-control" placeholder="Email" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="pword" class="form-control" placeholder="Password" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-10">
              <input type="text" name="status" class="form-control" placeholder="lecturer/admin" required/>
            </div>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Upload picture</label>
            <div class="col-sm-10">
              <input type="file" name="fileToUpload" id="fileToUpload" accept="image/x-png, image/jpeg">
            </div>
          </div>-->
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
