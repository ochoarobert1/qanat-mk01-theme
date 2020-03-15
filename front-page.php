<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta(get_the_ID(), 'qt_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <section data-aos="fade" class="the-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-content main-text-size col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $bg_hero_id = get_post_meta(get_the_ID(), 'qt_home_clients_bg_id', true); ?>
        <?php $bg_hero = wp_get_attachment_image_src($bg_hero_id, 'full', false); ?>
        <section data-aos="fade" class="the-clients col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_hero[0]; ?>);">
            <div class="container">
                <div class="row">
                    <div class="clients-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 class="main-text-title"><?php echo get_post_meta(get_the_ID(), 'qt_home_clients_title', true); ?></h2>

                        <div class="clients-slider-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="clients-slider owl-carousel owl-theme">
                                <?php $array_clients = new WP_Query(array('post_type' => 'clientes', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date')); ?>
                                <?php if ($array_clients->have_posts()) : ?>
                                <?php while ($array_clients->have_posts()) : $array_clients->the_post(); ?>
                                <div class="home-client-item">
                                    <?php $logo_client_id = get_post_meta(get_the_ID(), 'qt_client_logo_bn_id', true); ?>
                                    <?php $logo_client = wp_get_attachment_image_src($logo_client_id, 'full', false); ?>
                                    <img src="<?php echo $logo_client[0]; ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid img-home-client-logo">

                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-aos="fade" class="the-hero col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="hero-content main-text-size col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_home_hero_content', true)); ?>
                    </div>

                </div>
            </div>
            <?php /* ?>
            <div class="hero-video col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="video-content col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <?php echo get_post_meta(get_the_ID(), 'qt_home_hero_video', true); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php */ ?>
        </section>
        <section data-aos="fade" class="the-blog col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="blog-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="blog-title-content main-text-title col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                            <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_home_blog_title', true)); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="main-text-size col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_home_blog_content', true)); ?>
                            <a href="<?php echo home_url('/publicaciones'); ?>" class="btn btn-md btn-blog"><?php _e('Leer Más', 'qanat'); ?></a>
                        </div>
                        <div class="act-home-container col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="card-columns custom-card-columns">
                                <?php $args = array('post_type' => 'actividades', 'posts_per_page' => 6, 'order' => 'DESC', 'orderby' => 'date',  'meta_query' => array( array( 'key' => 'qt_featured', 'value' => 'on', 'compare' => '=' ))); ?>
                                <?php $array_act = new WP_Query($args); ?>
                                <?php if ($array_act->have_posts()) : ?>
                                <?php while ($array_act->have_posts()) : $array_act->the_post(); ?>
                                <div class="card custom-card">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid card-img-top')); ?>
                                    <div class="custom-card-body">
                                        <h2><?php the_title(); ?></h2>
                                        <a data-actid="<?php echo get_the_ID(); ?>" class="btn-modal"><?php _e('Ver Más', 'qanat'); ?></a>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
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
