<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Fara
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://www.3daviesgraphics.co.ke/', '3daviesgraphics' ) ); ?>" rel="nofollow"><?php printf( __( 'Proudly powered by %s', 'fara' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Proudly Powered by: %2$s by %1$s.', '3daviesgraphics' )'<a href="http://www.3daviesgraphics.co.ke" rel="nofollow">Fara</a>' ); ?>
			<a href="#" class="scrolltop"><i class="fa fa-chevron-up"></i>&nbsp;<?php _e('Back to top ', 'fara'); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
