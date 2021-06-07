<div class="container">
	<?php if (!isset($_GET['lid'])):?>
		<?php
			$block = module_invoke('views', 'block_view', 'admin_access-location_list');
			if($block):
		?>
			<br>
			<h3 class="uppercase">Select a Location</h3>
			<br>
			<?php print render($block['content']); ?>
			<br>
		<?php endif;?>
	<?php endif; ?>
	<?php if (isset($_GET['lid'])):?>
		<?php 
		$location = node_load($_GET['lid']);
		if($location):?>
			<?php if($location->type =='location'): ?>
				<br>
				<h3 class="uppercase"><?php echo $location->title; ?> Dashboard</h3>
				<br>
				<div class="row">
					<div class="col-md-4 centered">
						<div class="container-details container-details-border"> 
							<br>
							<h3 class="no-margin uppercase">Parent Event Types</h3>
							<br>
							<div class="small-font">
								<div><a class="uppercase" href="../node/add/parent-event?lid=<?php echo $_GET['lid']; ?>">Create New Parent Event Type</a></div>
								<div><a class="uppercase" href="../admin/all-parent-events?lid=<?php echo $_GET['lid']; ?>">View List of Parent Event Types</a></div>
							</div>
					   		<br>
					   	</div>
					   	<br>
					</div>
					<div class="col-md-4 centered">
						<div class="container-details container-details-border"> 
							<br>
							<h3 class="no-margin uppercase">Event Types</h3>
							<br>
							<div class="small-font">
								<div><a class="uppercase" href="../node/add/event?lid=<?php echo $_GET['lid']; ?>">Create New Event Type</a></div>
								<div><a class="uppercase" href="../admin/all-events?lid=<?php echo $_GET['lid']; ?>">View List of Event Types</a></div>
							</div>
					   		<br>
					   	</div>
					   	<br>
					</div>
					<div class="col-md-4 centered">
						<div class="container-details container-details-border"> 
							<br>
							<h3 class="no-margin uppercase">Packages</h3>
							<br>
							<div class="small-font">
								<div><a class="uppercase" href="../node/add/bundled-package?lid=<?php echo $_GET['lid']; ?>">Create New Package</a></div>
								<div><a class="uppercase" href="../admin/all-packages?lid=<?php echo $_GET['lid']; ?>">View List of Packages</a></div>
							</div>
				    		<br>
				    	</div>
				    	<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="container-details container-details-border">
							<h4 class="uppercase light-bold no-margin">Manage Landing Page</h4>
							<br>
							<div class="centered">
								<div class="inline-block vertical-align">
									<i class="fa fa-4x fa-file-text-o"></i>
								</div>
								<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
									<?php $alias = drupal_get_path_alias('node/' .  $_GET['lid']); ?>
									<div><a class="uppercase" href="../node/<?php echo $_GET['lid']; ?>/edit">Edit landing page</a></div>
									<div><a class="uppercase" href="../<?php echo $alias; ?>">View landing page</a></div>
								</div>
							</div>
							<br>
						</div>
						<br>
					</div>
					<div class="col-md-8">
						<div class="container-details container-details-border"> 
							<h4 class="uppercase light-bold no-margin">Manage Basic Pages</h4>
							<br>
							<div class="centered">
								<div class="inline-block vertical-align">
									<i class="fa fa-4x fa-clipboard"></i>
								</div>
								<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
									<div><a class="uppercase" href="../node/add/page?lid=<?php echo $_GET['lid']; ?>">Create New Page</a></div>
									<div><a class="uppercase" href="../admin/all-pages?lid=<?php echo $_GET['lid']; ?>">View List of Pages</a></div>
								</div>
							</div>
					   		<br>
					   	</div>
					   	<br>
					</div>
				</div>
			<?php else: ?>
				<h3 class="centered">Error: 404</h3>
				<p class="centered">We couldn't find the page you were looking for, so cool down, please go back and search again thanks.</p>
				<br>
				<div class="centered"><a class="dexp-shortcodes-button btn uppercase" href="/admin/access" role="button">Back to Admin Access</a></div>
				<br>
			<?php endif; ?>
		<?php else: ?>
			<h3 class="centered">Error: 404</h3>
			<p class="centered">We couldn't find the page you were looking for, so cool down, please go back and search again thanks.</p>
			<br>
			<div class="centered"><a class="dexp-shortcodes-button btn uppercase" href="/admin/access" role="button">Back to Admin Access</a></div>
			<br>
		<?php endif; ?>		
	<?php else: ?>
		<br>
		<h3 class="uppercase no-margin">Global Dashboard</h3>
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="container-details">
					<h4 class="uppercase light-bold no-margin">Manage Basic Pages</h4>
					<br>
					<div class="centered">
						<div class="inline-block vertical-align">
							<i class="fa fa-4x fa-clipboard"></i>
						</div>
						<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
							<div><a class="uppercase" href="../node/add/page">Create New Page</a></div>
							<div><a class="uppercase" href="../admin/all-pages">View List of pages</a></div>
						</div>
					</div>
					<br>
				</div>
				<br>
			</div>
			<div class="col-md-4">
				<div class="container-details">
					<h4 class="uppercase light-bold no-margin">Manage Locations</h4>
					<br>
					<div class="centered">
						<div class="inline-block vertical-align">
							<i class="fa fa-4x fa-globe"></i>
						</div>
						<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
							<div><a class="uppercase" href="../node/add/location">Create New Location</a></div>
							<div><a class="uppercase" href="../admin/all-locations">View List of locations</a></div>
						</div>
					</div>
					<br>
				</div>
				<br>
			</div>
			<div class="col-md-4">
				<div class="container-details">
					<h4 class="uppercase light-bold no-margin">Manage Articles</h4>
					<br>
					<div class="centered">
						<div class="inline-block vertical-align">
							<i class="fa fa-4x fa-file-text-o"></i>
						</div>
						<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
							<div><a class="uppercase" href="../node/add/article">Create New Article</a></div>
							<div><a class="uppercase" href="../admin/all-articles">View List of Articles</a></div>
						</div>
					</div>
					<br>
				</div>
				<br>
			</div>
			<div class="col-md-4">
				<div class="container-details">
					<h4 class="uppercase light-bold no-margin">Manage Reviews</h4>
					<br>
					<div class="centered">
						<div class="inline-block vertical-align">
							<i class="fa fa-4x fa-pencil-square-o"></i>
						</div>
						<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
							<div><a class="uppercase" href="../node/add/review">Create New Review</a></div>
							<div><a class="uppercase" href="../admin/all-reviews">View List of Reviews</a></div>
						</div>
					</div>
					<br>
				</div>
				<br>
			</div>
			<div class="col-md-4">
				<div class="container-details">
					<h4 class="uppercase light-bold no-margin">Manage Portfolios</h4>
					<br>
					<div class="centered">
						<div class="inline-block vertical-align">
							<i class="fa fa-4x fa-picture-o"></i>
						</div>
						<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
							<div><a class="uppercase" href="../node/add/portfolio">Create New Portfolio</a></div>
							<div><a class="uppercase" href="../admin/all-portfolios">View List of Portfolios</a></div>
						</div>
					</div>
					<br>
				</div>
				<br>
			</div>
			<div class="col-md-4">
				<div class="container-details">
					<h4 class="uppercase light-bold no-margin">Manage Videos</h4>
					<br>
					<div class="centered">
						<div class="inline-block vertical-align">
							<i class="fa fa-4x fa-picture-o"></i>
						</div>
						<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
							<div><a class="uppercase" href="../node/add/video">Create New Video</a></div>
							<div><a class="uppercase" href="../admin/all-videos">View List of Videos</a></div>
						</div>
					</div>
					<br>
				</div>
				<br>
			</div>
			<!--<div class="col-md-4">
				<div class="container-details">
					<h4 class="uppercase light-bold no-margin">Bookings Sent</h4>
					<br>
					<div class="centered">
						<div class="inline-block vertical-align">
							<i class="fa fa-4x fa-envelope-o"></i>
						</div>
						<div class="inline-block vertical-align left column-padding no-padding-top no-padding-bottom small-font">
							<div><a class="uppercase" href="../admin/all-bookings">View List of Bookings</a></div>
						</div>
					</div>
					<br>
				</div>
				<br>
			</div>-->
		</div>
		<br>
	<?php endif; ?>
</div>
<br>