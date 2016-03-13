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
		<?php if (has_search_results()): ?>
			<section class="container">
				<h3>Your search for <?php echo search_term(); ?> returned <?php echo total_search_results(); ?> results:</h3>
				<ul>
					<?php $i = 0;
					while (search_results()) {
						$i++; ?>
						<article class="wrap">
							<h4>
								<a href="<?php echo search_item_url(); ?>"
								   title="<?php echo search_item_title(); ?>"><?php echo "#$i: " . search_item_title(); ?></a>
							</h4>
						</article>
					<?php } ?>
				</ul>
			</section>

			<section class="container">
				<?php if (has_pagination()) : ?>
					<nav class="pagination">
						<?php echo search_prev(); ?>
						<?php echo search_next(); ?>
					</nav>
				<?php endif; ?>
			</section>

		<?php else: ?>
			<section class="container" style="padding-bottom:1em;">
				<h3>No results for &ldquo;<?php echo search_term(); ?>&rdquo;</h3>
				<a href="<?php echo base_url();?>">Back to homepage</a>
			</section>
		<?php endif; ?>
	</div>
<?php theme_include('footer'); ?>