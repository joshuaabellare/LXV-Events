<div class="container-details"><div class="container">
	<br>
	<h1 class="no-margin centered light-bold uppercase"><?php print($title);?></h1>
	<br>
	<div class="centered small-font">
	<?php if(!empty($content['field_event_date'])) : ?>
		<div class="centered small-font"><span class="semi-bold"><i class="fa fa-calendar"></i> Event date: </span><?php print render($content['field_event_date']); ?></div>
		<div class="centered small-font"><span class="semi-bold"><i class="fa fa-gift"></i> Package: </span><?php print render($content['field_packages_connected']); ?></div>
		<br>
	<?php endif; ?>
	</div>
</div></div>
<?php if(!empty($content['field_image_gallery'])) : ?>
	<br>
	<br>
	<?php
		$block = module_invoke('views', 'block_view', 'gallery-gallery_grid');
		print render($block['content']);
	?>
	<br>
<?php endif; ?>