<?php get_header(); ?>
<?php $page_helper = get_page_by_path('publicaciones'); ?>

<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php $bg_banner_id = get_post_meta($page_helper->ID, 'qt_page_banner_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="main-banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <h1><?php _e('Publicaciones', 'qanat'); ?></h1>
        </section>

        <section class="publicaciones-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row no-gutters">
                <?php while (have_posts()) : the_post(); ?>
                <article data-aos="fade" class="publicaciones-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="publications-item-wrapper col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">

                                <div class="publications-item-info-wrapper col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <hr>
                                </div>

                                <?php $array_files = get_post_meta(get_the_ID(), 'qt_publications_group', true); ?>
                                <?php $count_files = count($array_files); ?>
                                <?php $i = 1; ?>
                                <?php if (!empty($array_files)) : ?>
                                <?php foreach ($array_files as $item_file) { ?>
                                <div class="publications-item-file col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="custom-row">
                                        <div><a href="<?php echo $item_file['pub_file']; ?>">0<?php echo $i; ?></a></div>
                                        <div>
                                            <a href="<?php echo $item_file['pub_file']; ?>" target="_blank"><?php echo apply_filters('the_content', $item_file['title']); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; } ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
