<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta(get_the_ID(), 'qt_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <section class="the-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $bg_hero_id = get_post_meta(get_the_ID(), 'qt_home_clients_bg_id', true); ?>
        <?php $bg_hero = wp_get_attachment_image_src($bg_hero_id, 'full', false); ?>
        <section class="the-clients col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_hero[0]; ?>);">
            <div class="container">
                <div class="row">
                    <div class="clients-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php echo get_post_meta(get_the_ID(), 'qt_home_clients_title', true); ?></h2>
                        array de clients
                    </div>
                </div>
            </div>
        </section>
        <section class="the-hero col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="hero-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_home_hero_content', true)); ?>
                    </div>

                </div>
            </div>
            <div class="hero-video col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="video-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <?php echo get_post_meta(get_the_ID(), 'qt_home_hero_video', true); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="the-blog col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="blog-title col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2><?php echo get_post_meta(get_the_ID(), 'qt_home_blog_title', true); ?></h2>
                    </div>
                    <div class="blog-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-6">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'qt_home_blog_content', true)); ?>
                            </div>
                            <div class="col-6">
                                array de publicaciones
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $bg_contact_id = get_post_meta(get_the_ID(), 'qt_home_contact_bg_id', true); ?>
        <?php $bg_contact = wp_get_attachment_image_src($bg_contact_id, 'full', false); ?>
        <section class="the-contact col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_hero[0]; ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <?php $logo_contact_id = get_post_meta(get_the_ID(), 'qt_home_contact_logo_id', true); ?>
                        <?php $logo_contact = wp_get_attachment_image_src($logo_contact_id, 'full', false); ?>
                        <img src="<?php echo $logo_contact[0]; ?>" alt="" class="img-fluid" />
                    </div>
                    <div class="col-6">
                        template contact
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
