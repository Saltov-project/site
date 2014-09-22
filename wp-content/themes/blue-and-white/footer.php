	</div><!-- #main -->
	<div id="foot"></div>
	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php get_sidebar( 'footer' );
?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> </div>
			<!-- #site-info -->

			<div id="site-generator">
				<p>Тема скачена с сайта: <a title="Скачать бесплатную тему для Wordpress" href="http://www.wptheme.us/" target="_blank">Темы для Wordpress</a>.</p>  <p>Благодарность сайту: <a title="видеочат рулетка онлайн" href="http://sheva.com.ua/category/video/" target="_blank">видеочат рулетка</a>.</p>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>