<?php $bg_contact_id = get_post_meta(get_the_ID(), 'qt_home_contact_bg_id', true); ?>
<?php $bg_contact = wp_get_attachment_image_src($bg_contact_id, 'full', false); ?>
<section data-aos="fade" class="the-contact col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: #FFF url(<?php echo $bg_contact[0]; ?>);">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="home-contact-image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <?php $logo_contact_id = get_post_meta(get_the_ID(), 'qt_home_contact_logo_id', true); ?>
                <?php $logo_contact = wp_get_attachment_image_src($logo_contact_id, 'full', false); ?>
                <img src="<?php echo $logo_contact[0]; ?>" alt="" class="img-fluid" />
                <?php $header_options = get_option('qanat_header_settings'); ?>
                <?php $social_options = get_option('qanat_social_settings'); ?>
                <ul class="home-social-elements main-text-size">
                    <?php if (isset($social_options['facebook'])) { ?>
                    <?php if ($social_options['facebook'] != '' ) { ?>
                    <li>
                        <a href="<?php echo esc_url($social_options['facebook']);?>" title="<?php _e('Visítanos en Facebook', 'qanat'); ?>" target="_blank"><i class="fa fa-facebook"></i> Qanat Ingeniería</a>
                    </li>
                    <?php } ?>
                    <?php } ?>

                    <?php if (isset($social_options['twitter'])) { ?>
                    <?php if ($social_options['twitter'] != '') { ?>
                    <li>
                        <a href="<?php echo esc_url($social_options['twitter']);?>" title="<?php _e('Visitanos en Twitter', 'qanat'); ?>" target="_blank"><i class="fa fa-twitter"></i> @ingenieriaqanat</a>
                    </li>
                    <?php } ?>
                    <?php } ?>

                    <?php if (isset($social_options['instagram'])) { ?>
                    <?php if ($social_options['instagram'] != '') { ?>
                    <li>
                        <a href="<?php echo esc_url($social_options['instagram']);?>" title="<?php _e('Visitanos en Instagram', 'qanat'); ?>" target="_blank"><i class="fa fa-instagram"></i> Qanat Ingeniería</a>
                    </li>
                    <?php } ?>
                    <?php } ?>

                    <?php if (isset($social_options['youtube'])) { ?>
                    <?php if ($social_options['youtube'] != '') { ?>
                    <li>
                        <a href="<?php echo esc_url($social_options['youtube']);?>" title="<?php _e('Visitanos en YouTube', 'qanat'); ?>" target="_blank"><i class="fa fa-youtube"></i> Qanat Ingeniería</a>
                    </li>
                    <?php } ?>
                    <?php } ?>

                    <?php if (isset($social_options['linkedin'])) { ?>
                    <?php if ($social_options['linkedin'] != '') { ?>
                    <li>
                        <a href="<?php echo esc_url($social_options['linkedin']);?>" title="<?php _e('Visitanos en LinkedIn', 'qanat'); ?>" target="_blank"><i class="fa fa-linkedin"></i> Qanat Ingeniería</a>
                    </li>
                    <?php } ?>
                    <?php } ?>

                    <?php if (isset($header_options['phone_number'])) { ?>
                    <?php if ($header_options['phone_number'] != '') { ?>
                    <li>
                        <a href="tel:<?php echo esc_attr($header_options['phone_number']);?>" title="<?php _e('Haga click para llamar a nuestro master', 'qanat'); ?>" target="_blank"><i class="fa fa-phone"></i> <?php echo $header_options['formatted_phone_number'];?></a>
                    </li>
                    <?php } ?>
                    <?php } ?>

                    <?php if (isset($header_options['email_address'])) { ?>
                    <?php if ($header_options['email_address'] != '') { ?>
                    <li>
                        <a href="mailto:<?php echo esc_attr($header_options['email_address']);?>" title="<?php _e('Haga click para enviarnos un correo electrónico', 'qanat'); ?>" target="_blank"><i class="fa fa-envelope-o"></i> <?php echo $header_options['email_address'];?></a>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="home-contact-form main-text-size col-xl-5 offset-xl-1 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="home-contact-form-wrapper">
                    <?php get_template_part('templates/contact-form'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
