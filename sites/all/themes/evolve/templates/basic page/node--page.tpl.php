<?php if((!empty($content['field_video_link'])) || (!empty($content['field_image']))) : ?>
	<?php 
		if(!empty($content['field_video_link'])){
			$str_video_banner = $content['field_video_link']['#items'][0]['video_url'];
			$str_video = str_replace('watch?v=', 'embed/', $str_video_banner);
			$playlist = substr($str_video_banner, strpos($str_video_banner, "=") + 1); 
		}
	?>
	<?php if(isMobile()) : ?>
		<?php if(!empty($content['field_video_link'])): ?>
			<div class="bg-centered" style="background-image:url('http://i.ytimg.com/vi/<?php print $playlist; ?>/maxresdefault.jpg'); padding:100px 0;" data-toggle="modal" data-target="#video-modal">
				<div class="centered color-peach"><i class="fa fa-fw fa-5x fa-play-circle"></i></div>
			</div>
		<?php else: ?>
			<?php if(!empty($content['field_image'])): ?>
				<div class="centered-banner-small-parallax-bg bg-dark-shadow" style="padding: 105px 0; background-image:url('<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>');">
					<h1 class="uppercase centered no-margin huge-font text-shadow color-white letter-spacing-small"><?php print($title);?></h1>
				</div>
			<?php else: ?>
					<div class="bg-white">
						<br>
						<h1 class="uppercase centered no-margin huge-font letter-spacing-small"><?php print($title);?></h1>
						<br>
					</div>
			<?php endif;?>
		<?php endif;?>
	<?php else: ?>
		<?php if(!empty($content['field_video_link'])) : ?>
			<div class="position-relative overflow-hidden">
				<div class="video-background-container no-link bg-square">
					<div class="video-background">
						<div class="video-foreground pointer-events-none">
						  <iframe width="1600" height="900" src="<?php print $str_video; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=<?php print $playlist; ?>" frameborder="0" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
			</div>
		<?php else: ?>
			<?php if(!empty($content['field_image'])) : ?>
				<div class="centered-banner-small-parallax-bg bg-dark-shadow" style="padding: 105px 0; background-image:url('<?php print file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']); ?>');">
					<h1 class="uppercase centered no-margin huge-font text-shadow color-white letter-spacing-small"><?php print($title);?></h1>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
<div class="bg-white">
	<div class="container">
		<?php if(empty($content['field_image'])) : ?>
			<h1 class="huge-font centered uppercase light-bold letter-spacing-small no-margin-bottom"><?php print($title);?></h1>
		<?php endif; ?>
		<?php if(!empty($content['body'])) : ?>
			<br>
			<?php print render($content['body']); ?>
		<?php endif; ?>
		<br>
	</div>
</div>

<?php if(!empty($content['field_php_filter'])) : ?>
	<?php print render($content['field_php_filter']); ?>
<?php endif; ?>