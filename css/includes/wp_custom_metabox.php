<?php
function ed_metabox_include_front_page( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'] ) ) {
        return $display;
    }

    if ( 'front-page' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return false;
    }

    // Get ID of page set as front page, 0 if there isn't one
    $front_page = get_option( 'page_on_front' );

    // there is a front page set and we're on it!
    return $post_id == $front_page;
}
add_filter( 'cmb2_show_on', 'ed_metabox_include_front_page', 10, 2 );

add_action( 'cmb2_admin_init', 'qanat_register_custom_metabox' );
function qanat_register_custom_metabox() {
    $prefix = 'qt_';

    $array_sliders = array();
    /* SLIDER REVOLUTION */
    if (class_exists('RevSlider')) {
        $slider = new RevSlider();
        $objSliders = $slider->get_sliders();
        if (!empty($objSliders)) {
            foreach( $objSliders as $slider ){
                $array_sliders[$slider->alias] = $slider->title;
            }
        }
    }
    /* SLIDER REVOLUTION */

    /* PAGE MAIN METABOX */
    $cmb_page_metabox = new_cmb2_box( array(
        'id'            => $prefix . 'page_metabox',
        'title'         => esc_html__( 'Página: Información Básica', 'qanat' ),
        'object_types'  => array( 'page' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_page_metabox->add_field( array(
        'id'      => $prefix . 'page_banner_bg',
        'name'      => esc_html__( 'Imagen para Banner', 'qanat' ),
        'desc'      => esc_html__( 'Ingrese un fondo apropiado para el Banner', 'qanat' ),
        'type'    => 'file',
        'options' => array(
            'url' => false
        ),
        'text'    => array(
            'add_upload_file_text' => esc_html__( 'Cargar Fondo de Banner', 'qanat' ),
        ),
        'query_args' => array(
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png'
            )
        ),
        'preview_size' => 'medium'
    ) );

    /* HOME SLIDER */
    $cmb_home_slider = new_cmb2_box( array(
        'id'            => $prefix . 'home_slider',
        'title'         => esc_html__( 'Home: Slider Revolution', 'qanat' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on' => array( 'key' => 'front-page', 'value' => '' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_home_slider->add_field( array(
        'id'         => $prefix . 'slider_rev',
        'name'       => esc_html__( 'Slider Revolution', 'qanat' ),
        'desc'       => esc_html__( 'Seleccione el Slider a usar en el Home', 'qanat' ),
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => '',
        'options'          => $array_sliders
    ) );

    /* HOME CLIENTS */
    $cmb_home_clients = new_cmb2_box( array(
        'id'            => $prefix . 'home_clients',
        'title'         => esc_html__( 'Home: Clientes', 'qanat' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on' => array( 'key' => 'front-page', 'value' => '' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_home_clients->add_field( array(
        'id'      => $prefix . 'home_clients_bg',
        'name'      => esc_html__( 'Imagen de Fondo', 'qanat' ),
        'desc'      => esc_html__( 'Ingrese un fondo apropiado para la sección', 'qanat' ),
        'type'    => 'file',
        'options' => array(
            'url' => false
        ),
        'text'    => array(
            'add_upload_file_text' => esc_html__( 'Cargar Fondo de Sección', 'qanat' ),
        ),
        'query_args' => array(
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png'
            )
        ),
        'preview_size' => 'medium'
    ) );

    $cmb_home_clients->add_field( array(
        'id'         => $prefix . 'home_clients_title',
        'name'       => esc_html__( 'Título de Sección', 'qanat' ),
        'desc'       => esc_html__( 'Ingrese un título descriptivo para esta sección', 'qanat' ),
        'type'       => 'text'
    ) );

    $cmb_home_hero = new_cmb2_box( array(
        'id'            => $prefix . 'home_hero',
        'title'         => esc_html__( 'Home: Descanso', 'qanat' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on' => array( 'key' => 'front-page', 'value' => '' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );


    $cmb_home_hero->add_field( array(
        'id'      => $prefix . 'home_hero_content',
        'name'      => esc_html__( 'Texto principal', 'qanat' ),
        'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'qanat' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

    $cmb_home_hero->add_field( array(
        'id'         => $prefix . 'home_hero_video',
        'name'       => esc_html__( 'Video de Sección', 'qanat' ),
        'desc'       => esc_html__( 'Ingrese el codigo para el video de este descanso', 'qanat' ),
        'type'       => 'textarea_code'
    ) );

    $cmb_home_blog = new_cmb2_box( array(
        'id'            => $prefix . 'home_blog',
        'title'         => esc_html__( 'Home: Publicaciones', 'qanat' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on' => array( 'key' => 'front-page', 'value' => '' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_home_blog->add_field( array(
        'id'         => $prefix . 'home_blog_title',
        'name'       => esc_html__( 'Título de Sección', 'qanat' ),
        'desc'       => esc_html__( 'Ingrese un título descriptivo para esta sección', 'qanat' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

    $cmb_home_blog->add_field( array(
        'id'      => $prefix . 'home_blog_content',
        'name'      => esc_html__( 'Texto principal', 'qanat' ),
        'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'qanat' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

    $cmb_home_contact = new_cmb2_box( array(
        'id'            => $prefix . 'home_contact',
        'title'         => esc_html__( 'Home: Contacto', 'qanat' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on' => array( 'key' => 'front-page', 'value' => '' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_home_contact->add_field( array(
        'id'      => $prefix . 'home_contact_bg',
        'name'      => esc_html__( 'Imagen de Fondo', 'qanat' ),
        'desc'      => esc_html__( 'Ingrese un fondo apropiado para la sección', 'qanat' ),
        'type'    => 'file',
        'options' => array(
            'url' => false
        ),
        'text'    => array(
            'add_upload_file_text' => esc_html__( 'Cargar Fondo de Sección', 'qanat' ),
        ),
        'query_args' => array(
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png'
            )
        ),
        'preview_size' => 'medium'
    ) );

    $cmb_home_contact->add_field( array(
        'id'      => $prefix . 'home_contact_logo',
        'name'      => esc_html__( 'Logo de Sección', 'qanat' ),
        'desc'      => esc_html__( 'Ingrese un logo apropiado para la sección', 'qanat' ),
        'type'    => 'file',
        'options' => array(
            'url' => false
        ),
        'text'    => array(
            'add_upload_file_text' => esc_html__( 'Cargar Logo de Sección', 'qanat' ),
        ),
        'query_args' => array(
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png'
            )
        ),
        'preview_size' => 'medium'
    ) );


    /* QUIENES SOMOS */
    require_once('custom-metabox-about.php');
    require_once('custom-metabox-clientes.php');
    require_once('custom-metabox-calidad.php');
    require_once('custom-metabox-publications.php');
    require_once('custom-metabox-contact.php');

}
