<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package component
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy Copyright 2017: <a href="<?php echo esc_url( __( 'https://yapapaya.com/', 'component' ) ); ?>"><?php _e( 'Yapapaya', '_ya' ); ?></a>
			<span class="sep"> | </span>
			<?php _e( 'All rights reserved.', 'component' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
