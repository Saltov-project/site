<?php get_header(); ?>
<!-- container start -->
	<div id="container">
		<?php include(TEMPLATEPATH . '/sidebar_left.php'); ?>
<!-- content start -->
		<div id="content">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmetadata">Рубрика <?php the_category(', ') ?> | <?php the_time('F jS, Y') ?></div>
				<div class="entry">
					<?php the_excerpt(); ?>
					<div class="endline"></div>
				</div>
				<?php the_tags('<p class="tags"><strong>Теги:</strong> ', ', ', '</p>'); ?>
				<div class="bookmark"><?php include(TEMPLATEPATH . '/bookmark.php'); ?></div>
				<div class="comments"><a href="<?php comments_link(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/read_comments.gif" width="179" height="15" alt="Read Comments" /></a></div>
			</div>
			<?php endwhile; ?>
			<?php wp_pagenavi(); ?>
			<?php else : ?>
				<div class="notfound"><p>Content Not Found!</p><p>Please try again.</p></div>
			<?php endif; ?>
		</div>
<!-- content end -->
<?php get_sidebars(); ?>
		<div class="endline"></div>
	</div>
<!-- container end -->
<?php get_footer(); ?>