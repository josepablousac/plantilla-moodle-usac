<!-- Start Internal Banner Section -->
<div class="internalbanner">
   <div class="container-fluid">
		<div class="image-banner">
			<img src="<?=$internalbannerimage?>" alt="" />
		</div>
      <?php echo $html->heading; ?>
      <?php if($internalbannertagline) { ?>
      <p class="tagline"><?php echo $internalbannertagline ?></p>
      <?php } ?>
   </div>
</div>
<!-- End Internal Banner Section -->
<?php require_once(dirname(__FILE__).'/breadcrumb.php'); ?>