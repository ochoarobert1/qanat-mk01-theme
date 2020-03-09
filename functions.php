<?php

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER CSS
-------------------------------------------------------------- */

require_once('includes/wp_enqueue_styles.php');

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER JS
-------------------------------------------------------------- */

if (!is_admin()) add_action('wp_enqueue_scripts', 'my_jquery_enqueue');
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    if ($_SERVER['REMOTE_ADDR'] == '::1') {
        /*- JQUERY ON LOCAL  -*/
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON LOCAL  -*/
        wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js',  array('jquery'), '3.0.1', false);
    } else {
        /*- JQUERY ON WEB  -*/
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON WEB  -*/
        wp_register_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true);
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
}

/* NOW ALL THE JS FILES */
require_once('includes/wp_enqueue_scripts.php');

/* --------------------------------------------------------------
    ADD CUSTOM WALKER BOOTSTRAP
-------------------------------------------------------------- */

// WALKER COMPLETO TOMADO DESDE EL NAVBAR COLLAPSE
require_once('includes/class-wp-bootstrap-navwalker.php');

/* --------------------------------------------------------------
    ADD CUSTOM WORDPRESS FUNCTIONS
-------------------------------------------------------------- */

require_once('includes/wp_custom_functions.php');

/* --------------------------------------------------------------
    ADD REQUIRED WORDPRESS PLUGINS
-------------------------------------------------------------- */

require_once('includes/class-tgm-plugin-activation.php');
require_once('includes/class-required-plugins.php');

/* --------------------------------------------------------------
    ADD CUSTOM WOOCOMMERCE OVERRIDES
-------------------------------------------------------------- */
if ( class_exists( 'WooCommerce' ) ) {
    require_once('includes/wp_woocommerce_functions.php');
}

/* --------------------------------------------------------------
    ADD JETPACK COMPATIBILITY
-------------------------------------------------------------- */
if ( defined( 'JETPACK__VERSION' ) ) {
    require_once('includes/wp_jetpack_functions.php');
}

/* --------------------------------------------------------------
    ADD THEME SUPPORT
-------------------------------------------------------------- */

load_theme_textdomain( 'qanat', get_template_directory() . '/languages' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ));
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-background',
                  array(
                      'default-image' => '',    // background image default
                      'default-color' => 'ffffff',    // background color default (dont add the #)
                      'wp-head-callback' => '_custom_background_cb',
                      'admin-head-callback' => '',
                      'admin-preview-callback' => ''
                  )
                 );
add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
) );


add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

/* --------------------------------------------------------------
    ADD NAV MENUS LOCATIONS
-------------------------------------------------------------- */

register_nav_menus( array(
    'header_menu' => __( 'Menu Header - Principal', 'qanat' ),
    'footer_menu' => __( 'Menu Footer - Principal', 'qanat' ),
) );

/* --------------------------------------------------------------
    ADD DYNAMIC SIDEBAR SUPPORT
-------------------------------------------------------------- */

add_action( 'widgets_init', 'qanat_widgets_init' );
function qanat_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Principal', 'qanat' ),
        'id' => 'main_sidebar',
        'description' => __( 'Estos widgets seran vistos en las entradas y páginas del sitio', 'qanat' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebars( 4, array(
        'name'          => __('Pie de Página %d', 'qanat'),
        'id'            => 'sidebar_footer',
        'description'   => __('Elementos del Pie de Página', 'qanat'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ) );
}

/* --------------------------------------------------------------
    CUSTOM ADMIN LOGIN
-------------------------------------------------------------- */

function custom_admin_styles() {
    $version_remove = NULL;
    wp_register_style('wp-admin-style', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css', false, $version_remove, 'all');
    wp_enqueue_style('wp-admin-style');
}
add_action('login_head', 'custom_admin_styles');
add_action('admin_init', 'custom_admin_styles');


function dashboard_footer() {
    echo '<span id="footer-thankyou">';
    _e ('Gracias por crear con ', 'qanat' );
    echo '<a href="http://wordpress.org/" target="_blank">WordPress.</a> - ';
    _e ('Tema desarrollado por ', 'qanat' );
    echo '<a href="http://robertochoa.com.ve/?utm_source=footer_admin&utm_medium=link&utm_content=qanat" target="_blank">Robert Ochoa</a></span>';
}
add_filter('admin_footer_text', 'dashboard_footer');

/* --------------------------------------------------------------
    ADD CUSTOM METABOX
-------------------------------------------------------------- */

require_once('includes/wp_custom_metabox.php');

/* --------------------------------------------------------------
    ADD CUSTOM POST TYPE
-------------------------------------------------------------- */

require_once('includes/wp_custom_post_type.php');

/* --------------------------------------------------------------
    ADD CUSTOM THEME CONTROLS
-------------------------------------------------------------- */

require_once('includes/wp_custom_theme_control.php');

/* --------------------------------------------------------------
    ADD CUSTOM IMAGE SIZE
-------------------------------------------------------------- */
if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 9999, 400, true);
}
if ( function_exists('add_image_size') ) {
    add_image_size('avatar', 100, 100, true);
    add_image_size('blog_img', 276, 217, true);
    add_image_size('single_img', 636, 297, true );
}


add_action( 'pre_get_posts', 'qanat_client_archive_page' );
// Show all Projects on Projects Archive Page
function qanat_client_archive_page( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive('clientes') ) {
        $query->set( 'posts_per_page', '-1' );
    }

    if ( !is_admin() && $query->is_main_query() && is_post_type_archive('publicaciones') ) {
        $query->set( 'posts_per_page', '-1' );
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'date' );
    }

    if ( !is_admin() && $query->is_main_query() && is_tax('tipo-actividades') ) {
        $query->set( 'posts_per_page', '-1' );
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'date' );
    }
}


