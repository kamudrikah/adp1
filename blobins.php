<?php
if (!isset($_FILES['lob_upload'])) {
// If nothing uploaded, display the upload form
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
Image filename: <input type="file" name="lob_upload">
<input type="submit" value="Upload">
</form>

<?php
} // closing brace from 'if' in earlier PHP code
else {
  // else script was called with data to upload

$conn = oci_connect('system', 'oracle', 'XE');

// Insert the BLOB from PHP's temporary upload area
  $lob = oci_new_descriptor($conn, OCI_D_LOB);
  $stmt = oci_parse($conn, 'insert into attendance (absence_letter) '
        .'values(empty_blob()) returning absence_letter into :blobdata');
  oci_bind_by_name($stmt, ':blobdata', $lob, -1, OCI_B_BLOB);
  oci_execute($stmt, OCI_DEFAULT);  // Note OCI_DEFAULT
  
if ($lob->savefile($_FILES['lob_upload']['tmp_name'])) {
    oci_commit($conn);
    echo "BLOB uploaded";
  }
  else {
    echo "Couldn't upload BLOB\n";
  }
  $lob->free();
  oci_free_statement($stmt);
}

?>