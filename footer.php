<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Blog
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>

	<div id="fixedbar">
		<div class="boxfloat">
			<ul id="tips">
				<li><a href="https://www.zeroanalog.ca/testsite/stories/" target="_blank">Read the latest travel story...</a></li>
				<li><a href="https://www.zeroanalog.ca/testsite/start-here/" target="_blank">Find out why I started traveling...</a></li>
			</ul>
		</div>
	</div>

	<div class="site-info foot-text-color">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Travel' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'Travel' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'Travel' ), 'Travel', '<a href="http://zeroanalog.ca">Zero Analog</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(window).scroll(function() {
			if (jQuery('body').height() <= (jQuery(window).height() + jQuery(window).scrollTop())) {
				jQuery('#fixedbar').fadeOut("slow");
			}else{
				jQuery("#fixedbar").fadeIn("slow");
			}
		});
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
