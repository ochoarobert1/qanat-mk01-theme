<?php get_header(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php $bg_banner_id = get_term_meta(get_queried_object_id(), 'term_image', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="main-banner-container main-banner-taxonomy-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <div class="taxonomy-title-wrapper">
                <h1><?php single_term_title(); ?></h1>
            </div>
        </section>

        <section class="tipo-actividades-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="tipo-actividades-menu col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <?php $act_terms = get_terms(array('taxonomy' => 'tipo-actividades', 'hide_empty' => false, 'orderby' => 'menu_order')); ?>
                        <?php if (!empty($act_terms)) : ?>
                        <ul class="tipo-actividades-menu-content">
                            <?php foreach ($act_terms as $item) { ?>
                            <?php if ($item->term_id == get_queried_object_id()) { $class = 'active'; } else { $class = ''; }?>
                            <li class="<?php echo $class; ?>">
                                <a href="<?php echo get_term_link($item); ?>"><?php echo $item->name; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="tipo-actividades-content col-xl-8 col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="card-columns">
                            <?php while (have_posts()) : the_post(); ?>
                            <div class="card custom-card">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid card-img-top')); ?>
                                <div class="custom-card-body">
                                    <h2><?php the_title(); ?></h2>
                                    <a data-actid="<?php echo get_the_ID(); ?>" class="btn-modal"><?php _e('Ver Más', 'qanat'); ?></a>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </div>
</main>
<?php get_footer(); ?>
