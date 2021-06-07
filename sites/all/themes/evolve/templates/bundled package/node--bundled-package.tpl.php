<?php global $base_url; ?>
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
	<div class="centered bg-light-grey column-padding no-padding-top no-padding-bottom">
		<br>
		<h1 class="no-margin"><?php print($title);?></h1>
		<br>
		<?php if((!empty($content['field_sub_headline'])) || (!empty($content['field_max_capacity'])) || (!empty($content['field_duration']))) : ?>
			<?php if(!empty($content['field_sub_headline'])) : ?>
				<div class="semi-bold"><i class="fa fa-fw fa-quote-left"></i> <i><?php print render($content['field_sub_headline']); ?></i> <i class="fa fa-fw fa-quote-right"></i></div>
			<?php endif; ?>
			<?php if((!empty($content['field_max_capacity'])) || (!empty($content['field_duration']))) : ?>
				<div class="row clearfix">
					<?php if(!empty($content['field_max_capacity'])) : ?>
						<div class="small-font column-padding no-padding-top no-padding-bottom inline-block"><i class="fa color-peach fa-user" aria-hidden="true"></i> <?php print ('Guests: '); print render($content['field_max_capacity']); print (' persons');?></div>
					<?php endif; ?>
					<?php if(!empty($content['field_duration'])) : ?>
							<div class="small-font column-padding no-padding-top no-padding-bottom inline-block"><i class="fa color-peach fa-clock-o" aria-hidden="true"></i> <?php print ('Duration '); print render($content['field_duration']);?></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<br>
		<?php endif; ?>
		<?php if(!empty($content['field_rate'])) : ?>
			<div class="semi-bold rate-section">
				<?php 
					$items = field_get_items('node', $node, 'field_rate');
					foreach ($items as $item) :
				?>
					<div><?php print $item['value']; ?></div>
				<?php endforeach; ?>
			</div>
			<br>
		<?php endif; ?>
		<br>
	</div>
<?php else: ?>
	<div class="row-eq-height clearfix">
		<div class="col-md-6 no-padding">
			<?php if(!empty($content['field_video_link'])): ?>
				<div class="position-relative overflow-hidden">
					<div class="full-width festive-filter"><img src="<?php print $image_banner_default; ?>"></div>
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
		<div class="col-md-6 no-padding column-vertical-align bg-light-grey">
			<br>
			<div class="centered clearfix">
				<div class="col-md-10 col-md-offset-1">
					<h1 class="no-margin"><?php print($title);?></h1>
					<br>
					<?php if((!empty($content['field_sub_headline'])) || (!empty($content['field_max_capacity'])) || (!empty($content['field_duration']))) : ?>
						<?php if(!empty($content['field_sub_headline'])) : ?>
							<div class="semi-bold"><i class="fa fa-fw fa-quote-left"></i> <i><?php print render($content['field_sub_headline']); ?></i> <i class="fa fa-fw fa-quote-right"></i></div>
						<?php endif; ?>
						<?php if((!empty($content['field_max_capacity'])) || (!empty($content['field_duration']))) : ?>
							<div class="row clearfix">
								<?php if(!empty($content['field_max_capacity'])) : ?>
									<div class="small-font column-padding no-padding-top no-padding-bottom inline-block"><i class="fa color-peach fa-user" aria-hidden="true"></i> <?php print ('Guests: '); print render($content['field_max_capacity']); print (' persons');?></div>
								<?php endif; ?>
								<?php if(!empty($content['field_duration'])) : ?>
									<div class="small-font column-padding no-padding-top no-padding-bottom inline-block"><i class="fa color-peach fa-clock-o" aria-hidden="true"></i> <?php print ('Duration '); print render($content['field_duration']);?></div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<br>
					<?php endif; ?>
					<?php if(!empty($content['field_rate'])) : ?>
						<div class="semi-bold rate-section">
							<?php 
								$items = field_get_items('node', $node, 'field_rate');
								foreach ($items as $item) :
							?>
								<div><?php print $item['value']; ?></div>
							<?php endforeach; ?>
						</div>
						<br>
					<?php endif; ?>
				</div>
			</div>
			<br>
		</div>
	</div>
