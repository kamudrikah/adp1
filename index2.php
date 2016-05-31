<?php
$conn = oci_connect("system", "oracle", "XE");
$myblobid = $_GET['id'];
$query = 'SELECT ABSENCE_LETTER FROM ATTENDANCE WHERE ATTENDANCE_ID = :ATTENDANCE_ID';
$stmt = oci_parse ($conn, $query);
oci_bind_by_name($stmt, ':ATTENDANCE_ID', $myblobid);
oci_execute($stmt);
$arr = oci_fetch_array($stmt, OCI_ASSOC);
$result = $arr['ABSENCE_LETTER']->load();
header("Content-type: image/JPEG");
print $result;
oci_close($conn);
?>