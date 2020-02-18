<?php

// Register Custom Post Type
function qanat_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Clientes', 'Post Type General Name', 'qanat' ),
        'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'qanat' ),
        'menu_name'             => __( 'Clientes', 'qanat' ),
        'name_admin_bar'        => __( 'Clientes', 'qanat' ),
        'archives'              => __( 'Archivo de Clientes', 'qanat' ),
        'attributes'            => __( 'Atributos de Clientes', 'qanat' ),
        'parent_item_colon'     => __( 'Cliente Padre:', 'qanat' ),
        'all_items'             => __( 'Todos los Clientes', 'qanat' ),
        'add_new_item'          => __( 'Agregar Nuevo Cliente', 'qanat' ),
        'add_new'               => __( 'Agregar Cliente', 'qanat' ),
        'new_item'              => __( 'Nuevo Cliente', 'qanat' ),
        'edit_item'             => __( 'Editar Cliente', 'qanat' ),
        'update_item'           => __( 'Actualizar Cliente', 'qanat' ),
        'view_item'             => __( 'Ver Cliente', 'qanat' ),
        'view_items'            => __( 'Ver Clientes', 'qanat' ),
        'search_items'          => __( 'Buscar Cliente', 'qanat' ),
        'not_found'             => __( 'No hay resultados', 'qanat' ),
        'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'qanat' ),
        'featured_image'        => __( 'Logo del Cliente', 'qanat' ),
        'set_featured_image'    => __( 'Colocar Logo del Cliente', 'qanat' ),
        'remove_featured_image' => __( 'Remover Logo del Cliente', 'qanat' ),
        'use_featured_image'    => __( 'Usar como Logo del Cliente', 'qanat' ),
        'insert_into_item'      => __( 'Insertar en Cliente', 'qanat' ),
        'uploaded_to_this_item' => __( 'Cargado a este Cliente', 'qanat' ),
        'items_list'            => __( 'Listado de Clientes', 'qanat' ),
        'items_list_navigation' => __( 'Navegación del Listado de Clientes', 'qanat' ),
        'filter_items_list'     => __( 'Filtro del Listado de Clientes', 'qanat' ),
    );
    $args = array(
        'label'                 => __( 'Cliente', 'qanat' ),
        'description'           => __( 'Clientes dentro de la Empresa', 'qanat' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'clientes', $args );

}
add_action( 'init', 'qanat_custom_post_type', 0 );