function image_uploader_enqueue() {
    global $typenow;
    if( ($typenow == 'actividades') ) {
        wp_enqueue_media();

        wp_register_script( 'meta-image', get_template_directory_uri() . '/js/admin-functions.js', array( 'jquery' ) );
        wp_localize_script( 'meta-image', 'meta_image',
                           array(
                               'title' => 'Upload an Image',
                               'button' => 'Use this Image',
                           )
                          );
        wp_enqueue_script( 'meta-image' );
    }
}
add_action( 'admin_enqueue_scripts', 'image_uploader_enqueue' );

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}


/* --------------------------------------------------------------
    AJAX SEND CONTACT FORM
-------------------------------------------------------------- */
add_action('wp_ajax_ajax_send_contact_form', 'ajax_send_contact_form_handler');
add_action('wp_ajax_nopriv_ajax_send_contact_form', 'ajax_send_contact_form_handler');

function ajax_send_contact_form_handler() {
    parse_str($_POST['info'], $submit);

    $contact_fields  = array(
        'fullname' => __('Name', 'qanat'),
        'email' => __('Email', 'qanat'),
        'subject' => __('Subject', 'qanat'),
        'message' => __('Message', 'qanat'),
        'politics_acceptance' => ''
    );

    //    if ($_POST["g-recaptcha-response"]) {
    //        $post_data = http_build_query(
    //            array(
    //                'secret' => '6LcxZnMUAAAAAEizWfI29vgsVyezhGxBl0hQJXzQ',
    //                'response' => $_POST['g-recaptcha-response'],
    //                'remoteip' => $_SERVER['REMOTE_ADDR']
    //            ), '', '&');
    //        $opts = array('http' =>
    //                      array(
    //                          'method'  => 'POST',
    //                          'header'  => 'Content-type: application/x-www-form-urlencoded',
    //                          'content' => $post_data
    //                      )
    //                     );
    //        $context  = stream_context_create($opts);
    //        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
    //        $result = json_decode($response);
    //    }
    //    if($result->success == true) {

    global $title;
    $title = __('Qanat Ingeniería - Contact Message', 'qanat');

    ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <?php global $title ?>
    <title><?php echo $title ?></title>
</head>

<body>

    <div style="color:#444; max-width: 600px; border: 1px solid #cccccc; padding: 15px; box-shadow: 0 0 2px #999999; margin: auto; font-family:Open-sans, sans-serif;">
        <h2 style="margin-bottom: 2px; margin-top: 2px;"><?php echo $title ?></h2>
        <p style="margin-top: 2px; margin-bottom: 2px"><?php _e('Sent', 'qanat'); ?>: <?php echo date("Y/m/d h:i") ?></p>
        <hr style="border: solid 2px #444">
        <div style="border: solid 1px #cccccc; background-color: #eeeeee; padding: 15px; margin-top: 15px;">
            <?php
        foreach ($contact_fields as $key => $field) {
            if ($key != 'politics_acceptance') {
                $field_value = apply_filters('mailto', $submit[$key]);
                printf('<p style="margin: 5px 0;"><strong>%s</strong>: %s</p>', $field, $field_value);
            }
        }
                ?>
        </div>
    </div>
</body>

</html>
<?php
    $content = ob_get_clean();

    require_once ABSPATH . WPINC . '/class-phpmailer.php';
    $mail = new PHPMailer();
    $mail->AddAddress("info@qanatingenieria.com");
    $mail->From = 'noreply@' . $_SERVER['SERVER_NAME'];
    $mail->FromName = get_option('blogname');
    $mail->Subject = $title;
    $mail->Body = $content;
    $mail->IsHTML();
    $mail->CharSet = 'utf-8';

    $result = $mail->Send();

    if ($result) {
        echo 'true';
    } else {
        echo 'false';
    }

    wp_die();
}



add_action('wp_ajax_ajax_get_activity_data', 'ajax_get_activity_data_handler');
add_action('wp_ajax_nopriv_ajax_get_activity_data', 'ajax_get_activity_data_handler');

function ajax_get_activity_data_handler() {
    $act_id = $_POST['info'];
    $post_act = get_post($act_id);
    ob_start();
?>
<div class="activity-modal-picture">
    <?php $featured_img_url = get_the_post_thumbnail_url($post_act->ID, 'full');  ?>
    <img src="<?php echo $featured_img_url; ?>" alt="image" class="img-fluid" />
</div>
<div class="activity-modal-content">
    <h2><?php echo $post_act->post_title; ?></h2>
    <?php echo apply_filters('the_content', $post_act->post_content); ?>
</div>
<?php
    $content = ob_get_clean();
    echo $content;
    wp_die();
}


function get_custom_terms($taxonomy) {
    global $wpdb;

    $ordered_array = array();

    $results = $wpdb->get_results( "SELECT {$wpdb->prefix}term_taxonomy.term_taxonomy_id
        from {$wpdb->prefix}term_taxonomy join {$wpdb->prefix}terms on ({$wpdb->prefix}term_taxonomy.term_id = {$wpdb->prefix}terms.term_id)
        where {$wpdb->prefix}term_taxonomy.taxonomy = '{$taxonomy}'", OBJECT );


    foreach ($results as $item) {


        $result_item = $wpdb->get_row( "SELECT * FROM $wpdb->terms WHERE term_id = {$item->term_taxonomy_id}", ARRAY_A );

        $ordered_array[$result_item['menu_order']] = $result_item['term_id'];


    }

    return $ordered_array;
}
