<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'qanat' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'qanat' ),
        'menu_name'             => __( 'Portafolio', 'qanat' ),
        'name_admin_bar'        => __( 'Portafolio', 'qanat' ),
        'archives'              => __( 'Archivo de Portafolio', 'qanat' ),
        'attributes'            => __( 'Atributos de Portafolio', 'qanat' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'qanat' ),
        'all_items'             => __( 'Todos los Items', 'qanat' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'qanat' ),
        'add_new'               => __( 'Agregar Nuevo', 'qanat' ),
        'new_item'              => __( 'Nuevo Item', 'qanat' ),
        'edit_item'             => __( 'Editar Item', 'qanat' ),
        'update_item'           => __( 'Actualizar Item', 'qanat' ),
        'view_item'             => __( 'Ver Item', 'qanat' ),
        'view_items'            => __( 'Ver Portafolio', 'qanat' ),
        'search_items'          => __( 'Buscar en Portafolio', 'qanat' ),
        'not_found'             => __( 'No hay Resultados', 'qanat' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'qanat' ),
        'featured_image'        => __( 'Imagen Destacada', 'qanat' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'qanat' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'qanat' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'qanat' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'qanat' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'qanat' ),
        'items_list'            => __( 'Listado del Portafolio', 'qanat' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'qanat' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'qanat' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'qanat' ),
        'description'           => __( 'Portafolio de Desarrollos', 'qanat' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
