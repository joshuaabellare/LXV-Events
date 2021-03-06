<?php hide($form['additional_settings']); ?>
<?php hide($form['actions']['delete']); ?>
<br>
<ul class="custom-nav-bars nav nav-tabs centered" role="tablist">
	<li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a></li>
	<li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
	<li role="presentation"><a href="#media" aria-controls="media" role="tab" data-toggle="tab">Media</a></li>
	<li role="presentation"><a href="#filter" aria-controls="filter" role="tab" data-toggle="tab">Filter</a></li>
	<li role="presentation"><a href="#seo" aria-controls="seo" role="tab" data-toggle="tab">SEO</a></li>
</ul>
<br>
<div class="container">
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="information">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Basic Information</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['title']); ?>
				<?php print render($form['field_sub_headline']); ?>
				<?php print render($form['body']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="location">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Location</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_base_location']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="media">
			<div class="container-details">
				<h3 class="no-margin centered uppercase">Thumbnail</h3>
				<hr class="container-details-line-separator">
				<p class="custom-field-description centered">
					Upload a high definition image for the thumbnail.
					<br>
					Image size should be: <strong>(800x600)</strong> Upload size is <strong>300 KB</strong> or less.
				</p>
				<?php print render($form['field_thumbnail']); ?>
			</div>
			<br>
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Video</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_video_link']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="filter">
			<div class="container-details container-details-border">
				<h3 class="no-margin centered uppercase">Filter</h3>
				<hr class="container-details-line-separator">
				<?php print render($form['field_type_of_parent_event']); ?>
				<?php print render($form['field_featured_package']); ?>
			</div>
			<br>
		</div>
		<div role="tabpanel" class="tab-pane" id="seo">
			<div class="container-details container-details-border">
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
	</div>
</div>
<div class="container-details centered actions-form-container">
	<?php print drupal_render($form['actions']['submit']); ?>
</div>
<div class="hide"><?php print drupal_render_children($form);?></div>