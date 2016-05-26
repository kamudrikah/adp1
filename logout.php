<?php
session_start();
session_unset();
session_destroy();

//header("location:home.php");

?>
<script type="text/javascript">
alert ("Thank you . Bye bye .");
</script>

<?php 
echo "<meta http-equiv=\"Refresh\" content=\"0;"."url=index.php\">";
exit();
?>