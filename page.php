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
<?php theme_include('header'); ?>

	<div id="main-content">
		<section class="container">
			<article>
				<h1 class="title"><?php echo page_title(); ?></h1>
				<?php echo page_content(); ?>
			</article>
		</section>
	</div>

<?php theme_include('footer'); ?>