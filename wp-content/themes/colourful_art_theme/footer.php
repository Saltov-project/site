<?php  
$content = ob_get_clean();
echo art_parse_template(art_page_template(), art_page_variables(array('content'=> $content)));
?>
    <div id="wp-footer">
	        <p class="art-page-footer"><?php 
/* This theme is powered by genericwpthemes.com, please do NOT remove the comment or anything below. */
			wp_theme_GPL_credits();
/* This theme is powered by genericwpthemes.com, please do NOT remove the comment or anything below. */ ?></p>
		<?php wp_footer(); ?>
	        <!-- <?php printf(__('%d запросов. %s секунды.', THEME_NS), get_num_queries(), timer_stop(0, 3)); ?> -->
    </div>
</body>
</html>

