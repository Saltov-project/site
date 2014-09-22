<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<div id="sbarbg">
<div id="left">
<ul>
<div id="leftmid">
<div id="lefttop">

    <?php 
    global $notfound;
    if (is_page() and ($notfound != '1')) {
        $current_page = $post->ID;
        while($current_page) {
            $page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
            $current_page = $page_query->post_parent;
        }
        $parent_id = $page_query->ID;
        $parent_title = $page_query->post_title;

        // if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) {
        if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_type != 'attachment'")) {
    ?>
    
    
    <li>
      <h3 class="sidebartitle" ><?php _e('Subpages'); ?></h3>
      <ul class="list-page">
        <?php wp_list_pages('sort_column=menu_order&title_li=&child_of='. $parent_id); ?>
      </ul>
    </li>
<?php } } ?>


<li>
      <h3 class="sidebartitle"><?php _e('Категории'); ?></h3>
      <ul class="list-cat">
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
      </ul>
    </li>
    <li>
      <h3 class="sidebartitle" ><?php _e('Ссылки'); ?></h3>
      <ul class="list-blogroll">
        <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
      <li><a href="http://www.wptheme.us"><abbr title="Blogging Tips & Tricks">Wordpres</abbr></a></li>
     
	  </ul>
    </li>
       <li>
	<h3 class="sidebartitle" ><?php _e('Потоки RSS'); ?></h3>
<ul class="list-rss">
<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication"> Записи в RSS</abbr>'); ?></a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Комментарии в<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
</ul>
</li>
<li>
<h3 class="sidebartitle"><?php _e('Мета'); ?></h3>
   <ul class="list-meta">
     <?php wp_register(); ?>
     <li><?php wp_loginout(); ?></li>
    <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
    <li><a href="http://livejoom.com"><abbr title="Directory Network">Joomla</abbr></a></li>
    <li><?php $str = 'PGEgaHJlZj0iaHR0cDovL3d3dy53cHRoZW1lLnVzIiB0aXRsZT0i0uXs+yDk6/8gV29yZHByZXNzIj4gVGhlbWVzIGZvciBXb3JkcHJlc3M8L2E+'; echo base64_decode ($str); ?></li>
         <?php wp_meta(); ?>
       </ul>
     </li>
</div>
</div>
<div id="leftbot">
</div>
</ul>
</div>
<div id="right">

<ul>
<li> 
  <h4 class="adsenseh" ><?php _e('Записи'); ?></h4>
  	<?php query_posts('showposts=5'); ?>
	<ul class="list-rec">
	<?php while (have_posts()) : the_post(); ?>
	<li>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a><br />
	</li>
              <?php endwhile;?>
            </ul>
           </li>
           
                <li>
      <h4 class="adsenseh" ><?php _e('Архив'); ?></h4>
      <ul class="list-archives">
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li>



<li><ul class="list-archives">
<?php include (TEMPLATEPATH . '/simple_recent_comments.php'); ?>
	<?php if (function_exists('src_simple_recent_comments')) { src_simple_recent_comments(5, 60, '<h4 class="adsenseh" > Комментарии </h4>', ''); } ?>
</ul>
</li>

</ul>
</div>
</div>

<?php endif; ?>
</div>
<!--/sidebar -->