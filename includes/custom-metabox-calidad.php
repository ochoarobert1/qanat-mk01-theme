<?php 
$cmb_calidad_metabox = new_cmb2_box( array(
    'id'            => $prefix . 'calidad_metabox',
    'title'         => esc_html__( 'Calidad: Información Extra', 'qanat' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-template-calidad.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$group_field_id = $cmb_calidad_metabox->add_field( array(
    'id'          => $prefix . 'calidad_group',
    'type'        => 'group',
    'description' => __( 'Items', 'qanat' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'qanat' ),
        'add_button'        => __( 'Agregar Item', 'qanat' ),
        'remove_button'     => __( 'Remover Item', 'qanat' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( 'Esta seguro de eliminar este Item?', 'qanat' )
    )
) );

$cmb_calidad_metabox->add_group_field( $group_field_id, array(
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

$cmb_calidad_metabox->add_group_field( $group_field_id, array(
    'id'   => 'title',
    'name'      => esc_html__( 'Título Descriptivo', 'qanat' ),
    'desc'      => esc_html__( 'Ingresa un Título descriptivo a este Item', 'qanat' ),
    'type'    => 'text',
) );

$cmb_calidad_metabox->add_group_field( $group_field_id, array(
    'id'   => 'url',
    'name'      => esc_html__( 'Archivo', 'qanat' ),
    'desc'      => esc_html__( 'Carga un Archivo para este item', 'qanat' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Archivo', 'qanat' ),
    )
) );

$cmb_calidad_metabox->add_group_field( $group_field_id, array(
    'id'      => 'internal',
    'name'      => esc_html__( 'URL Interna', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese la URL si no adjuntará un archivo', 'qanat' ),
    'type'    => 'text_url'
) );


$cmb_calidad_metabox->add_group_field( $group_field_id, array(
    'id'   => 'description',
    'name'      => esc_html__( 'Texto Descriptivo', 'qanat' ),
    'desc'      => esc_html__( 'Ingresa un texto descriptivo a este Item', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );
