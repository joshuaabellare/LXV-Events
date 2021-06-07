<div class="container">
	<br>
	<div class="container-details container-details-border">
		<h3 class="no-margin centered uppercase">Review Information</h3>
		<hr class="container-details-line-seprator">
		<div class="row">
			<div class="col-md-6">
				<?php print render($form['title']); ?>
				<?php print render($form['field_rating']); ?>
				<?php print render($form['body']); ?>
			</div>
			<div class="col-md-6">
				<?php print render($form['field_seo_title']); ?>
				<?php print render($form['field_event_date']); ?>
				<?php print render($form['field_thumbnail']); ?>
			</div>
		</div>			
	</div>
	<br>
</div>
<div class="container-details centered">
	<?php print drupal_render($form['actions']['submit']); ?>
</div>
<div class="hide"><?php print drupal_render_children($form);?></div>