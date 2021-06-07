<?php hide($form['additional_settings']); ?>
<?php hide($form['field_inclusion_details']); ?>
<?php hide($form['actions']['delete']); ?>
<br>
<div class="container">
	<div class="container-details">
		<h3 class="no-margin centered uppercase">Basic Information</h3>
		<hr class="container-details-line-separator">
		<?php print render($form['title']); ?>
		<div class="row clearfix">
			<div class="col-md-6">
				<?php print render($form['field_event_date']); ?>
				<?php print render($form['field_type_of_parent_event']); ?>
			</div>
			<div class="col-md-6">
				<?php print render($form['field_packages_connected']); ?>
				<?php print render($form['field_type_of_event']); ?>
			</div>
		</div>
		<?php print render($form['body']); ?>
	</div>
	<br>
	<div class="container-details">
		<h3 class="no-margin centered uppercase">Gallery</h3>
		<hr class="container-details-line-separator">
		<p class="custom-field-description centered">
			Upload a high definition imag image for the gallery.
			<br>
			Image size should be: <strong>(800x600)</strong> Upload size is <strong>300 KB</strong> or less.
		</p>
		<?php print render($form['field_image_gallery']); ?>
	</div>
	<br>
	<div class="container-details">
		<h3 class="no-margin centered uppercase">SEO</h3>
		<hr class="container-details-line-separator">
		<?php print render($form['path']['pathauto']); ?>
		<?php print render($form['path']['alias']); ?>
		<?php print render($form['field_seo_title']); ?>
		<?php print render($form['field_meta_keywords']); ?>
		<?php print render($form['field_meta_description']); ?>
	</div>
	<br>
</div>
<br>
<div class="container-details centered">
	<?php print drupal_render($form['actions']['submit']); ?>
</div>
<div class="hide"><?php print drupal_render_children($form);?></div>