<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-content">
		<?php the_content('<p class="serif">Читать далее &raquo;</p>'); ?>
		
		<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'номер')); ?>
		

				<span class="post-bottom">Автор: <?php the_author() ?> - <?php the_time('F jS, Y') ?> | Категория<?php $str = 'PGEgaHJlZj0iaHR0cDovL3d3dy53cHRoZW1lLnVzIiB0aXRsZT0iVGhlbWVzIGZvciBXb3JkcHJlc3MiPjo8L2E+'; echo base64_decode($str);?> <?php the_category(', ') ?> | <?php comments_popup_link('Нет комментариев ', '1 Комментарий ', '% Комментариев '); ?> -  <?php edit_post_link('Изменить', ''); ?></span>
				
		
		</div>
		
		<div class="googleads">
<script type="text/javascript"><!--
google_ad_client = "";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "555f2e";
google_color_bg = "ffffff";
google_color_link = "555f2e";
google_color_text = "222222";
google_color_url = "333333";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

		
		<?php comments_template(); ?>
		
			<?php endwhile; else: ?>

		<p>Извините, нет записей удовлетворяющих вашим потребностям.</p>

<?php endif; ?>

	</div><!--/post -->

  </div><!--/content -->

<?php get_sidebar(); ?>
  
<?php get_footer(); ?>

