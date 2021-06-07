<?php
	$count = 1;
	$arr_rows = $view->style_plugin->rendered_fields; ?>
		<?php
		foreach ($arr_rows as $key => $arr_row): ?>
		<?php if($arr_row): ?>
			<?php if (($count % 2) == 0): ?>
				<div class="bg-white">
					<div class="clearfix row-eq-height">
						<div class="col-md-6 col-md-push-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="centered full-width position-relative z-index-over custom-slick-white-nav custom-slick custom-slick-side-medium custom-slick-side-nav festive-filter"><?php print $arr_row['field_image']; ?></div>
						</div>
						<div class="col-md-6 col-md-pull-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="container-details-padding no-padding-left no-padding-right">
								<div class="container-details-padding-large no-padding-top no-padding-bottom">
									<br>
									<h3 class="no-margin uppercase centered larger-font"><?php print $arr_row['title']; ?></h3>
									<br>
									<div><?php print $arr_row['body']; ?></div>
									<br>
									<div><a href="<?php print $arr_row['path']; ?>" class="dexp-shortcodes-button btn uppercase btn-link semi-bold letter-spacing-extra-small">Explore</a></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div class="bg-light-grey">
					<div class="clearfix row-eq-height">
						<div class="col-md-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="centered full-width position-relative z-index-over custom-slick-white-nav custom-slick custom-slick-side-medium custom-slick-side-nav festive-filter"><?php print $arr_row['field_image']; ?></div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 no-padding column-vertical-align">
							<div class="container-details-padding no-padding-left no-padding-right">
								<div class="container-details-padding-large no-padding-top no-padding-bottom">
									<br>
									<h3 class="no-margin uppercase centered larger-font"><?php print $arr_row['title']; ?></h3>
									<br>
									<div><?php print $arr_row['body']; ?></div>
									<br>
									<div><a href="<?php print $arr_row['path']; ?>" class="dexp-shortcodes-button btn uppercase btn-link semi-bold letter-spacing-extra-small">Explore</a></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
		    <?php endif; ?>
		<?php endif; ?>
<?php $count++;endforeach;?>