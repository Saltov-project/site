<?php get_header(); ?>

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Не найдено', 'blueandwhite' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Приносим извинения, но запрашиваемая страница не была найдена. Попробуйте воспользоваться поиском.', 'blueandwhite' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>