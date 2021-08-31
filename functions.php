<?php
/**
 * ko-portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ko-portfolio
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ko_portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ko_portfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ko-portfolio, use a find and replace
		 * to change 'ko-portfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ko-portfolio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ko-portfolio' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ko_portfolio_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ko_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ko_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ko_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'ko_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ko_portfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ko-portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ko-portfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ko_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ko_portfolio_scripts() {
	wp_enqueue_style( 'google-webfont-damion', 'https://fonts.googleapis.com/css2?family=Damion&display=swap', array(), '1.0' );
	wp_enqueue_style( 'google-webfont-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', array(), '1.0' );
	wp_enqueue_style( 'ko-portfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ko-portfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ko-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'ko-portfolio-script', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ko_portfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Disable auto paragraph.
 */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * Author archive redirect.
 */
function author_archive_redirect() {
	if ( is_author() ) {
		wp_safe_redirect( home_url() );
		exit;
	}
}
add_action( 'template_redirect', 'author_archive_redirect' );

/**
 * Custom post types.
 */
function create_post_type() {
	register_post_type(
		'works',
		array(
			'labels'        => array(
				'name'          => 'Works',
				'all_items'     => 'Works一覧',
			),
			'public'        => true,
			'menu_position' => 5,
			'show_in_rest'  => true,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
			),
		)
	);
}
add_action( 'init', 'create_post_type' );

/**
 * Custom_fields.
 */
/** Custom fields meta box. */
function add_custom_fields_meta_box() {
	add_meta_box(
		'custom_setting',
		'Custom fields',
		'show_fields_meta_box',
		'works',
		'normal'
	);
}
add_action( 'add_meta_boxes', 'add_custom_fields_meta_box' );

/** Show fields meta box. */
function show_fields_meta_box() {
	global $post;
	$category = get_post_meta( $post->ID, 'category', true );
	$design   = get_post_meta( $post->ID, 'design', true );
	$coding   = get_post_meta( $post->ID, 'coding', true );
	$url      = get_post_meta( $post->ID, 'url', true );
	$github   = get_post_meta( $post->ID, 'github', true );
	$image    = get_post_meta( $post->ID, 'image', true );
	?>

	<input type="hidden" name="meta_box_nonce" value="<?php echo esc_attr( wp_create_nonce( basename( __FILE__ ) ) ); ?>">
	<p>
		<label for="category">Category</label>
		<br>
		<input type="text" name="category" id="category" class="regular-text" value="<?php echo esc_attr( $category ); ?>">
	</p>
	<p>
		<label for="design">Design</label>
		<br>
		<textarea name="design" id="design" rows="5" cols="30" style="width:500px;"><?php echo esc_textarea( $design ); ?></textarea>
	</p>
	<p>
		<label for="coding">Coding</label>
		<br>
		<textarea name="coding" id="coding" rows="5" cols="30" style="width:500px;"><?php echo esc_textarea( $coding ); ?></textarea>
	</p>
	<p>
		<label for="url">URL</label>
		<br>
		<input type="text" name="url" id="url" class="regular-text" value="<?php echo esc_url( $url ); ?>">
	</p>
	<p>
		<label for="github">GitHub</label>
		<br>
		<input type="text" name="github" id="github" class="regular-text" value="<?php echo esc_url( $github ); ?>">
	</p>
	<p>
		<label for="image">Image</label>
		<br>
		<textarea name="image" id="image" rows="5" cols="30" style="width:500px;"><?php echo esc_textarea( $image ); ?></textarea>
	</p>
	<?php 
}

/**
 * Save fields meta.
 *
 * @param int $post_id The ID of the post being saved.
 */
function save_fields_meta( $post_id ) {
	$allowed_html = array(
		'br' => array(),
	);

	if ( ! isset( $_POST['meta_box_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['meta_box_nonce'] ) ), basename( __FILE__ ) ) ) {
		return $post_id;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	if ( 'page' === isset( $_POST['post_type'] ) ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	if ( isset( $_POST['category'] ) ) {
		$sanitize_category = sanitize_text_field( wp_unslash( $_POST['category'] ) );
		update_post_meta( $post_id, 'category', $sanitize_category );
	} else {
		delete_post_meta( $post_id, 'category' );
	}

	if ( isset( $_POST['design'] ) ) {
		$kses_design = wp_kses( wp_unslash( $_POST['design'] ), $allowed_html );
		update_post_meta( $post_id, 'design', $kses_design );
	} else {
		delete_post_meta( $post_id, 'design' );
	}
	if ( isset( $_POST['coding'] ) ) {
		$kses_coding = wp_kses( wp_unslash( $_POST['coding'] ), $allowed_html );
		update_post_meta( $post_id, 'coding', $kses_coding );
	} else {
		delete_post_meta( $post_id, 'coding' );
	}
	if ( isset( $_POST['url'] ) ) {
		$sanitize_url = sanitize_text_field( wp_unslash( $_POST['url'] ) );
		update_post_meta( $post_id, 'url', $sanitize_url );
	} else {
		delete_post_meta( $post_id, 'url' );
	}
	if ( isset( $_POST['github'] ) ) {
		$sanitize_github = sanitize_text_field( wp_unslash( $_POST['github'] ) );
		update_post_meta( $post_id, 'github', $sanitize_github );
	} else {
		delete_post_meta( $post_id, 'github' );
	}
	if ( isset( $_POST['image'] ) ) {
		$sanitize_image = sanitize_text_field( wp_unslash( $_POST['image'] ) );
		update_post_meta( $post_id, 'image', $sanitize_image );
	} else {
		delete_post_meta( $post_id, 'image' );
	}
}
add_action( 'save_post', 'save_fields_meta' );
