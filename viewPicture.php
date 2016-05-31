<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
		<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
</head>
<body>
		<div id="blueimp-gallery" class="blueimp-gallery">
									<!-- The container for the modal slides -->
									<div class="slides"></div>
									<!-- Controls for the borderless lightbox -->
									<h3 class="title"></h3>
									<a class="prev">‹</a>
									<a class="next">›</a>
									<a class="close">×</a>
									<a class="play-pause"></a>
									<ol class="indicator"></ol>
									<!-- The modal dialog, which will be used to wrap the lightbox content -->
									<div class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" aria-hidden="true">&times;</button>
													<h4 class="modal-title"></h4>
												</div>
												<div class="modal-body next"></div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default pull-left prev">
														<i class="glyphicon glyphicon-chevron-left"></i>
														Previous
													</button>
													<button type="button" class="btn btn-primary next">
														Next
														<i class="glyphicon glyphicon-chevron-right"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div> 
<?php  
 $conn = oci_connect('system','oracle','XE');	
$qu = oci_parse($conn,"select absence_letter from attendance");
oci_execute($qu);
								
while(($result = oci_fetch_array($qu,OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
								 
$issid=$result["absence_letter"];
$title ="title";
?>	
<a type="hidden" href="index2.php?id=<?php echo $issid;?>" title="<?php echo $title; ?>"data-gallery>
<img src="index2.php?id=<?php echo $issid;?>"  class="img-responsive" 
alt="<?php echo $title; ?>" width="150" height="150">
</a>

<?php
}
?>
				
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
		</div>
	</div>
</div>
									
</body>
</html>
<!--
 -->