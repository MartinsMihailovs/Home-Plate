<?php
	$page_title = "Exterior Gallery :: Home Plate Seattle";
	$page_description = "";
	$fb_title = "";
	$fb_description = "";
	$section = "gallery";
	include('inc/header.php');
?>

<div role="main" id="content" class="clearfix">
	<div class="mainrow">
	<?php include('inc/sidebar-gallery.php'); ?>
	
	<section class="extended col clearfix">
		<h2>Exterior Images</h2>
		<p>Click on any image to enlarge</p>
		
		<div class="gal">
			<a href="img/bug.png" class="fancybox"><img src="http://placehold.it/150x150" alt="" /></a>
			<span>Lobby Lounge</span>
		</div>

		<div class="gal">
			<img src="img/placeholder.jpg" alt="" />
			<span>Lobby Lounge</span>
		</div>
		<div class="gal last">
			<img src="img/placeholder.jpg" alt="" />
			<span>Lobby Lounge</span>
		</div>
		<div class="gal">
			<img src="img/placeholder.jpg" alt="" />
			<span>Lobby Lounge</span>
		</div>
		<div class="gal">
			<img src="img/placeholder.jpg" alt="" />
			<span>Lobby Lounge</span>
		</div>								
	</section>
	<div class="clear"></div>
	</div><!--End Mainrow-->
	
</div><!--End #content-->
</div><!--End #wrap-->
  
 <?php include('inc/footer.php'); ?>