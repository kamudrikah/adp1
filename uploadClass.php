<?php 
$conn = oci_connect('system','oracle','XE');
session_start();
?>
<?php if (isset($_GET['success'])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?> 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" action="ImportSchedule.php"> 

<div  align="center"><br /><br />

<h4>IMPORT STUDENT INFORMATION</h4><br /><br /><br />
<form action="" method="post" class="form-horizontal">
 <div class="form-group">
          <!-- <label for="code_subject" class="col-sm-2 control-label">Subject Code</label>
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
         </div>-->
         <br /><br /> 
Choose your file: <br /><br /> 
<input name="csv" type="file" id="csv" /> 
<input type="submit" name="Submit" value="SUBMIT" /> <br /><br />

</body>
</html>
<?php
//create connection

$conn = oci_connect('system','oracle','XE');

if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}

$deleterecords = "TRUNCATE TABLE STUDENT";
$objParse = oci_parse ($conn, $deleterecords);  
oci_execute ($objParse);

?>

<?php


if (isset($_FILES['csv']['size']) > 0) { 
//get the csv file 
$file = $_FILES['csv']['tmp_name']; 
$handle = fopen($file,"r"); 
$name = $_FILES['csv']['name'];
//loop through the csv file and insert into database 
do { 
//var_dump($_POST);
if (($handle = fopen($file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }

 $col1 = $col[0];
 $col2 = $col[1];
 $col3 = $col[2];
 $col4 = $col[3];
 $col5 = $col[4];
 $col6 = $col[5];
 $col7 = $col[6];


   
// SQL Query to insert data into DataBase
$query = "INSERT INTO STUDENT(STUD_BIL, MATRIC_NO, STUD_NAME, STUD_YEAR , STUD_COURSE , STUD_SESSION , STUD_FACULTY) VALUES('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."', '".$col6."', '".$col7."')";
$objParse = oci_parse($conn, $query);  
$objExecute = oci_execute($objParse);
}
} 
} while ($data = fgetcsv($handle,1000,",","'"));     // 
fclose($handle);
echo "CSV File has been successfully Imported. Click <a href='list_student.php'>here</a> to view.";


}
?> 