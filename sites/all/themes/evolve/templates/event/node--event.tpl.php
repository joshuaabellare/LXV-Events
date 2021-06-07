<?php $img_style = 'image_gallery'; ?>
<?php $image_banner_default_uri = "public://LXVDefaultImage.jpg" ?>
<?php $image_banner_default = image_style_url($img_style, $image_banner_default_uri); ?>
<?php 
	if(!empty($content['field_video_link'])) {
		$str_video_banner = $content['field_video_link']['#items'][0]['video_url'];
		$str_video = str_replace('watch?v=', 'embed/', $str_video_banner);
		$playlist = substr($str_video_banner, strpos($str_video_banner, "=") + 1); 
	}
	if(!empty($content['field_thumbnail'])) {
		$fc_image_thumb = image_style_url($img_style, $node->field_thumbnail[LANGUAGE_NONE][0]['uri']);
	}
?>
<?php if(isMobile()) : ?>
	<?php if(!empty($content['field_video_link'])): ?>
		<div class="bg-centered centered" style="background-image:url('http://i.ytimg.com/vi/<?php print $playlist; ?>/maxresdefault.jpg'); padding:100px 0;" data-toggle="modal" data-target="#video-modal">
			<div class="fa-stack fa-2x color-peach">			  
				<i class="fa fa-circle-thin fa-stack-2x"></i>
			 	<i class="fa fa-play large-font fa-stack-1x"></i>
			</div>
		</div>
	<?php else: ?>
		<?php if(!empty($content['field_thumbnail'])): ?>
			<div class="full-width festive-filter"><img src="<?php print $fc_image_thumb; ?>" /></div>
		<?php endif;?>
	<?php endif;?>
	<div class="container-details">
		<br>
		<h1 class="uppercase no-margin centered"><?php print($title);?></h1>
		<br>
		<?php if(!empty($content['body'])) : ?>
			<div><?php print render($content['body']); ?></div>
			<br>
		<?php endif; ?>
	</div>
<?php else: ?>
	<div class="container-details no-padding row-eq-height clearfix">
		<div class="col-md-6 no-padding">
			<?php if(!empty($content['field_video_link'])): ?>
				<div class="position-relative overflow-hidden">
					<div class="full-width festive-filter"><img src="<?php print $fc_image_thumb; ?>" /></div>
					<?php if(!empty($content['field_video_link'])): ?>
						<div class="video-background video-background-column absolute-centered-details no-link no-padding">
							<iframe width="100%" height="100%" src="<?php print $str_video; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=<?php print $playlist; ?>" frameborder="0" allowfullscreen></iframe>
						</div>
					<?php endif; ?>
				</div>
			<?php else: ?>
				<?php if(!empty($content['field_thumbnail'])): ?>
					<div class="full-width festive-filter"><img src="<?php print $fc_image_thumb; ?>" /></div>
				<?php else: ?>
					<div class="full-width festive-filter"><img src="<?php print $image_banner_default; ?>"></div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="col-md-6 no-padding column-vertical-align">
			<br>			
			<div class="clearfix">
				<div class="col-md-10 col-md-offset-1">
					<h1 class="no-margin uppercase centered"><?php print($title);?></h1>
					<br>
					<?php if(!empty($content['body'])) : ?>
						<div><?php print render($content['body']); ?></div>
						<br>
					<?php endif; ?>
				</div>
			</div>
			<br>
		</div>
	</div>
<?php endif; ?>
<?php
	$block = module_invoke('views', 'block_view', 'package-event_type_packages');
	if($block):
?>
	<div class="bg-light-grey">
		<div class="container-details-padding-large no-padding-top no-padding-bottom">
			<br>
			<br>
			<h3 class="centered no-margin uppercase larger-font">Selected Packages</h3>
			<br>
			<div class="content custom-slick custom-slick-side-large custom-slick-side-nav">
				<?php print render($block['content']); ?>
			</div>
			<br>
			<div class="centered">
				<div class="col-md-3 col-centered no-float">
					<a href="/designed-packages?field_type_of_event_target_id%5B%5D=<?php print $nid; ?>" class="dexp-shortcodes-button btn line-color btn-link uppercase full-width light-bold" role="button">View all packages</a>
				</div>
			</div>
			<br>
			<br>
		</div>
	</div>
<?php endif; ?>
<?php
	$blockObject = block_load('block', '5');
	$block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	$output = drupal_render($block);
	print $output;
?>
<?php /*
	$block_album = module_invoke('views', 'block_view', 'gallery-event_type_portfolio');
	$block_video = module_invoke('views', 'block_view', 'gallery-event_type_video');
	if(($block_album) || ($block_video)):
?>
<div class="container">
	<br>
	<?php if($block_album): ?>
		<br>
		<h3 class="centered no-margin uppercase color-violet larger-font">Latest Event Albums</h3>
		<br>
		<br>
		<?php print render($block_album['content']); ?>
	<?php endif; ?>
	<?php if($block_video): ?>
		<br>
		<h3 class="centered no-margin uppercase color-violet larger-font">Latest Event Videos</h3>
		<br>
		<br>
		<?php print render($block_video['content']); ?>
	<?php endif; ?>
	<br>
</div>
<?php endif; */ ?>
<?php
	$block = module_invoke('block', 'block_view', '7');
	print render($block['content']);
?>
<?php if(!empty($content['field_video_link'])) : ?>
	<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		       		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       		<h4 class="modal-title" id="myModalLabel"><?php print($title);?></h4>
		      	</div>
			    <div class="modal-body no-padding">
					<div class="video-background-mobile position-relative">
						<iframe width="100%" height="300" src="<?php print $str_video; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=<?php print $playlist; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
			    </div>
		    </div>
		</div>
	</div>
<?php endif; ?>