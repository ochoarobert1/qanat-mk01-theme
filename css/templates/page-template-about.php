<?php
/**
* Template Name: Template - Quienes Somos
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

        <section data-aos="fade" class="about-main-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="about-main-info col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="about-main-image col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?>
                    </div>
                </div>
            </div>
        </section>
        
        <section data-aos="fade" class="about-hero-new-section main-text-size col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="about-hero-title col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Equipo', 'qanat'); ?></h2>
                    </div>
                    
                    <div class="about-hero-info col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_about_team_prev_text', true)); ?>
                    </div>

                    <div class="about-team-items-content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="row align-items-end justify-content-center">
                            <?php $array_team = get_post_meta(get_the_ID(), 'qt_about_team_group', true); ?>
                            <?php if (!empty($array_team)) { ?>
                            <?php foreach ($array_team as $team_item) { ?>
                            <div class="about-team-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <?php echo apply_filters('the_content', $team_item['description']); ?>
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="about-hero-post-info col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_about_team_post_text', true)); ?>
                    </div>
                </div>
            </div>
        </section>
<?php $bg_banner_id = get_post_meta(get_the_ID(), 'qt_about_hero_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section data-aos="fade" class="about-hero-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="about-hero-info col-xl-10 col-lg-11 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_about_hero_content', true)); ?>


                    </div>

                </div>
            </div>
        </section>

        <section data-aos="fade" class="about-gallery col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="about-gallery-content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <?php $array_gallery = get_post_meta(get_the_ID(), 'qt_about_gallery_list', true); ?>
                        <?php if (!empty($array_gallery)) { ?>
                        <div class="about-gallery-slider owl-carousel owl-theme">
                            <?php foreach ($array_gallery as $gallery_item) { ?>
                            <div class="about-gallery-item">
                                <img src="<?php echo $gallery_item; ?>" alt="Team" class="img-fluid" />
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
