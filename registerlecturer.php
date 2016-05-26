<?php
$conn = oci_connect('psm', 'psm', 'XE');

session_start();

if(!isset($_SESSION['ID_CARD'])) header ('location: ');
$ID_CARD = $_SESSION['ID_CARD'];
$sql = "select * from employee WHERE ID_CARD = '$ID_CARD'";
$objParse = oci_parse ($conn,$sql);
oci_execute ($objParse, OCI_DEFAULT);
while ($test = oci_fetch_assoc ($objParse))
{

?>

<div class="container" align="right">
       <h4 class = "tagline"> WELCOME <?php echo $test ["USERNAME"] ?> </h4>
<?php
}

<?php 
$conn = oci_connect('system','oracle','XE');
session_start();

if(!isset($_SESSION["LECTURER_ID"])) header ('location: ');
$LECTURER_ID = $_SESSION["LECTURER_ID"];
$sql = "select * from LECTURER WHERE LECTURER_ID = '$LECTURER_ID'";
$objParse = oci_parse ($conn,$sql);
oci_execute ($objParse, OCI_DEFAULT);
while ($test = oci_fetch_assoc ($objParse))
{	
 
?>