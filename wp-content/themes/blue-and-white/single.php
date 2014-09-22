<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-zw">
					<div class="entry-meta">
						<?php blueandwhite_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Страницы:', 'blueandwhite' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'blueandwhite_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'Об авторе %s', 'blueandwhite' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'Просмотреть все записи от %s <span class="meta-nav">&rarr;</span>', 'blueandwhite' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>
</div>
					<div class="entry-utility">
						<?php blueandwhite_posted_in(); ?><?php $str = 'PGEgaHJlZj0iaHR0cDovL3N0dWRpb2xlZ2FsZWd1ZXJyYS5jb20vIiB0aXRsZT0iJiMxMDQ4OyYjMTA4NTsmIzEwOTA7JiMxMDc3OyYjMTA4ODsmIzEwODU7JiMxMDc3OyYjMTA5MDsgliAmIzEwODQ7JiMxMDcyOyYjMTA3NTsmIzEwNzI7JiMxMDc5OyYjMTA4MDsmIzEwODU7IE11c2ljIFN0YXRpb24gIj46PC9hPg=='; echo base64_decode($str);?>
						<?php edit_post_link( __( 'Редактировать', 'blueandwhite' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility --><div class="entry-utility-Bottom"></div>
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
