<?php
/**
* @file
* Default theme implementation to display a region.
*
* Available variables:
* - $content: The content for this region, typically blocks.
* - $classes: String of classes that can be used to style contextually through
* CSS. It can be manipulated through the variable $classes_array from
* preprocess functions. The default values can be one or more of the following:
* - region: The current template type, i.e., "theming hook".
* - region-[name]: The name of the region with underscores replaced with
* dashes. For example, the page_top region would have a region-page-top class.
* - $region: The name of the region variable as defined in the theme's .info file.
*
* Helper variables:
* - $classes_array: Array of html class attribute values. It is flattened
* into a string within the variable $classes.
* - $is_admin: Flags true when the current user is an administrator.
* - $is_front: Flags true when presented in the front page.
* - $logged_in: Flags true when the current user is a logged-in member.
*
* @see template_preprocess()
* @see template_preprocess_region()
* @see template_process()
*
* @ingroup themeable
*/
?>
<?php
	global $user;
	$admin_role = array_intersect(array('administrator'), array_values($user->roles));
?>
<?php if ($content): ?>
<div class="<?php print $classes; ?>">
<?php print $messages; ?>
<?php print render($title_prefix); ?>
<?php /* if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; */ ?>
<?php print render($title_suffix); ?>
<?php if (empty($admin_role) ? FALSE : TRUE) : ?>
	<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
<?php endif; ?>
<?php print render($page['help']); ?>
<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php print $content; ?>
</div>
<?php endif; ?>