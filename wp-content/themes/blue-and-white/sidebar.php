<?php ?>

		<div id="primary" class="widget-area" role="complementary">
		
	
			<ul class="xoxo">
				
<?php
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Архивы', 'blueandwhite' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Мета', 'blueandwhite' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>
			
			
			<li class="Under-the-list-sidebar"></li>
			
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li><li class="Under-the-list-sidebar"></li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
