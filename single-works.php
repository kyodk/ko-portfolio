<?php
/**
 * The template for displaying works single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ko-portfolio
 */

get_header();
?>
<?php
	$category     = get_post_meta( $post->ID, 'category', true );
	$design       = get_post_meta( $post->ID, 'design', true );
	$coding       = get_post_meta( $post->ID, 'coding', true );
	$url          = get_post_meta( $post->ID, 'url', true );
	$github       = get_post_meta( $post->ID, 'github', true );
	$githubplugin = get_post_meta( $post->ID, 'githubplugin', true );
	$tools        = get_post_meta( $post->ID, 'tools', true );
	$media        = get_post_meta( $post->ID, 'media', true );
	$allowed_html = array(
		'br' => array(),
	)
	?>

	<main id="primary" class="site-main main">
		<article>
			<section class="content-block">
				<div class="container">
					<div class="row mb-5 text-center">
						<div class="col-12">
							<h2 class="font-weight-bold"><?php the_title(); ?></h2>
							<p>
							<?php
							echo esc_html( $category );
							?>
							</p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 mb-5">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						?>
						</div>
						<div class="col-12 col-md-10 mb-4">
							<p class="mb-4 font-weight-bold ltr-spacing">Design</p>
							<p>
							<?php
							echo wp_kses( nl2br( $design ), $allowed_html );
							?>
							</p>
						</div>
						<div class="col-12 col-md-10 mb-5">
							<p class="mb-4 font-weight-bold ltr-spacing">Coding</p>
							<p>
							<?php
							echo wp_kses( nl2br( $coding ), $allowed_html );
							?>
							</p>
						</div>
						<div class="col-12 col-md-10">
							<dl class="row mb-4">
								<dt class="col-12 col-md-2 mb-2 mb-md-0 ltr-spacing">URL</dt>
								<dd class="col-12 col-md-10">
									</a>
									<a class="link-st" href="
									<?php
									echo esc_url( $url );
									?>
									" target="_blank" rel="noopener noreferrer">
									<?php
									echo esc_url( $url );
									?>
									</a>
								</dd>
							</dl>
							<dl class="row mb-4">
								<dt class="col-12 col-md-2 mb-2 mb-md-0 ltr-spacing">GitHub</dt>
								<dd class="col-12 col-md-10">
									<a class="link-st" href="
									<?php
									echo esc_url( $github );
									?>
									" target="_blank" rel="noopener noreferrer">
									<?php
									echo esc_url( $github );
									?>
									</a>
								</dd>
							</dl>
							<?php if ( $githubplugin ) : ?>
								<dl class="row mb-4">
									<dt class="col-12 col-md-2 mb-2 mb-md-0 ltr-spacing">Plugin</dt>
									<dd class="col-12 col-md-10">
										<a class="link-st" href="
										<?php
										echo esc_url( $githubplugin );
										?>
										" target="_blank" rel="noopener noreferrer">
										<?php
										echo esc_url( $githubplugin );
										?>
										</a>
									</dd>
								</dl>
							<?php endif; ?>
							<dl class="row">
								<dt class="col-12 col-md-2 mb-1 ltr-spacing">Tools</dt>
								<dd class="col-12 col-md-10">
								<?php
								$usedtools = explode( ',', $tools );
								foreach ( $usedtools as $usedtool ) {
									echo '<li class="badge badge-accent mr-2 mb-2">' . esc_html( $usedtool ) . '</li>';
								}
								?>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</section>
			<section class="content-block bg-main">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-8 mb-7">
							<img src="
							<?php
							echo esc_url( $media );
							?>
							"/>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-6 text-left pager-fs">
						<?php previous_post_link( '%link', '« %title' ); ?>
						</div>
						<div class="col-6 text-right pager-fs">
						<?php next_post_link( '%link', '%title »' ); ?>
						</div>
					</div>
				</div>
			</section>
		</article>
	</main><!-- /main -->

<?php
get_footer();
