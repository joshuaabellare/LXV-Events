<!-- <div class="container">
	<br>
	<h1 class="no-margin centered light-bold color-brown"><?php print($title);?></h1>
	<br>
	<?php if(!empty($content['field_video_link'])): ?>
			<?php
				$str_video_banner = $content['field_video_link']['#items'][0]['video_url'];
				$str_video = str_replace('watch?v=', 'embed/', $str_video_banner);
				$playlist = substr($str_video_banner, strpos($str_video_banner, "=") + 1); 
			?>
			<div class="position-relative video-background-container-large">
				<div class="video-background">
					<div class="video-foreground-two-column">
					  <iframe src="<?php print $str_video; ?>?controls=1&showinfo=0&rel=0&autoplay=1&loop=1&playlist=<?php print $playlist; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<br>
			<br>
	<?php endif; ?>
</div> -->

		<!-- <div class="video-background-container-medium position-relative no-link">
			<div class="video-background absolute-centered-details full-width">
	     		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/PFImU_71b_M?controls=0&amp;showinfo=0&amp;rel=0&amp;autoplay=1&amp;loop=1&amp;mute=1&amp;playlist=PFImU_71b_M" frameborder="0" allowfullscreen=""></iframe>
			</div>
		</div> -->

<div class="container">
	<br>
	<h1 class="no-margin centered light-bold color-brown"><?php print($title);?></h1>
	<br>
	<?php if(!empty($content['field_video_link'])): ?>
			<?php
				$str_video_banner = $content['field_video_link']['#items'][0]['video_url'];
				$str_video = str_replace('watch?v=', 'embed/', $str_video_banner);
				$playlist = substr($str_video_banner, strpos($str_video_banner, "=") + 1); 
			?>
		<div class="position-relative video-background-container no-padding">
			<div class="video-background">
				<div class="video-foreground">
				  <iframe width="100%" height="600" src="<?php print $str_video; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=0&playlist=<?php print $playlist; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
			<br>
	<?php endif; ?>
</div>