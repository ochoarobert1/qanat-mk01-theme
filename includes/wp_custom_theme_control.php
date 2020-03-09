<?php
/* --------------------------------------------------------------
CUSTOM AREA FOR OPTIONS DATA - SANTIAGO DUARTE
-------------------------------------------------------------- */

add_action( 'customize_register', 'qanat_customize_register' );

function qanat_customize_register( $wp_customize ) {
    /* IDENTITY */
    $wp_customize->add_setting(
        'qanat_identity_settings[custom_white_logo]',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_white_logo', array(
        'label'    => __('Logo Blanco', 'qanat'),
        'description' => __( 'Cargue un logo en Blanco para el Home', 'qanat' ),
        'section' => 'title_tagline',
        'settings' => 'qanat_identity_settings[custom_white_logo]',
    ) ) );

    /* HEADER */
    $wp_customize->add_section('qanat_header_settings', array(
        'title'    => __('Cabecera', 'qanat'),
        'description' => __('Opciones para los elementos de la cabecera', 'qanat'),
        'priority' => 30
    ));

    $wp_customize->add_setting('qanat_header_settings[phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico', 'qanat'),
        'description' => __( 'Agregar número telefonico con formato para el link', 'qanat' ),
        'section'  => 'qanat_header_settings',
        'settings' => 'qanat_header_settings[phone_number]'
    ));

    $wp_customize->add_setting('qanat_header_settings[formatted_phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'formatted_phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico [Visible]', 'qanat'),
        'description' => __( 'Agregar número telefónico en un formato visible para el público', 'qanat' ),
        'section'  => 'qanat_header_settings',
        'settings' => 'qanat_header_settings[formatted_phone_number]'
    ));

    $wp_customize->add_setting('qanat_header_settings[email_address]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'email_address', array(
        'type' => 'text',
        'label'    => __('Correo Electrónico', 'qanat'),
        'description' => __( 'Agregar direccion de Correo Electrónico', 'qanat' ),
        'section'  => 'qanat_header_settings',
        'settings' => 'qanat_header_settings[email_address]'
    ));

    // FOOTER
    $wp_customize->add_section('qanat_footer_settings', array(
        'title'    => __('Footer', 'qanat'),
        'description' => __('Opciones del pie de página', 'qanat'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('qanat_footer_settings[custom_html]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));



    /* SOCIAL */
    $wp_customize->add_section('qanat_social_settings', array(
        'title'    => __('Redes Sociales', 'qanat'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'qanat'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('qanat_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'qanat_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'qanat_social_settings',
        'settings' => 'qanat_social_settings[facebook]',
        'label' => __( 'Facebook', 'qanat' ),
    ) );

    $wp_customize->add_setting('qanat_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'qanat_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'qanat_social_settings',
        'settings' => 'qanat_social_settings[twitter]',
        'label' => __( 'Twitter', 'qanat' ),
    ) );

    $wp_customize->add_setting('qanat_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'qanat_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'qanat_social_settings',
        'settings' => 'qanat_social_settings[instagram]',
        'label' => __( 'Instagram', 'qanat' ),
    ) );

    $wp_customize->add_setting('qanat_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'qanat_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'qanat_social_settings',
        'settings' => 'qanat_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'qanat' ),
    ) );

    $wp_customize->add_setting('qanat_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'qanat_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'qanat_social_settings',
        'settings' => 'qanat_social_settings[youtube]',
        'label' => __( 'YouTube', 'qanat' ),
    ) );


    $wp_customize->add_section('qanat_cookie_settings', array(
        'title'    => __('Cookies', 'qanat'),
        'description' => __('Opciones de Cookies', 'qanat'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('qanat_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'qanat'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'qanat_cookie_settings',
        'settings' => 'qanat_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('qanat_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'qanat_cookie_settings',
        'settings' => 'qanat_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'qanat' ),
    ) );

}

function qanat_sanitize_url( $url ) {
    return esc_url_raw( $url );
}