<?php endif; ?>
<div class="bg-white">
	<div class="container">
		<br>
		<div class="row clearfix">
			<div class="col-md-8">
				<?php if(!empty($content['body'])) : ?>
					<br>
					<h4 class="no-margin-top uppercase large-font">About the package</h4>
					<div class="brd-headling"></div>
					<?php print render($content['body']); ?>
					<br>		
				<?php endif; ?>
				<?php if(!empty($content['field_inclusions'])) : ?>
					<br>
					<h4 class="no-margin-top uppercase large-font">Inclusions</h4>
					<div class="brd-headling"></div>
					<?php print render($content['field_inclusions']); ?>
					<br>		
				<?php endif; ?>
				<?php if(!empty($content['field_rates'])) : ?>
					<br>
					<h4 class="no-margin-top uppercase large-font">Rates</h4>
					<div class="brd-headling"></div>
					<?php print render($content['field_rates']); ?>
					<br>		
				<?php endif; ?>
				<?php if(!empty($content['field_add_ons_details'])) : ?>
					<br>
					<h4 class="no-margin-top uppercase large-font">Add ons</h4>
					<div class="brd-headling"></div>
					<?php print render($content['field_add_ons_details']); ?>
					<br>		
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<br>
				<div id="sticky-anchor"></div>
				<div id="sidebar-sticky">
					<div class="bg-light-grey container-details-padding container-details-border round-border-radius">
						<h4 class="no-margin-top uppercase centered large-font">Book Now</h4>
						<?php 
							$block = module_invoke('entityform_block', 'block_view', 'contact_us');
							print render($block['content']); 
						?>
					</div>
					<br>
				</div>
			</div>
		</div>
		<br>
	</div>
</div>
<div id="sticky-anchor-stop"></div>
<?php $block_package_inclusion = module_invoke('views', 'block_view', 'package-inclusion_details'); if($block_package_inclusion): ?>
	<div class="bg-light-grey">
		<div class="container">
			<br>
			<br>
			<h3 class="centered no-margin uppercase larger-font">Inclusions in Details</h3>
			<br>
			<br>
			<?php print render($block_package_inclusion['content']); ?>
			<br>
			<br>
			<br>
		</div>
	</div>
<?php endif; ?>
<?php
	$block_package_food = module_invoke('views', 'block_view', 'package-food_details');
	$block_package_drinks = module_invoke('views', 'block_view', 'package-drinks_details');
	if(($block_package_food) || ($block_package_drinks)):
?>
	<div class="centered-banner-small-parallax-bg bg-dark-shadow" style="background-image:url(<?php print $base_url; ?>/sites/default/files/FoodandDrinkBG.jpg);" >
		<br>
		<?php if($block_package_food): ?>
			<div class="centered-cover-bg">
				<div class="container">
					<br>
					<h3 class="centered no-margin uppercase larger-font color-white text-shadow">About the Food</h3>
					<br>
					<div class="position-relative">
						<div class="custom-slick"><?php print render($block_package_food['content']); ?></div>
					</div>
					<br>
				</div>
			</div>
		<?php endif; ?>
		<?php if($block_package_drinks): ?>
			<div class="centered-cover-bg">
				<div class="container">
					<br>
					<h3 class="centered no-margin uppercase larger-font color-white text-shadow">About the Drinks</h3>
					<br>
					<div class="position-relative">
						<div class="custom-slick"><?php print render($block_package_drinks['content']); ?></div>
					</div>
					<br>
				</div>
			</div>
		<?php endif; ?>
		<br>
		<br>
	</div>
<?php endif; ?>


<?php
	$block_package_addon = module_invoke('views', 'block_view', 'package-add_ons');
	$items = field_get_items('node', $node, 'field_add_ons');
	$count = 0;
	if(!empty($items)){
		foreach ($items as $item) {
			$count++;
		}
	}
	if($block_package_addon):
?>
	<div class="bg-white">
		<div class="container">
			<br>
			<br>
			<h3 class="centered no-margin uppercase larger-font">Other Add-ons</h3>
			<br>
			<br>
			<div class="position-relative">
				<?php if($count > 1): ?>
					<div class="custom-slick custom-slick-side-large custom-slick-side-nav"><?php print render($block_package_addon['content']); ?></div>
				<?php else: ?>
					<div class="clearfix">
						<div class="col-md-offset-4 col-md-4">
							<?php print render($block_package_addon['content']); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<br>
			<br>
			<br>
		</div>
	</div>
<?php endif; ?>
<?php $block_gallery = module_invoke('views', 'block_view', 'gallery-gallery_grid'); if(!empty($content['field_image_gallery'])): ?>
	<div class="bg-light-grey">
		<br>
		<br>
		<h3 class="centered no-margin uppercase larger-font">Gallery</h3>
		<br>
		<br>
		<div class="centered clearfix">
			<?php print render($block_gallery['content']); ?>
		</div>
		<br>
		<br>
		<br>
	</div>
<?php endif; ?>
<?php /*
	$block_album = module_invoke('views', 'block_view', 'gallery-package_portfolio');
	$block_video = module_invoke('views', 'block_view', 'gallery-package_video_album');
	if(($block_album) || ($block_video)):
?>
	<div class="bg-peach">
		<br>
		<div class="container">
			<?php if($block_album): ?>
					<br>
					<h3 class="centered no-margin uppercase color-white larger-font">Latest Event Albums</h3>
					<br>
					<br>
					<?php print render($block_album['content']); ?>
			<?php endif; ?>
			<?php if($block_video): ?>
					<br>
					<h3 class="centered no-margin uppercase color-white larger-font">Latest Event Videos</h3>
					<br>
					<br>
					<?php print render($block_video['content']); ?>
			<?php endif; ?>
		</div>
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

