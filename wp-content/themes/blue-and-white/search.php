<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Результаты поиска для: %s', 'blueandwhite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Ничего не найдено', 'blueandwhite' ); ?></h2>
					<div class="entry-zw">
			<div class="entry-meta">
				<?php blueandwhite_posted_on(); ?>
			</div><!-- .entry-meta -->
					<div class="entry-content">
						<p><?php _e( 'Извините, но по Вашему запросу ничего не было найдено. Попробуйте изменить вид запроса.', 'blueandwhite' ); ?></p>
					</div><!-- .entry-content -->
					</div>
				</div><!-- #post-0 -->
<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
