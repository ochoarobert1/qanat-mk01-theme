<?php 
/* PAGE MAIN METABOX */
$cmb_client_metabox = new_cmb2_box( array(
    'id'            => $prefix . 'clients_metabox',
    'title'         => esc_html__( 'Clientes: Información Básica', 'qanat' ),
    'object_types'  => array( 'clientes' ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_client_metabox->add_field( array(
    'id'      => $prefix . 'client_logo_bn',
    'name'      => esc_html__( 'Logo en Blanco / Negro', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese un logo en Blanco / Negro para el cliente', 'qanat' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar logo Blanco / Negro', 'qanat' ),
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

$cmb_client_metabox->add_field( array(
    'id'      => $prefix . 'client_url',
    'name'      => esc_html__( 'URL del Cliente', 'qanat' ),
    'desc'      => esc_html__( 'Ingrese la URL oficial del cliente', 'qanat' ),
    'type'    => 'text_url'
) );
