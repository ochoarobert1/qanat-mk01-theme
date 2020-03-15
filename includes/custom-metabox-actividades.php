<?php 
$cmb_actividades_metabox = new_cmb2_box( array(
    'id'            => $prefix . 'actividades_metabox',
    'title'         => esc_html__( 'Actividades - Información Extra', 'qanat' ),
    'object_types'  => array( 'actividades' ), 
    'context'    => 'side',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_actividades_metabox->add_field( array(
    'id'      => $prefix . 'featured',
    'name'      => esc_html__( 'Destacar Elemento', 'qanat' ),
    'desc'      => esc_html__( 'Haga click aqui para destacar este elemento y que aparezca en el Home', 'qanat' ),
    'type'    => 'checkbox'
) );