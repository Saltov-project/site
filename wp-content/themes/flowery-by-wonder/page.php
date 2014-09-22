<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <div class="post-content">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </div>
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
  <?php endwhile; endif; ?>

  </div><!--/content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>