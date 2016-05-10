<?php
//create connection
$conn = oci_connect('system', 'oracle', 'XE');
if (!$conn) 
{
	die ("Connection failed:".oci_connect_error()) ;
}
else {
   print "Connected to Oracle!";
}
// Close the Oracle connection
oci_close($conn);
?>