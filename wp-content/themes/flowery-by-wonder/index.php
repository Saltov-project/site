<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : ?>
  
  	<?php while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
<div class="entry">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="post-content">
			<?php the_content('<br/><br/>Читать далее &raquo;'); ?>
			<span class="post-bottom">Автор: <?php the_author() ?> - <?php the_time('F jS, Y') ?> | Категорияc <?php the_category(', ') ?> | <?php comments_popup_link('Нет комментариев ', '1 Комментарий ', '% Комментариев '); ?> -  <?php edit_post_link('Изменить', ''); ?></span>
		</div>
	  </div>
	</div>
	<?php endwhile; ?>
	
	<div class="navigation">
	  <span class="previous-entries"><?php next_posts_link('Предыдущие записи') ?></span> <span class="next-entries"><?php previous_posts_link('Следующие записи') ?></span>
	</div>
	
	<?php else : ?>
	
		<h2 class="center">Не найдено</h2>
		<p class="center">Извините, то что вы ищите, здесь не найдено.</p>
		
  <?php endif; ?>
	
  </div><!--/content -->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>
