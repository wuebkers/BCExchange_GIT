<?
	if($messages){ echo '<div class="drupal-message"><div class="container">',$messages,'</div></div>';}
?>

<?php if(!empty($tabs['#primary'])): ?>
	<div class="container">
		<div class="subnav">
			<?php print render($tabs); ?>
		</div>
	</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<? print render($page['content']); ?>
		</div>
	</div>
</div>