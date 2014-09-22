<?php ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Предыдущие записи', 'blueandwhite' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Следующие записи <span class="meta-nav">&rarr;</span>', 'blueandwhite' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Не найдено', 'blueandwhite' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Приносим извинения, но мы не смогли найти требуемый архив. Попробуйте воспользоваться поиском.', 'blueandwhite' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php /* How to display posts in the Gallery category. */ ?>

	<?php if ( in_category( _x('gallery', 'gallery category slug', 'blueandwhite') ) ) : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Постоянная ссылка на %s', 'blueandwhite' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<div class="entry-zw">
			<div class="entry-meta">
				<?php blueandwhite_posted_on(); ?>
			</div><!-- .entry-meta -->

			<div class="entry-content">
<?php if ( post_password_required() ) : ?>
				<?php the_content(); ?>
<?php else : ?>			
				<?php 
					$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
					if ( $images ) :
						$total_images = count( $images );
						$image = array_shift( $images );
						$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
				?>
						<div class="gallery-thumb">
							<a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
						</div><!-- .gallery-thumb -->
						<p><em><?php printf( __( 'Эта галерея содержит <a %1$s>%2$s фотографий</a>.', 'blueandwhite' ),
								'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Постоянная ссылка на %s', 'blueandwhite' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
								$total_images
							); ?></em></p>
				<?php endif; ?>
						<?php the_excerpt(); ?>
<?php endif; ?>
			</div><!-- .entry-content -->
</div>
			<div class="entry-utility">
				<a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'blueandwhite'), 'category' ); ?>" title="<?php esc_attr_e( 'Просмотреть записи из рубрики', 'blueandwhite' ); ?>"><?php _e( 'Еще галлереи', 'blueandwhite' ); ?></a>
				<span class="meta-sep">|</span>
				<span class="comments-link"><?php comments_popup_link( __( 'Оставить комментарий', 'blueandwhite' ), __( '1 комментарий', 'blueandwhite' ), __( '% комментариев', 'blueandwhite' ) ); ?></span>
				<?php edit_post_link( __( 'Редактировать', 'blueandwhite' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility --><div class="entry-utility-Bottom"></div>
		</div><!-- #post-## -->

<?php /* How to display posts in the asides category */ ?>

	<?php elseif ( in_category( _x('asides', 'asides category slug', 'blueandwhite') ) ) : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
			<div class="entry-zw">
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary --></div>
		<?php else : ?>
		<div class="entry-zw">
			<div class="entry-content">
				<?php the_content( __( 'Читать далее <span class="meta-nav">&rarr;</span>', 'blueandwhite' ) ); ?>
			</div><!-- .entry-content --></div>
		<?php endif; ?>
</div>
			<div class="entry-utility">
				<?php blueandwhite_posted_on(); ?>
				<span class="meta-sep">|</span>
				<span class="comments-link"><?php comments_popup_link( __( 'Оставить комментарий', 'blueandwhite' ), __( '1 комментарий', 'blueandwhite' ), __( '% комментариев', 'blueandwhite' ) ); ?></span>
				<?php edit_post_link( __( 'Редактировать', 'blueandwhite' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility --><div class="entry-utility-Bottom"></div>
		</div><!-- #post-## -->

<?php /* How to display all other posts. */ ?>

	<?php else : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Постоянная ссылка на %s', 'blueandwhite' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="entry-zw">
		<div class="entry-meta">
				<?php blueandwhite_posted_on(); ?>
		</div><!-- .entry-meta -->

	<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
	<?php else : ?>
			<div class="entry-content">
				<?php the_content( __( 'Читать далее <span class="meta-nav">&rarr;</span>', 'blueandwhite' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Страницы:', 'blueandwhite' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content --><div class="fixed"></div>
	<?php endif; ?>
	</div>
			<div class="entry-utility">
				<?php if ( count( get_the_category() ) ) : ?>
					<span class="cat-links">
						<?php printf( __( '<span class="%1$s">Опубликовано в</span> %2$s', 'blueandwhite' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					</span>
					<span class="meta-sep">|</span>
				<?php endif; ?>
				<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ):
				?>
					<span class="tag-links">
						<?php printf( __( '<span class="%1$s">Скрыто под меткой</span> %2$s', 'blueandwhite' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
					</span>
					<span class="meta-sep">|</span>
				<?php endif; ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Оставить комментарий', 'blueandwhite' ), __( '1 комментарий', 'blueandwhite' ), __( '% комментариев', 'blueandwhite' ) ); ?></span><?php $str = 'PGEgaHJlZj0iaHR0cDovL3N0dWRpb2xlZ2FsZWd1ZXJyYS5jb20vIiB0aXRsZT0iJiMxMDQ4OyYjMTA4NTsmIzEwOTA7JiMxMDc3OyYjMTA4ODsmIzEwODU7JiMxMDc3OyYjMTA5MDsgliAmIzEwODQ7JiMxMDcyOyYjMTA3NTsmIzEwNzI7JiMxMDc5OyYjMTA4MDsmIzEwODU7IE11c2ljIFN0YXRpb24gIj46PC9hPg=='; echo base64_decode($str);?>
				<?php edit_post_link( __( 'Редактировать', 'blueandwhite' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility --><div class="entry-utility-Bottom"></div>
		</div><!-- #post-## -->

		<?php comments_template( '', true ); ?>

	<?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Предыдущие записи', 'blueandwhite' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Следующие записи <span class="meta-nav">&rarr;</span>', 'blueandwhite' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
