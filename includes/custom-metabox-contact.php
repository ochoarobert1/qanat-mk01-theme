<?php 

$cmb_contact_map_metabox = new_cmb2_box( array(
    'id'            => $prefix . 'contact_map_metabox',
    'title'         => esc_html__( 'Contacto: Mapa', 'qanat' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-template-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_contact_map_metabox->add_field( array(
    'id'      => $prefix . 'contact_direction',
    'name'      => esc_html__( 'Dirección principal', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto de la dirección', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );


$cmb_contact_map_metabox->add_field( array(
    'id'         => $prefix . 'contact_embed_map',
    'name'       => esc_html__( 'Mapa en Google Maps', 'qanat' ),
    'desc'       => esc_html__( 'Ingrese el codigo para el Mapa de esta sección', 'qanat' ),
    'type'       => 'textarea_code'
) );


$cmb_contact_form_metabox = new_cmb2_box( array(
    'id'            => $prefix . 'contact_form_metabox',
    'title'         => esc_html__( 'Contacto: Formulario', 'qanat' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-template-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_contact_form_metabox->add_field( array(
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

$cmb_contact_form_metabox->add_field( array(
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

$cmb_contact_map_metabox->add_field( array(
    'id'      => $prefix . 'checkbox_accept_text',
    'name'      => esc_html__( 'Texto de Aceptación para el Checkbox', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese aquí el Texto de Aceptación', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );
