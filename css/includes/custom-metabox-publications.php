<?php 
$cmb_publications_metabox = new_cmb2_box( array(
    'id'            => $prefix . 'publications_metabox',
    'title'         => esc_html__( 'Publicaciones: Información Extra', 'qanat' ),
    'object_types'  => array( 'publicaciones' ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$group_field_id = $cmb_publications_metabox->add_field( array(
    'id'          => $prefix . 'publications_group',
    'type'        => 'group',
    'description' => __( 'Publicaciones', 'qanat' ),
    'options'     => array(
        'group_title'       => __( 'Archivo {#}', 'qanat' ),
        'add_button'        => __( 'Agregar Archivo', 'qanat' ),
        'remove_button'     => __( 'Remover Archivo', 'qanat' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( 'Esta seguro de eliminar este Archivo?', 'qanat' )
    )
) );

$cmb_publications_metabox->add_group_field( $group_field_id, array(
    'id'   => 'title',
    'name'      => esc_html__( 'Texto Descriptivo', 'qanat' ),
    'desc'      => esc_html__( 'Ingresa un texto descriptivo a este Item', 'qanat' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_publications_metabox->add_group_field( $group_field_id, array(
    'id'   => 'pub_file',
    'name'      => esc_html__( 'Archivo', 'qanat' ),
    'desc'      => esc_html__( 'Carga un Archivo para este Archivo', 'qanat' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Archivo', 'qanat' ),
    )
) );
