<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UTeM Attendance System</title>
</head>

<body>
<body bgcolor = #48D1CC>
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></a></p></center>
    	 </div>
           <form action="mainPage.php" method="post">
         <p align="right">
          <button type="submit" value="submit" class="btn btn-primary" >Home</button></p>
          </form>
			
		</div><br />
		<div class="content">
			<div class="container">
				<div class="main">
				
					<h2><center><b>SIGN UP FOR LECTURER</b></center>
					</h2>
               <table border="0" style="border-top:solid; border-bottom:solid; border-left:none; border-right:none; border-width:8px;" width="100%">
                    <tr>
                    <td width="30%" style="background-color:#eeeeee" align="center" word-spacing:"3em">
                    <table border="0">
                    <form action="login.php" method="POST">
                    <tr style="height:20px">
                    <td align="right">Lecturer ID</td><td><input type="text" name="lecturer_id" required /></td>
                    </tr>
                    <tr style="height:20px">
                    <td align="right">Full Name</td><td><input type="text" name="lecturer_name" required /></td>
                    </tr>
                     <tr style="height:20px">
                    <td align="right">Phone Number</td><td><input type="text" name="phoneNo" required /></td>
                    </tr>
                    <tr style="height:20px">
                    <td align="right">Position </td><td><input type="text" name="leturer_position" required /></td>
                    </tr>
                     <tr style="height:20px">
                    <td align="right">Email </td><td><input type="text" name="email" required /></td>
                    </tr>
                     <tr style="height:20px">
                    <td align="right">Password</td><td><input type="password" name="pword" required /></td>
                    </tr>
                    <br>
                    
                    <!-- <tr>
                     <td><form action="<?php echo $_SERVER['PHP_SELF']; ?>"
     		
             		method="POST" enctype="multipart/form-data">
					Image filename: <input type="file" name="lob_upload">
					<input type="submit" value="Upload"></form></td></tr>-->
                     <tr>
                    <td colspan="2" align="center" ><br /><input type="submit" value="Register" font-style="bold" class="btn"/></td>
					</tr>
                  
                    </form>
                    </table>	
                    </td>
                    </tr>
                    </table>   
</div>
</div>
</div>
</div>

</body>
</html>