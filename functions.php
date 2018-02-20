<?php
/**
 * flabio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flabio
 */

if ( ! function_exists( 'flabio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function flabio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on flabio, use a find and replace
		 * to change 'flabio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'flabio', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'flabio' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'flabio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'flabio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function flabio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'flabio_content_width', 640 );
}
add_action( 'after_setup_theme', 'flabio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flabio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'flabio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'flabio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'flabio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function flabio_scripts() {
	wp_enqueue_style( 'flabio-vendor-style', get_template_directory_uri() . '/styles/vendor.css', array(), '20180116', 'all' );
	wp_enqueue_style( 'flabio-main-style', get_template_directory_uri() . '/styles/main.css', array(), '20180116', 'all' );
	wp_enqueue_style( 'flabio-style', get_stylesheet_uri() );


	wp_enqueue_script( 'flabio-vendor-js', get_template_directory_uri() . '/scripts/vendor.js', array(), '20151216', true );
        wp_enqueue_script( 'flabio-masonry-js', get_template_directory_uri() . '/scripts/masonry.pkgd.js', array(), '20151216', true );
        wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/scripts/loadmore.js', array(), '20151216', true  );
        wp_enqueue_script( '2gis', 'https://maps.api.2gis.ru/2.0/loader.js?pkg=full', array(), '20151216', true  );
	wp_enqueue_script( 'flabio-plugins-js', get_template_directory_uri() . '/scripts/plugins.js', array(), '20151216', true );
	wp_enqueue_script( 'flabio-main-js', get_template_directory_uri() . '/scripts/main.js', array(), '20151216', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'flabio_scripts' );

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

//if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
//function my_jquery_enqueue() {
//    wp_deregister_script('jquery');
////    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
//    wp_enqueue_script('jquery');
//}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

show_admin_bar(false);

function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();
 
			?>
<a class="works__item open-popup-link <?php the_field('type_port'); ?>" href="#popup<?php echo get_the_ID(); ?>">
                <img class="itemse" src="<?php the_field('alt_img'); ?>" alt="<?php the_title(); ?>">
                <div class="items">
                  <img src="<?php the_field('img_port'); ?>" alt="<?php the_title(); ?>">
                </div>
                <figcaption>
                  <div><i class="fa fa-search-plus"></i></div>
                </figcaption>
            </a>
            
            <div id="popup<?php echo get_the_ID(); ?>" class="white-popup mfp-hide">
                <div class="outer"></div>
                <div class="popup__block">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 no-padding">
                      <div class="popup__iframe" style="background-image: url('<?php the_field('bg_port'); ?>');">
                        <div id="browser" class="clear">
                          <div class="page">
                              <iframe class="frame_reset" width="100%" height="100%" src="" frameborder="0"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 no-padding">
                      <div class="popup__items">
                        <div class="popup__full">
                          <a title="Перейти в полноэкранный режим" target="_blank" href="<?php the_field('link_to_work'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/+.png" alt="Full size"></a>
                        </div>
                        <img src="<?php the_field('img_port'); ?>" alt="">
                        <ul class="tabs">                            
                          <?php 
                            $table = get_field( 'link_port' );

                              if ( $table ) {                      

                                      foreach ( $table['body'] as $tr ) {
                              echo '<li>';
                               ?>
                                            <a  href="<?php echo $tr[1]['c']; ?>"><?php echo $tr[0]['c']; ?></a>

                              <?php
                              echo '</li>';

                                      }
                              }
                            ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- popup<?php echo get_the_ID(); ?> -->

<?php
 
		endwhile;
 
	endif;
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


function create_team() {
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => 'Команда',
                'singular_name' => 'Сотрудник',
                'add_new' => 'Добавить нового сотрудника',
                'add_new_item' => 'Добавить нового сотрудник'
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'thumbnail'),
            'menu_icon' => 'dashicons-groups',
            'has_archive' => false
        )
    );
}

add_action( 'init', 'create_team' );

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++





//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

