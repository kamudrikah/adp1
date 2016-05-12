<?php 
include("file:///C|/Users/Personal/Desktop/Amira/function/userDetail.php");

//Catch iklan permohonan vendor quotation form data
include("file:///C|/Users/Personal/Desktop/Amira/include/config.php");

$sqlString = 'BEGIN catchIklanIDCounter(:accounts); END;';

$stmt = oci_parse ( $conn, $sqlString );
//Declare cursor
$result = oci_new_cursor($conn );

oci_bind_by_name ( $stmt,':accounts', $result, -1, OCI_B_CURSOR);

//Execute query
if (oci_execute ( $stmt )) {
	//Execute cursor
	oci_execute($result);  //Or you can return the cursor.
}
$objResult = oci_fetch_array($result);  
	if(!$objResult)  
	{  
		$iklan_id = NULL;
	}  
	else  
	{ 
		$iklan_id = $objResult[0];
	}

//Counter new ID PERMOHONAN

// if counter is not set, set to zero
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
}

// if button is pressed, increment counter
if(isset($_POST['btn_IklanBaru'])) {
	$counter = $_SESSION['counter'];
	
    $new_permohonan_id = $counter + $iklan_id;
} 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="file:///C|/Users/Personal/Desktop/Amira/images/tab_icon.ico" type="image/x-icon">
<link rel="stylesheet" href="file:///C|/Users/Personal/Desktop/Amira/css/A4.css">
<script src="file:///C|/Users/Personal/Desktop/Amira/js/lectureForm.js"></script>
</head>
<body>
<page size="A4">
<br>
<table border="0" width="794px" style="padding-right:15px; padding-top:10px;">
<tr>
<td align="right">
<button type="submit" onClick="location.href='StaffDetailIklan.php';" title="Kembali"><img src="file:///C|/Users/Personal/Desktop/Amira/images/back.png" width="15px" height="13px"></button>
</td>
</tr>
</table>
<form action="file:///C|/Users/Personal/Desktop/Amira/function/mohonIklanLecturer.php" method="POST">
<table border="0" width="794px" height="1122px" style=" font-family:'Times New Roman', Times, serif; font-size:12px;" class="tableNone">
<tr>
<td style="vertical-align:top">
<table border="0" width="100%">
<tr>
	<td width="50%" align="left"><img src="image/LogoJawi.png" width="180px" height="80px" style="padding-left:320px"></td><td><table frame="box" align="right" style="margin-right:15px"><tr><td width="175" height="30"><label style="font-size:10px; margin:20px"><b>UTeM(ISO)/PP/PK04/F3<?php echo $new_permohonan_id; ?>/</b></label></td></tr></table></td>
</tr>
</table>

<br>
<table border="0" width="750px" align="center" class="tableA4">
<tr>
<td align="center" colspan="2">
<label style="font-size:12px; margin:20px"><b>SURAT AMARAN</b></label>
</td>
</tr>
</table>
<table>
<h3>Kepada:</h3>
<h4>Nama : .....................................................................</h4>
<h4>No. Matrik : ..............................................................</h4>
<h4>Tahun/ Kursus / Semester : ......................................</h4>
<h4>Fakulti : ...................................................................</h4>
<br>
<br>
<h5>Saudara/i,</h5>
<h3>Amaran Tidak Hadir Kuliah/Tutorial/Amali Bagi Kursus ................................</h3>
<h4>Kod Mata Pelajaran : ................................</h4>

<br> 
<p style="font-size:14px;">Mengikut rekod kehadiran, adalah dimaklumkan bahawa saudara/i dapati tidak hadir ke kuliah/tutorial/amali dengan tanpa sebab-sebab yang munasabah pada tarikh-tarikh berikut : 

</table>
<br>
<br>
<table border="0" width="750px" align="center" class="tableA4">
<tr>
<td align="left" colspan="6"><table border="1" width="750px" align="center" class="tableA4" id="items">
  <tr>
    <td width="29">No</td>
    <td width="254">Items code</td>
    <td width="271">Description</td>
    <td width="61">Qty</td>
    <td width="101">Payment</td>
  </tr>
  <tr>
    <td width="29"> 1
      <input type="text" name="bilangan_1" value="1" style=" width:10px" hidden></td>
    <td width="254"><input type="text" name="item_1" style="width:100px" required/>
      <input type="button" onClick="addItem()" value="+"/>
      (x 10)</td>
    <td width="247"><textarea name="description_1" cols="20" required></textarea></td>
    <td width="57"><input type="number" min="0" style="width:37px; text-align:center" name="qty_1" id="qty_1" required></td>
    <td width="98"><select name="payment" required name="payment">
      <option value=""></option>
      <option value="KW01">KW01</option>
      <option value="KW02">KW02</option>
      <option value="KW03">KW03</option>
      <option value="KW08">KW08</option>
      <option value="KW09">KW09</option>
      </select></td>
  </tr>
</table></td>
</tr>
<tr>
<td align="left" width="500px"><br>
Tandatangan Pemohon : ______________________ <br>
Nama & Cap Jawatan&nbsp;&nbsp;:
</td><td align="left"> Tarikh : <label><u><?php echo date('d-m-y'); ?></u></label></td>
</tr>
<tr>
<td align="left" colspan="6"><br>
Ulasan Ketua Pusat Tanggungjawab:<br><br>
_____________________________________________________________________________________________________________________________<br>
_____________________________________________________________________________________________________________________________<br>
_____________________________________________________________________________________________________________________________<br>
_____________________________________________________________________________________________________________________________<br>
<br>
<br>
Permohonan : 
<br>
<br>

Tandatangan Ketua Pusat tanggungjawab :<br><br>
__________________________________________


<p align="right" style=" margin-right:10px"><input type="submit" class="btn" style="background-color:#036" name="btn_mohon"></p>
<p><input type="hidden" name="permohonan_id" value="<?php echo $new_permohonan_id; ?>" /><input type="hidden" name="oleh" value="<?php echo $id; ?>" /><input type="hidden" name="kod_bidang" value="<?php echo $kod_bidang; ?>" /></p>
</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</page>
</body>
</head>
</html>
