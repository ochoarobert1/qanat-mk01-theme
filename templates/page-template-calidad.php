<?php
/**
* Template Name: Template - Calidad
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
        <section class="calidad-item-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $array_calidad = get_post_meta(get_the_ID(), 'qt_calidad_group', true); ?>
            <?php if (!empty($array_calidad)) { ?>
            <?php $i = 1; ?>
            <?php foreach ($array_calidad as $calidad_item) { ?>
            <?php if ($calidad_item['url'] == '') { ?>
            <?php $data_url = $calidad_item['internal']; ?>
            <?php } else { ?>
            <?php $data_url = $calidad_item['url']; ?>
            <?php } ?>
            <article data-url="<?php echo $data_url; ?>" id="section-<?php echo $i; ?>" class="calidad-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $calidad_item['icon']; ?>);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="calidad-item-wrapper col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                            <?php if ($calidad_item['url'] == '') { ?>
                            <?php if ($calidad_item['internal'] == '') { ?>
                            <h2><?php echo $calidad_item['title']; ?></h2>
                            <?php } else { ?>
                            <a href="<?php echo $calidad_item['internal']; ?>" title="<?php echo $calidad_item['title']; ?>" target="_blank">
                                <h2><?php echo $calidad_item['title']; ?></h2>
                            </a>
                            <?php } ?>
                            <?php } else { ?>
                            <a href="<?php echo $calidad_item['url']; ?>" title="<?php echo $calidad_item['title']; ?>" target="_blank">
                                <h2><?php echo $calidad_item['title']; ?></h2>
                            </a>
                            <?php } ?>
                            <?php echo apply_filters('the_content', $calidad_item['description']); ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php $i++; } ?>
            <?php } ?>
        </section>
    </div>
</main>
<?php get_footer(); ?>
