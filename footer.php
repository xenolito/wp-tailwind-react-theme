<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?>

	</div><!-- #content -->

	<?php
	if ( is_customize_preview() ) {
		echo '<div id="awps-footer-control" style="margin-top:-30px;position:absolute;"></div>';
	}
	?>

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">

		<div class="site-info">
			<?php
				printf(
					'<a %s href="%s">%s</a>',
					is_customize_preview() ? 'id="awps-footer-copy-control"' : '',
					esc_url( __( 'https://pictau.com', 'awps' ) ),
					esc_html( Awps\Api\Customizer::text( 'awps_footer_copy_text' ) )
				);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
