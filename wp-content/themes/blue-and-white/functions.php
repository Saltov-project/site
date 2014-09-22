<?php
if ( ! isset( $content_width ) )
	$content_width = 500;
add_action( 'after_setup_theme', 'blueandwhite_setup' );
if ( ! function_exists( 'blueandwhite_setup' ) ):
function blueandwhite_setup() {
	add_theme_support( 'automatic-feed-links' );
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'blueandwhite' ),
	) );
}
endif;

function blueandwhite_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'blueandwhite_page_menu_args' );

function blueandwhite_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'blueandwhite_excerpt_length' );

function blueandwhite_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Читать далее <span class="meta-nav">&rarr;</span>', 'blueandwhite' ) . '</a>';
}

function blueandwhite_auto_excerpt_more( $more ) {
	return ' &hellip;' . blueandwhite_continue_reading_link();
}
add_filter( 'excerpt_more', 'blueandwhite_auto_excerpt_more' );

function blueandwhite_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= blueandwhite_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'blueandwhite_custom_excerpt_more' );

function blueandwhite_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'blueandwhite_remove_gallery_css' );

if ( ! function_exists( 'blueandwhite_comment' ) ) :

function blueandwhite_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'blueandwhite' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'blueandwhite' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php

				printf( __( '%1$s at %2$s', 'blueandwhite' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Редактировать)', 'blueandwhite' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'blueandwhite' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'blueandwhite'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

function blueandwhite_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'blueandwhite' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'blueandwhite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li><li class="Under-the-list-sidebar"></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'blueandwhite' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'blueandwhite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li><li class="Under-the-list-sidebar"></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'blueandwhite' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'blueandwhite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li><li class="Under-the-list-footer"></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'blueandwhite' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'blueandwhite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li><li class="Under-the-list-footer"></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'blueandwhite' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'blueandwhite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li><li class="Under-the-list-footer"></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'blueandwhite' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'blueandwhite' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li><li class="Under-the-list-footer"></li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'blueandwhite_widgets_init' );

function blueandwhite_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'blueandwhite_remove_recent_comments_style' );

if ( ! function_exists( 'blueandwhite_posted_on' ) ) :

function blueandwhite_posted_on() {
	printf( __( '%2$s', 'blueandwhite' ),
		'meta-prep meta-prep-author',
		sprintf( '<div class="entry-date">%3$s</div>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date('<p>M</p><b>d</b>')
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'blueandwhite' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'blueandwhite_posted_in' ) ) :

function blueandwhite_posted_in() {

	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'Эта запись была опубликована в рубрике %1$s и скрыта под меткой %2$s. Постоянная ссылка на <a href="%3$s" title="Постоянная ссылка %4$s" rel="bookmark">запись</a>', 'blueandwhite' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'Эта запись была опубликована в рубрике %1$s. Постоянная ссылка на <a href="%3$s" title="Постоянная ссылка %4$s" rel="bookmark">запись</a>', 'blueandwhite' );
	} else {
		$posted_in = __( 'Постоянная ссылка на <a href="%3$s" title="Постоянная ссылка %4$s" rel="bookmark">запись</a>', 'blueandwhite' );
	}

	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;