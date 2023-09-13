<?php
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ko-portfolio
 */

get_header();
?>

	<main id="primary" class="site-main main">
		<!-- jumbotron -->
		<div class="jumbotron mx-md-5">
			<div class="container text-center">
				<p class="display-4 text-white">Hi! I'm Kayo Odaka!</p>
				<p class="fs-4 text-white">A Front-End Developer</p>
			</div>
		</div><!-- /jumbotron -->

		<!-- works -->
		<section class="content-block" id="works">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="fw-bold mb-6 ltr-spacing">Works</h2>
					</div>
				</div>
				<div class="row sa-target sa-hop">
					<div class="works-width position-relative shadow-sm col-12 col-md-6 px-0 mb-5 mx-auto">
						<a href="<?php echo esc_url( get_page_link( 241 ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-dictionary.jpg" alt="English Dictionary" class="img-fluid">
							<div class="mask position-absolute top-0 start-0">
								<p class="mask__number text-white fw-bold mb-md-2 mb-lg-4">01</p>
								<h3 class="mask__title text-white mb-4">English Dictionary</h3>
								<p class="text-white mb-5">HTML / CSS / JavaScript / React / React Boostrap / React Router / Context API / Firebase</p>
								<p class="text-end text-white">View more ></p>
							</div>
						</a>
					</div>
					<div class="works-width position-relative shadow-sm col-12 col-md-6 px-0 mb-5 mx-auto">
						<a href="<?php echo esc_url( get_page_link( 52 ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-todoapp.jpg" alt="Todoアプリ" class="img-fluid">
							<div class="mask position-absolute top-0 start-0">
								<p class="mask__number text-white fw-bold mb-md-2 mb-lg-4">02</p>
								<h3 class="mask__title text-white mb-4">Todoアプリ</h3>
								<p class="text-white mb-5">HTML / CSS / Bootstrap / JavaScript / MVC / Firebase</p>
								<p class="text-end text-white">View more ></p>
							</div>
						</a>
					</div>
					<div class="works-width position-relative shadow-sm col-12 col-md-6 px-0 mb-5 mb-md-0 mx-auto">
						<a href="<?php echo esc_url( get_page_link( 26 ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-landingpage.jpg" alt="Web制作サービスのWebサイト" class="img-fluid">
							<div class="mask position-absolute top-0 start-0">
								<p class="mask__number text-white fw-bold mb-md-2 mb-lg-4">03</p>
								<h3 class="mask__title text-white mb-4">Web制作サービスのWebサイト</h3>
								<p class="text-white mb-5">HTML / CSS / Sass / BEM / JavaScript / Firebase</p>
								<p class="text-end text-white">View more ></p>
							</div>
						</a>
					</div>
					<div class="works-width position-relative shadow-sm col-12 col-md-6 px-0 mx-auto">
						<a href="<?php echo esc_url( get_page_link( 35 ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-wordpress.jpg" alt="ポートフォリオサイト" class="img-fluid">
							<div class="mask position-absolute top-0 start-0">
								<p class="mask__number text-white fw-bold mb-md-2 mb-lg-4">04</p>
								<h3 class="mask__title text-white mb-4">ポートフォリオサイト</h3>
								<p class="text-white mb-5">HTML / CSS / Sass / Bootstrap / JavaScript / jQuery / WordPress (Incl. Plugin development)</p>
								<p class="text-end text-white">View more ></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section><!-- /works -->

		<!-- about -->
		<section class="content-block bg-primary bg-opacity-10" id="about">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="fw-bold mb-6 ltr-spacing">About</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-7 pe-5 mb-5 mb-md-0 sa-target sa-left">
						<h3 class="fs-5 fw-bold mb-5 ltr-spacing">Profile</h3>
						<p>
						愛知県生まれ。<br>
						大学在学中に中国留学を経験し、卒業後も中国で働く道を選びました。<br>
						入社研修で、HTMLを学んだことをきっかけにWebの魅力に惹きつけられ、社内向けWebマガジン制作メンバーとして、企画取材からコーディングまで幅広く担当しました。<br>
						退職後は、様々な国の文化や人々に触れたいという思いから夫婦で世界を周り、帰国後はフリーランスのフロントエンドエンジニアとして活動しました。
						</p>
					</div>
					<div class="col-12 col-md-5 sa-target sa-right">
						<h3 class="fs-5 fw-bold mb-5 ltr-spacing">Skills</h3>
						<ul class="ps-0 m-0">
							<li class="badge bg-secondary me-1 mb-2">HTML</li>
							<li class="badge bg-secondary me-1 mb-2">CSS</li>
							<li class="badge bg-secondary me-1 mb-2">Sass</li>
							<li class="badge bg-secondary me-1 mb-2">BEM</li>
							<li class="badge bg-secondary me-1 mb-2">Bootstrap</li>
							<li class="badge bg-secondary me-1 mb-2">JavaScript</li>
							<li class="badge bg-secondary me-1 mb-2">jQuery</li>
							<li class="badge bg-secondary me-1 mb-2">React</li>
							<li class="badge bg-secondary me-1 mb-2">React Testing Library</li>
							<li class="badge bg-secondary me-1 mb-2">Jest</li>
							<li class="badge bg-secondary me-1 mb-2">WordPress</li>
							<li class="badge bg-secondary me-1 mb-2">PHP</li>
							<li class="badge bg-secondary me-1 mb-2">Firebase</li>
							<li class="badge bg-secondary me-1 mb-2">Git / GitHub</li>
							<li class="badge bg-secondary me-1 mb-2">Photoshop</li>
							<li class="badge bg-secondary me-1 mb-2">Illustrator</li>
							<li class="badge bg-secondary me-1 mb-2">Adobe XD</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- /about -->

		<!-- contact-form -->
		<section class="content-block" id="contact">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="fw-bold mb-6 ltr-spacing">Contact</h2>
					</div>
				</div>
				<div class="row justify-content-center sa-target">
					<div class="col-12 col-md-10 col-lg-8">
					<?php echo do_shortcode( '[contact-form-7 id="133" title="お問合せフォーム" html_id="form"]' ); ?>
					</div>
				</div>
			</div>
		</section><!-- /contact-form -->

		<!-- modal -->
		<div class="modal fade" id="ModalCenterSuccess" tabindex="-1" aria-labelledby="ModalCenterSuccessTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content border-0">
					<div class="modal-header border-0 bg-secondary">
						<h5 class="modal-title text-white" id="ModalCenterSuccessTitle">送信完了</h5>
					</div>
					<div class="modal-body">
						<p>
						お問い合わせありがとうございます。<br><br>
						確認メールを送信いたしました。<br>
						数分お待ちいただいても届かない場合は、迷惑メールフォルダをご確認下さい。<br>
						確認メールが見つからない場合は、メールアドレスに間違いがある可能性がございます。メールアドレスを正しく入力して再度お試し下さい。
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success text-white" data-bs-dismiss="modal">閉じる</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="ModalCenterFail" tabindex="-1" aria-labelledby="ModalCenterFailTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content border-0">
					<div class="modal-header border-0 bg-secondary">
						<h5 class="modal-title text-white" id="ModalCenterFailTitle">送信失敗</h5>
					</div>
					<div class="modal-body">
						<p>
						送信に失敗しました。<br>
						時間をおいて試すか、インターネット接続を確認してからもう一度お試し下さい。
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">閉じる</button>
					</div>
				</div>
			</div>
		</div><!-- /modal -->
	</main><!-- #main -->

<?php
get_footer();
