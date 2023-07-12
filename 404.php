<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ko-portfolio
 */

get_header();
?>

	<main id="primary" class="site-main flex-grow-1 d-flex align-items-center justify-content-center">
		<section class="content-block">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<h1 class="h2 font-weight-bold mb-5">ページが見つかりませんでした</h1>
						<p class=" mb-5">指定したURLが間違っているか、お探しのページが削除された可能性があります。</p>
						<a class="btn btn-accent btn-lg px-btn py-3 py-md-2"  href="<?php echo esc_url( home_url( '/' ) ); ?>">Top</a>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
