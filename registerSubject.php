<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> UTeM Attendance Student</title>
</head>
<body>
 <body bgcolor = "#48D1CC">
		<div>
        <div class="header">
      			<center><img src="image/header.jpg" width="1300" border="3"/></center>
    	 </div>
         
              
          </table>
         </div>-->
         <form action="mainPage.php" method="post">
         <p align="right">
          <button type="submit" value="submit" class="btn btn-primary" >Home</button></p>
          </form>
          
<form class="form-horizontal" action="registerSubject1.php" method="POST" >
<fieldset>

<!-- Form Name -->
<legend><h2>REGISTER SUBJECT</h2></legend>
<br />

<!-- Text input-->
 				<table border="0" style="border-top:solid; border-bottom:solid; border-left:none; border-right:none; border-width:8px;" width="100%">
                <tr>
               <td width="30%" style="background-color:#eeeeee" align="center">
               <table border="0">
 			   <tr style="height:20px">
               <td align="right">SUBJECT CODE :</td><td><input type="text" id="code_subject" class="form-control" name="code_subject" required /></td>
               </tr>
               <tr style="height:20px">
               <td align="right">SUBJECT NAME :</td><td><input type="text" id="subject_name" class="form-control" name="subject_name" required /></td>
               </tr>
               <tr style="height:20px">
               <td align="right">TYPE SUBJECT:</td><td>
                 <select  id="type_subject" name="type_subject">
                   <option>Choose </option>
                   <option value="Core">Core</option>
                   <option value="Elective">Elective</option>
                   <option value="University">University</option>
                 </select></td> </tr>
               </tr>
               <tr style="height:40px">
               <td colspan="2" align="center" ><br /><input type="submit" value="Submit" font-style="bold" class="btn"/></td>
			   </tr>
                    </fieldset>
                    </form>
                    </table>
                    </table>
                    


</body>
</html>