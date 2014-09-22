<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>
<div class="entry-zw">
			<div class="entry-meta">
				<?php blueandwhite_posted_on(); ?>
			</div><!-- .entry-meta -->
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Страницы:', 'blueandwhite' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Редактировать', 'blueandwhite' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
</div>

<div class="entry-utility">
				<span class="comments-link"><?php comments_popup_link( __( 'Оставить комментарий', 'blueandwhite' ), __( '1 комментарий', 'blueandwhite' ), __( '% комментариев', 'blueandwhite' ) ); ?></span>
				<?php edit_post_link( __( 'Редактировать', 'blueandwhite' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><div class="entry-utility-Bottom"></div>
			
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
