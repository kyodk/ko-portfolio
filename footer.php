<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ko-portfolio
 */

?>

	<footer id="colophon" class="site-footer py-4 bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-6 text-start">
					<p class="m-0 text-white"><small>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></small></p>
				</div>
				<div class="col-6 text-end">
					<p class="m-0">
						<small><a href="<?php echo esc_url( get_page_link( 3 ) ); ?>" class="text-white link-privacy">Privacy Policy</a></small>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
