<?php 
$cmb_about_hero = new_cmb2_box( array(
    'id'            => $prefix . 'about_hero',
    'title'         => esc_html__( 'Quienes Somos: Descanso', 'qanat' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-template-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_about_hero->add_field( array(
    'id'      => $prefix . 'about_hero_bg',
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


$cmb_about_hero->add_field( array(
    'id'      => $prefix . 'about_hero_content',
    'name'      => esc_html__( 'Texto principal', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_about_team = new_cmb2_box( array(
    'id'            => $prefix . 'about_team',
    'title'         => esc_html__( 'Quienes Somos: Equipo', 'qanat' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-template-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_about_team->add_field( array(
    'id'      => $prefix . 'about_team_prev_text',
    'name'      => esc_html__( 'Texto Previo', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto previo al equipo', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$group_field_id = $cmb_about_team->add_field( array(
    'id'          => $prefix . 'about_team_group',
    'type'        => 'group',
    'description' => __( 'Equipo"', 'qanat' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'qanat' ),
        'add_button'        => __( 'Agregar Item', 'qanat' ),
        'remove_button'     => __( 'Remover Item', 'qanat' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( 'Esta seguro de eliminar este Item?', 'qanat' )
    )
) );

$cmb_about_team->add_group_field( $group_field_id, array(
    'id'   => 'icon',
    'name'      => esc_html__( 'Ícono', 'qanat' ),
    'desc'      => esc_html__( 'Carga un ícono para este item', 'qanat' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Ícono', 'qanat' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'avatar'
) );

$cmb_about_team->add_group_field( $group_field_id, array(
    'id'   => 'description',
    'name'      => esc_html__( 'Texto Descriptivo', 'qanat' ),
    'desc'      => esc_html__( 'Ingresa un texto descriptivo a este Item', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_about_team->add_field( array(
    'id'      => $prefix . 'about_team_post_text',
    'name'      => esc_html__( 'Texto Posterior', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto posterior al equipo', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_about_gallery = new_cmb2_box( array(
    'id'            => $prefix . 'about_gallery',
    'title'         => esc_html__( 'Quienes Somos: Galería', 'qanat' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-template-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_about_gallery->add_field( array(
    'id'      => $prefix . 'about_gallery_list',
    'name'      => esc_html__( 'Galería de Imágenes', 'qanat' ),
    'desc'      => esc_html__( 'Galería de Imágenes justo debajo de "Equipo"', 'qanat' ),
    'type' => 'file_list',
    'preview_size' => array( 100, 100 ),
    'query_args' => array( 'type' => 'image' ),
    'text' => array(
        'add_upload_files_text' => esc_html__( 'Agregar o Remover', 'qanat' ),
        'remove_image_text' => esc_html__( 'Remover Imagenes', 'qanat' ),
        'file_text' => esc_html__( 'Imagen', 'qanat' ),
        'file_download_text' => esc_html__( 'Descargar', 'qanat' ),
        'remove_text' => esc_html__( 'Remover', 'qanat' ),
    )
) );
