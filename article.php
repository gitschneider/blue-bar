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
			<h1 class="title"><?php echo article_title(); ?></h1>
			<h5 class="article-meta"><em class="small">Written by <?php echo article_author(); ?>
					on <?php echo article_date(); ?></em></h5>
			<hr>
			<?php echo article_html(); ?>
		</article>
	</section>
</div>
<div class="comments">
	<section class="container">
		<!-- Comment List -->
		<?php if (comments_open() && has_comments()) { ?>
			<h3><?php echo __('comments.comments'); ?></h3>
			<?php while (comments()) { ?>
				<div class="row">
					<div class="col-sm-2 text-right"><b><?php echo comment_date(); ?></b></div>
					<div class="col-sm-10"><?php echo comment_text(); ?></div>
				</div>

			<?php } ?>
			<hr>
		<?php } ?>

		<!-- Comment Form -->
		<?php if (comments_open()): ?>
			<form id="comment" class="form-horizontal" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?><!-- Error notifications -->
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label"><?php echo __('comments.name'); ?></label>
					<div class="col-sm-10">
						<?php echo comment_form_input_name('placeholder="' . __('comments.name_explain') . '" class="form-control"'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label"><?php echo __('comments.email'); ?></label>
					<div class="col-sm-10">
						<?php echo comment_form_input_email('placeholder="' . __('comments.email_explain') . '" class="form-control"'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="text" class="col-sm-2 control-label"><?php echo __('comments.text'); ?></label>
					<div class="col-sm-10">
						<?php echo comment_form_input_text('placeholder="' . __('comments.text_missing') . '" class="form-control"'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<?php echo comment_form_button($text = __('global.submit'), $extra = 'class="btn btn-default"'); ?>
					</div>
				</div>
			</form>
		<?php endif; ?>
	</section>
</div>
<?php theme_include('footer'); ?>
