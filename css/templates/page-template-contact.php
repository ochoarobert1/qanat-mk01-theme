<?php
/**
* Template Name: Template - Contacto
*
* @package qanat
* @subpackage qanat-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'qt_page_banner_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="main-banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <h1><?php the_title(); ?></h1>
        </section>
        <div class="contact-colored-line-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        </div>
        <section class="contact-maps-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="contact-maps-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row align-items-center">
                            <div class="contact-map-embed col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?php echo get_post_meta(get_the_ID(), 'qt_contact_embed_map', true); ?>
                                </div>
                            </div>
                            <div class="contact-map-info col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/marker.png" alt="Marker" class="img-fluid">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_contact_direction', true)); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php get_template_part('templates/contact-part'); ?>
    </div>
</main>
<?php get_footer(); ?>
