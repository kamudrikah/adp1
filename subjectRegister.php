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
			
		</div><br /><br />
		<div class="content">
			<div class="container">
				<div class="main">
				
					<h2><center><b>Registeration for Subject</b></center>
					</h2>
               <table border="0" style="border-top:solid; border-bottom:solid; border-left:none; border-right:none; border-width:8px;" width="100%">
                    <tr>
                    <td width="30%" style="background-color:#eeeeee" align="center" word-spacing:"3em">
                    <table border="0">
                    <form action="subject.php" method="POST">
                    <tr style="height:20px">
                    <td align="right">Subject Code </td><td><input type="text" name="code_subject" required /></td>
                    </tr>
                    <tr style="height:20px">
                    <td align="right">Subject Name</td><td><input type="text" name="subject_name" required /></td>
                    </tr>
                     <tr style="height:20px">
                    <td align="right">Type</td><td><select>
                      <option value="">Choose</option>
                    <option value="Compulsory">Compulsory</option>
  					<option value="Elective">Elective</option>
                  </select>
                    </td>
                   
                    </tr>
                    <br>
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