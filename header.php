<?php
/*
 * ========================================================================
 * Blue Bar theme for Anchor CMS
 * https://github.com/schnaidar/blue-bar
 * ========================================================================
 * Copyright 2016 Marcel Schneider
 * Licensed under MIT (https://github.com/schnaidar/blue-bar/blob/master/LICENSE)
 * ========================================================================
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Anchor CMS"/>
	<!-- Metadata description -->
	<?php if (article_description()) { ?>
		<meta name="description" content="<?php echo article_description() ?>">
	<?php } elseif (category_description()) { ?>
		<meta name="description" content="<?php echo category_description() ?>">
	<?php } else { ?>
		<meta name="description" content="<?php echo site_description() ?>">
	<?php } ?>

	<!-- Metadata author -->
	<?php if (article_author()) { ?>
		<meta name="author" content="<?php echo article_author(); ?>">
	<?php } ?>

	<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo theme_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="<?php echo theme_url('css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo theme_url('css/blue-bar.css'); ?>" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>" type="image/x-icon"/>

	<!-- Add per-post CSS -->
	<?php if (article_css()) { ?>
		<style><?php echo article_css(); ?></style>
	<?php } ?>

	<!-- Add per-post JS -->
	<?php if (article_js()) { ?>
		<script><?php echo article_js(); ?></script>
	<?php } ?>
</head>

<body>

<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
				        aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>"
				   title="<?php site_description(); ?>"><?php echo site_name(); ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<?php if (has_menu_items()) { ?>
					<ul class="nav navbar-nav">
						<?php while (menu_items()) { ?>
							<li <?php if (menu_active()){ ?>class="active"<?php } ?>>
								<a href="<?php echo menu_url(); ?>"
								   title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
							</li>
						<?php } ?>
					</ul>
				<?php } ?>

				<!-- Search bar -->
				<form class="navbar-form navbar-right" action="<?php echo search_url(); ?>" method="post">
					<div class="form-group">
						<input type="search" placeholder="To search, type and hit enter&hellip;" class="form-control"
						       value="<?php echo search_term(); ?>" id="search-input" name="term">
					</div>
					<button style="display: none;" type="submit" class="btn btn-success">Search</button>
				</form>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>
</header>