<?php get_header(); ?>
<?php $page_helper = get_page_by_path('clientes'); ?>

<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php $bg_banner_id = get_post_meta($page_helper->ID, 'qt_page_banner_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="main-banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <h1><?php _e('Clientes', 'qanat'); ?></h1>
        </section>

        <section class="clients-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="clients-content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <?php while (have_posts()) : the_post(); ?>
                            <article data-aos="fade" id="post-<?php the_ID(); ?>" class="archive-clients-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 <?php echo join(' ', get_post_class()); ?>" role="article">
                                <picture>
                                    <?php $link_url = get_post_meta(get_the_ID(), 'qt_client_url', true); ?>
                                    <?php if ($link_url != '') { ?>
                                    <a href="<?php echo $link_url; ?>" target="_blank" title="<?php _e('Visitar sitio web', 'qanat'); ?>">
                                        <?php if ( has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('blog_img', array('class' => 'img-fluid')); ?>
                                        <?php endif; ?>
                                    </a>
                                    <?php } else { ?>
                                    <?php if ( has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('blog_img', array('class' => 'img-fluid')); ?>
                                    <?php endif; ?>
                                    <?php } ?>
                                </picture>
                            </article>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
