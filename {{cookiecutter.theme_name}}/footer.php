<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( '{{cookiecutter.theme_name}}_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '{{cookiecutter.theme_name}}' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '{{cookiecutter.theme_name}}' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
