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
        'rewrite'               => array('with_front' => false, 'slug' => 'clientes'),
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

    /* PUBLICACIONES */
    $labels_pub = array(
        'name'                  => _x( 'Publicaciones', 'Post Type General Name', 'qanat' ),
        'singular_name'         => _x( 'Publicación', 'Post Type Singular Name', 'qanat' ),
        'menu_name'             => __( 'Publicaciones', 'qanat' ),
        'name_admin_bar'        => __( 'Publicación', 'qanat' ),
        'archives'              => __( 'Archivo de Publicaciones', 'qanat' ),
        'attributes'            => __( 'Atributos de Publicación', 'qanat' ),
        'parent_item_colon'     => __( 'Publicación Padre:', 'qanat' ),
        'all_items'             => __( 'Todas las Publicaciones', 'qanat' ),
        'add_new_item'          => __( 'Agregar Nueva Publicación', 'qanat' ),
        'add_new'               => __( 'Agregar Nueva', 'qanat' ),
        'new_item'              => __( 'Nueva Publicación', 'qanat' ),
        'edit_item'             => __( 'Editar Publicación', 'qanat' ),
        'update_item'           => __( 'Actualizar Publicación', 'qanat' ),
        'view_item'             => __( 'Ver Publicación', 'qanat' ),
        'view_items'            => __( 'Ver Publicaciones', 'qanat' ),
        'search_items'          => __( 'Buscar Publicación', 'qanat' ),
        'not_found'             => __( 'No hay resultados', 'qanat' ),
        'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'qanat' ),
        'featured_image'        => __( 'Imagen de Publicación', 'qanat' ),
        'set_featured_image'    => __( 'Colocar Imagen de Publicación', 'qanat' ),
        'remove_featured_image' => __( 'Remover Imagen de Publicación', 'qanat' ),
        'use_featured_image'    => __( 'Usar como Imagen de Publicación', 'qanat' ),
        'insert_into_item'      => __( 'Insertar en Publicación', 'qanat' ),
        'uploaded_to_this_item' => __( 'Cargado en esta Publicación', 'qanat' ),
        'items_list'            => __( 'Listado de Publicaciones', 'qanat' ),
        'items_list_navigation' => __( 'Navegación del Listado de Publicaciones', 'qanat' ),
        'filter_items_list'     => __( 'Filtro del Listado de Publicaciones', 'qanat' ),
    );
    $args_pub = array(
        'label'                 => __( 'Publicación', 'qanat' ),
        'description'           => __( 'Publicaciones disponibles para descarga', 'qanat' ),
        'labels'                => $labels_pub,
        'supports'              => array( 'title', 'editor' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'rewrite'               => array('with_front' => false, 'slug' => 'publicaciones'),
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-megaphone',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'publicaciones', $args_pub );


    $labels_act = array(
        'name'                  => _x( 'Actividades', 'Post Type General Name', 'qanat' ),
        'singular_name'         => _x( 'Actividad', 'Post Type Singular Name', 'qanat' ),
        'menu_name'             => __( 'Actividades', 'qanat' ),
        'name_admin_bar'        => __( 'Actividad', 'qanat' ),
        'archives'              => __( 'Archivo de Actividades', 'qanat' ),
        'attributes'            => __( 'Atributos de Actividad', 'qanat' ),
        'parent_item_colon'     => __( 'Actividad Padre:', 'qanat' ),
        'all_items'             => __( 'Todas las Actividades', 'qanat' ),
        'add_new_item'          => __( 'Agregar Nueva Actividad', 'qanat' ),
        'add_new'               => __( 'Agregar Nueva', 'qanat' ),
        'new_item'              => __( 'Nueva Actividad', 'qanat' ),
        'edit_item'             => __( 'Editar Actividad', 'qanat' ),
        'update_item'           => __( 'Actualizar Actividad', 'qanat' ),
        'view_item'             => __( 'Ver Actividad', 'qanat' ),
        'view_items'            => __( 'Ver Actividades', 'qanat' ),
        'search_items'          => __( 'Buscar Actividad', 'qanat' ),
        'not_found'             => __( 'No hay resultados', 'qanat' ),
        'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'qanat' ),
        'featured_image'        => __( 'Imagen de Actividad', 'qanat' ),
        'set_featured_image'    => __( 'Colocar Imagen de Actividad', 'qanat' ),
        'remove_featured_image' => __( 'Remover Imagen de Actividad', 'qanat' ),
        'use_featured_image'    => __( 'Usar como Imagen de Actividad', 'qanat' ),
        'insert_into_item'      => __( 'Insertar en Actividad', 'qanat' ),
        'uploaded_to_this_item' => __( 'Cargada a esta Actividad', 'qanat' ),
        'items_list'            => __( 'Listado de Actividades', 'qanat' ),
        'items_list_navigation' => __( 'Navegación del Listado de Actividades', 'qanat' ),
        'filter_items_list'     => __( 'Filtro del Listado de Actividades', 'qanat' ),
    );
    $args_act = array(
        'label'                 => __( 'Actividad', 'qanat' ),
        'description'           => __( 'Actividades de la Empresa', 'qanat' ),
        'labels'                => $labels_act,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'tipo-actividades' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'rewrite'               => array('with_front' => false, 'slug' => 'actividades'),
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-analytics',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'actividades', $args_act );

    // Register Custom Taxonomy

    $labels_tipo = array(
        'name'                       => _x( 'Tipos de Actividades', 'Taxonomy General Name', 'qanat' ),
        'singular_name'              => _x( 'Tipo de Actividad', 'Taxonomy Singular Name', 'qanat' ),
        'menu_name'                  => __( 'Tipos de Actividades', 'qanat' ),
        'all_items'                  => __( 'Agregar Todos', 'qanat' ),
        'parent_item'                => __( 'Tipo Padre', 'qanat' ),
        'parent_item_colon'          => __( 'Tipo Padre:', 'qanat' ),
        'new_item_name'              => __( 'Nuevo Tipo', 'qanat' ),
        'add_new_item'               => __( 'Agregar Nuevo Tipo', 'qanat' ),
        'edit_item'                  => __( 'Editar Tipo', 'qanat' ),
        'update_item'                => __( 'Actualizar Tipo', 'qanat' ),
        'view_item'                  => __( 'Ver Tipo', 'qanat' ),
        'separate_items_with_commas' => __( 'Separar tipos por comas', 'qanat' ),
        'add_or_remove_items'        => __( 'Agregar o Remover tipos', 'qanat' ),
        'choose_from_most_used'      => __( 'Escoger de los más usados', 'qanat' ),
        'popular_items'              => __( 'Tipos Populares', 'qanat' ),
        'search_items'               => __( 'Buscar tipos', 'qanat' ),
        'not_found'                  => __( 'no hay resultados', 'qanat' ),
        'no_terms'                   => __( 'No hay Tipos', 'qanat' ),
        'items_list'                 => __( 'Listado de Tipos', 'qanat' ),
        'items_list_navigation'      => __( 'Navegación del Listado de Tipos', 'qanat' ),
    );
    $args_tipo = array(
        'labels'                     => $labels_tipo,
        'hierarchical'               => true,
        'public'                     => true,
        'rewrite'                    => array( 'slug' => 'tipo-actividades' ),
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'tipo-actividades', array( 'actividades' ), $args_tipo );

}
add_action( 'init', 'qanat_custom_post_type', 0 );


/* --------------------------------------------------------------
/* CUSTOM LOCATIONS IMAGE
-------------------------------------------------------------- */
add_action('tipo-actividades_add_form_fields', 'add_term_image', 99, 2);
function add_term_image($taxonomy){
?>
<tr class="form-field term-group">
    <th scope="row">
        <label for="txt_upload_image">Upload an Image</label>
    </th>
    <td class="actividad-image-container">
        <input type="hidden" name="actividad_img" id="actividad_img" value="">
        <input type="button" id="upload_image_btn" class="button" value="Upload an Image" />
    </td>
</tr>
<?php
}


add_action('created_tipo-actividades', 'save_term_image', 10, 2);
function save_term_image($term_id, $tt_id) {
    if (isset($_POST['actividad_img']) && '' !== $_POST['actividad_img']){
        add_term_meta($term_id, 'term_image', $_POST['actividad_img'], true);
    }
}


add_action('tipo-actividades_edit_form_fields', 'edit_image_upload', 99, 2);
function edit_image_upload($term, $taxonomy) {
    // get current group
    $txt_upload_image = get_term_meta($term->term_id, 'term_image', true);
?>
<tr class="form-field term-group">
    <th scope="row">
        <label for="txt_upload_image">Upload an Image</label>
    </th>
    <td class="actividad-image-container">
        <input type="hidden" name="actividad_img" id="actividad_img" value="">
        <?php $image_id = get_term_meta($term->term_id, 'term_image', true); ?>
        <?php if ($image_id != '') { ?>
        <?php $image_url = wp_get_attachment_image_src($image_id); ?>
        <img src="<?php echo $image_url[0]; ?>" alt="image" width="100" height="100" />
        <?php } ?>
        <input type="button" id="upload_image_btn" class="button" value="Upload an Image" />
    </td>
</tr>

<?php
}

add_action('edited_tipo-actividades', 'update_image_upload', 10, 2);
function update_image_upload($term_id, $tt_id) {
    if (isset($_POST['actividad_img']) && '' !== $_POST['actividad_img']){
        update_term_meta($term_id, 'term_image', $_POST['actividad_img']);
    }
}
