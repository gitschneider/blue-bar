<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4"><p>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>.<br>All rights reserved.
				</p></div>
			<div class="col-md-4"><a href="<?php echo rss_url(); ?>">RSS</a></div>
			<div class="col-md-4">Powered by <a href="https://anchorcms.com" title="Powered by Anchor CMS">Anchor
					CMS</a> and <a href="https://webschneider.org"
			                       title="Design by webschneider.org">webschneider.org</a></div>
		</div>
	</div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo theme_url('js/jquery.min.js'); ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo theme_url('js/jquery.min.js');?>"><\/script>')</script>
<script src="<?php echo theme_url('js/bootstrap.min.js'); ?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo theme_url('js/ie10-viewport-bug-workaround.js'); ?>"></script>
</body>
</html>