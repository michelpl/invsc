<?php
/**
 * Invsc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Invsc
 * @since 1.0
 */

/**
 * Invsc only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function invsc_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/invsc
	 * If you're building a theme based on Invsc, use a find and replace
	 * to change 'invsc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'invsc' );

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

	add_image_size( 'invsc-featured-image', 2000, 1200, true );

	add_image_size( 'invsc-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'invsc' ),
		'social' => __( 'Social Links Menu', 'invsc' ),
        'sub-menu-1'    => __( 'Sub Menu 1', 'invsc' ),
        'sub-menu-2'    => __( 'Sub Menu 2', 'invsc' ),
        'sub-menu-3'    => __( 'Sub Menu 3', 'invsc' ),
        'sub-menu-4'    => __( 'Sub Menu 4', 'invsc' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', invsc_fonts_url() ) );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'sidebar-3' => array(
				'text_about',
				'search',
			),
            'phone' => array(),
            'address' => array(),
            'mail' => array(),
            'verse' => array(),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-sandwich}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'invsc' ),
				'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'invsc' ),
				'file' => 'assets/images/sandwich.jpg',
			),
			'image-coffee' => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'invsc' ),
				'file' => 'assets/images/coffee.jpg',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'top' => array(
				'name' => __( 'Top Menu', 'invsc' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name' => __( 'Social Links Menu', 'invsc' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters Invsc array of starter content.
	 *
	 * @since Invsc 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'invsc_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'invsc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function invsc_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( invsc_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter Invsc content width of the theme.
	 *
	 * @since Invsc 1.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'invsc_content_width', $content_width );
}
add_action( 'template_redirect', 'invsc_content_width', 0 );

/**
 * Register custom fonts.
 */
