<?php if(!empty($content['field_image'])) : ?>
	<div class="position-relative">
		<div class="bg-centered clearfix" style="background-image:url('<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>');padding: 165px 0;">
			<h1 class="huge-font light-bold color-white uppercase centered text-shadow letter-spacing no-margin-bottom"><?php print($title);?></h1>
			<br>
			<h2 class="light-bold color-white uppercase centered text-shadow letter-spacing-small no-margin"><?php print render($content['field_sub_headline']); ?></h2>
			<br>
		</div>
	</div>
<?php else: ?>
	<h1 class="uppercase centered"><?php print($title);?></h1>
	<div class="brd-headling margin-auto"></div>
	<br>
	<?php if(!empty($content['field_sub_headline'])) : ?>
		<h4 class="no-margin centered light-bold"><i class="fa fa-quote-left"></i> <?php print render($content['field_sub_headline']); ?> <i class="fa fa-quote-right"></i></h4>
		<br>
	<?php endif; ?>
<?php endif; ?>
<div class="container-details">
	<div class="container">
		<?php if(!empty($content['body'])) : ?>
			<br>
			<br>
			<div class="row clearfix">
				<?php print render($content['body']); ?>
			</div>
			<br>
			<br>
		<?php endif; ?>
	</div>
</div>
