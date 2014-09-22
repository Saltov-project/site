<?php get_header(); ?>
  <div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); $loopcounter++; ?> 
	<div class="post" id="post-<?php the_ID(); ?>">
	  <div class="entry">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> <span class="post-views"><b>Автор :</b> <font color="#000000"> <?php the_author() ?> </font> - <b>Комментарии: </b><?php comments_popup_link('Нет комментариев ', '1 Комментарий ', '% Комментариев '); ?> - <?php the_time('F jS, Y') ?></span>
        <div class="post-content">
			<?php the_content('Читать далее  &raquo;'); ?>
</div>
</div>
</div>
<div class="googlef">
<?php if ($loopcounter <= 1) { include (TEMPLATEPATH . '/ad.php'); } ?>
</div>


	
	<?php endwhile; ?>
	<div class="navigation">
	 <span class="navigation-b"></span><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
	
	<?php else : ?>
	
		<h2 class="center">Не найдено</h2>
		<p class="center">Извините, ничего не найдено.</p>
		
  <?php endif; ?>
	
  </div><!--/content -->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>