function invsc_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'invsc' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Invsc 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function invsc_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'invsc-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'invsc_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function invsc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'invsc' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'invsc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'invsc' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'invsc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'invsc' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'invsc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'name'          => __( 'Telefones', 'invsc' ),
        'id'            => 'phone',
        'description'   => __( 'Adicione os telefones da igreja aqui (no máximo 2)', 'invsc' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Endereço', 'invsc' ),
        'id'            => 'address',
        'description'   => __( 'Adicione o endereço da igreja aqui', 'invsc' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Endereços de e-mail', 'invsc' ),
        'id'            => 'email',
        'description'   => __( 'Adicione os e-mails da igreja aqui', 'invsc' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Versículo bíblico', 'invsc' ),
        'id'            => 'verse',
        'description'   => __( 'Adicione um versículo bíblico que será exibido na home', 'invsc' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'invsc_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Invsc 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function invsc_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'invsc' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'invsc_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Invsc 1.0
 */
function invsc_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'invsc_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function invsc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'invsc_pingback_header' );

/**
 * Display custom color CSS.
 */
function invsc_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
?>
	<style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
		<?php echo invsc_custom_colors_css(); ?>
	</style>
<?php }
add_action( 'wp_head', 'invsc_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function invsc_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'invsc-fonts', invsc_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'invsc-style', get_stylesheet_uri() );

	// Load the dark colorscheme.
	if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
		wp_enqueue_style( 'invsc-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'invsc-style' ), '1.0' );
	}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'invsc-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'invsc-style' ), '1.0' );
		wp_style_add_data( 'invsc-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'invsc-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'invsc-style' ), '1.0' );
	wp_style_add_data( 'invsc-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'invsc-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$invsc_l10n = array(
		'quote'          => invsc_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'invsc-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$invsc_l10n['expand']         = __( 'Expand child menu', 'invsc' );
		$invsc_l10n['collapse']       = __( 'Collapse child menu', 'invsc' );
		$invsc_l10n['icon']           = invsc_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
	}

	wp_enqueue_script( 'invsc-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

	wp_localize_script( 'invsc-skip-link-focus-fix', 'invscScreenReaderText', $invsc_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'invsc_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Invsc 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function invsc_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'invsc_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Invsc 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function invsc_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'invsc_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Invsc 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function invsc_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'invsc_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Invsc 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function invsc_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'invsc_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Invsc 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function invsc_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'invsc_widget_tag_cloud_args' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

/**
 * Eventos
 */
function wpt_event_post_type() {
    $labels = array(
        'name'               => __( 'Calendário' ),
        'singular_name'      => __( 'Evento' ),
        'add_new'            => __( 'Adicionar Novo Evento' ),
        'add_new_item'       => __( 'Adicionar Novo Evento' ),
        'edit_item'          => __( 'Editar Evento' ),
        'new_item'           => __( 'Adicionar Novo Evento' ),
        'view_item'          => __( 'Visualizar Evento' ),
        'search_items'       => __( 'Procurar Evento' ),
        'not_found'          => __( 'Nenhum evento encontrado' ),
        'not_found_in_trash' => __( 'Nenhum evento na lixeira' )
    );
    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
    );
    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'events' ),
        'has_archive'          => true,
        'menu_position'        => 2,
        'menu_icon'            => 'dashicons-calendar-alt',
        'register_meta_box_cb' => 'wpt_add_event_metaboxes',
    );
    register_post_type( 'events', $args );
}
add_action( 'init', 'wpt_event_post_type' );


function wpt_add_event_metaboxes()
{
    add_meta_box(
        'wpt_events_date',
        'Data do evento',
        'wpt_events_date',
        'events',
        'side',
        'default'
    );

    add_meta_box(
        'wpt_events_time',
        'Hora do evento',
        'wpt_events_time',
        'events',
        'side',
        'default'
    );
}

add_action( 'add_meta_boxes', 'add_events_metaboxes' );

function wpt_events_date() {
    global $post;
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    // Get the date data if it's already been entered
    $date = get_post_meta( $post->ID, 'date', true );
    // Output the field
    echo '<input type="date" name="date" value="' . esc_textarea( $date )  . '" class="widefat">';
}

function wpt_events_time() {
    global $post;
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'event_fields' );
    // Get the time data if it's already been entered
    $time = get_post_meta( $post->ID, 'time', true );
    // Output the field
    echo '<input type="time" name="time" value="' . esc_textarea( $time )  . '" class="widefat">';
}

function wpt_save_events_date( $post_id, $post ) {
    // Return if the user doesn't have edit permissions.
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    // Verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times.
    if ( ! isset( $_POST['date'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    // Now that we're authenticated, time to save the data.
    // This sanitizes the data from the field and saves it into an array $events_meta.
    $events_meta['date'] = esc_textarea( $_POST['date'] );
    // Cycle through the $events_meta array.
    // Note, in this example we just have one item, but this is helpful if you have multiple.
    foreach ( $events_meta as $key => $value ) :
        // Don't store custom data twice
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( get_post_meta( $post_id, $key, false ) ) {
            // If the custom field already has a value, update it.
            update_post_meta( $post_id, $key, $value );
        } else {
            // If the custom field doesn't have a value, add it.
            add_post_meta( $post_id, $key, $value);
        }
        if ( ! $value ) {
            // Delete the meta key if there's no value
            delete_post_meta( $post_id, $key );
        }
    endforeach;
}
add_action( 'save_post', 'wpt_save_events_date', 1, 2 );

function wpt_save_events_time( $post_id, $post ) {
    // Return if the user doesn't have edit permissions.
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    // Verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times.
    if ( ! isset( $_POST['time'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    // Now that we're authenticated, time to save the data.
    // This sanitizes the data from the field and saves it into an array $events_meta.
    $events_meta['time'] = esc_textarea( $_POST['time'] );
    // Cycle through the $events_meta array.
    // Note, in this example we just have one item, but this is helpful if you have multiple.
    foreach ( $events_meta as $key => $value ) :
        // Don't store custom data twice
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( get_post_meta( $post_id, $key, false ) ) {
            // If the custom field already has a value, update it.
            update_post_meta( $post_id, $key, $value );
        } else {
            // If the custom field doesn't have a value, add it.
            add_post_meta( $post_id, $key, $value);
        }
        if ( ! $value ) {
            // Delete the meta key if there's no value
            delete_post_meta( $post_id, $key );
        }
    endforeach;
}
add_action( 'save_post', 'wpt_save_events_time', 1, 2 );


/**
 * Videos
 */


function wpt_video_post_type() {
    $labels = array(
        'name'               => __( 'Vídeos' ),
        'singular_name'      => __( 'Vídeo' ),
        'add_new'            => __( 'Adicionar Novo Vídeo' ),
        'add_new_item'       => __( 'Adicionar Novo Vídeo do Youtube' ),
        'edit_item'          => __( 'Editar Vídeo' ),
        'new_item'           => __( 'Adicionar Novo Vídeo' ),
        'view_item'          => __( 'Visualizar Vídeo' ),
        'search_items'       => __( 'Procurar Vídeo' ),
        'not_found'          => __( 'Nenhum vídeo encontrado' ),
        'not_found_in_trash' => __( 'Nenhum vídeo na lixeira' )
    );
    $supports = array(
        'title',
        'editor',
        'revisions',
    );
    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'vídeos' ),
        'has_archive'          => true,
        'menu_position'        => 2,
        'menu_icon'            => 'dashicons-video-alt3',
        'register_meta_box_cb' => 'wpt_add_video_metaboxes',
    );
    register_post_type( 'videos', $args );
}
add_action( 'init', 'wpt_video_post_type' );


function wpt_add_video_metaboxes()
{
    add_meta_box(
        'wpt_video_link',
        'Link do youtube',
        'wpt_videos_link',
        'videos',
        'side',
        'default'
    );
}

add_action( 'add_meta_boxes', 'add_video_metaboxes' );

function wpt_videos_link() {
    global $post;
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'video_fields' );
    // Get the date data if it's already been entered
    $link = get_post_meta( $post->ID, 'link', true );
    // Output the field
    echo '<input type="text" name="link" value="' . esc_textarea( $link )  . '" class="widefat">';
}

function wpt_save_videos_link( $post_id, $post ) {
    // Return if the user doesn't have edit permissions.
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    // Verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times.
    if ( ! isset( $_POST['link'] ) || ! wp_verify_nonce( $_POST['video_fields'], basename(__FILE__) ) ) {
        return $post_id;
    }
    // Now that we're authenticated, time to save the data.
    // This sanitizes the data from the field and saves it into an array $events_meta.
    $videos_meta['link'] = esc_textarea( $_POST['link'] );
    // Cycle through the $events_meta array.
    // Note, in this example we just have one item, but this is helpful if you have multiple.
    foreach ( $videos_meta as $key => $value ) :
        // Don't store custom data twice
        if ( 'revision' === $post->post_type ) {
            return;
        }
        if ( get_post_meta( $post_id, $key, false ) ) {
            // If the custom field already has a value, update it.
            update_post_meta( $post_id, $key, $value );
        } else {
            // If the custom field doesn't have a value, add it.
            add_post_meta( $post_id, $key, $value);
        }
        if ( ! $value ) {
            // Delete the meta key if there's no value
            delete_post_meta( $post_id, $key );
        }
    endforeach;
}
add_action( 'save_post', 'wpt_save_videos_link', 1, 2 );