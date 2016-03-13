<?php theme_include('header'); ?>
	<div id="main-content">
		<section class="container">
			<?php if (has_posts()) {
				while (posts()) { ?>
					<article class="posts">
						<h1 class="title">
							<a href="<?php echo article_url(); ?>"
							   title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						</h1>
						<h5><em class="small"><?php echo article_date(); ?></em></h5>
						<p><?php echo article_description(); ?></p>
					</article>
				<?php }
			} ?>
		</section>

		<section class="container">
			<?php if (has_pagination()) { ?>
				<nav class="pagination">
					<?php echo posts_prev(); ?>
					<?php echo posts_next(); ?>
				</nav>
			<?php } ?>
		</section>
	</div>

<?php theme_include('footer'); ?>