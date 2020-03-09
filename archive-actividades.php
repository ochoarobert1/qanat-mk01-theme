<?php get_header(); ?>
<?php $page_helper = get_page_by_path('actividades-helper'); ?>

<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php $bg_banner_id = get_post_meta($page_helper->ID, 'qt_page_banner_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="main-banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <h1><?php _e('Actividades y Referencias', 'qanat'); ?></h1>
        </section>

        <section class="tipo-actividades-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row custom-row-actividades">
                    <?php $array_tipos = get_terms(array('taxonomy' => 'tipo-actividades', 'hide_empty' => false, 'orderby' => 'menu_order' )); ?>
                    <?php if (!empty($array_tipos)) { ?>
                    <?php foreach ($array_tipos as $item_tipos) { ?>
                    <?php $bg_tipo_id = get_term_meta($item_tipos->term_id, 'term_image', true); ?>
                    <?php $bg_tipo = wp_get_attachment_image_src($bg_tipo_id, 'full', false); ?>
                    <article class="tipo-actividades-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_tipo[0]; ?>);">
                        <div class="tipo-actividades-item-wrapper">
                            <a href="<?php echo get_term_link($item_tipos); ?>" title="<?php _e('Ver mas productos de este tipo de actividad', 'qanat'); ?>">
                                <h2><?php echo $item_tipos->name; ?></h2>
                            </a>
                        </div>
                    </article>
                    <?php } ?>
                    <?php } else { ?>
                    <?php $tax = get_custom_terms('tipo-actividades'); ?>
                    <?php if (!empty($tax)) { ?>
                    <?php $count_data = count($tax); ?>
                    <?php for ($i = 1; $i <= $count_data; $i++) { ?>
                    <?php $item_tipos = get_term_by('id', $tax[$i], 'tipo-actividades'); ?>
                    <?php $bg_tipo_id = get_term_meta($item_tipos->term_id, 'term_image', true); ?>
                    <?php $bg_tipo = wp_get_attachment_image_src($bg_tipo_id, 'full', false); ?>
                    <article class="tipo-actividades-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_tipo[0]; ?>);">
                        <div class="tipo-actividades-item-wrapper">
                            <a href="<?php echo get_term_link($item_tipos); ?>" title="<?php _e('Ver mas productos de este tipo de actividad', 'qanat'); ?>">
                                <h2><?php echo $item_tipos->name; ?></h2>
                            </a>
                        </div>
                    </article>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
