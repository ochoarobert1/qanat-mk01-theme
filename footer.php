<!-- Modal -->
<div class="modal fade" id="actividadesModal" tabindex="-1" role="dialog" aria-labelledby="actividadesModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>

<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-12">
            <div class="container">
                <div class="row align-items-start justify-content-between">
                    <?php if ( is_active_sidebar( 'sidebar_footer' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer1">
                            <?php dynamic_sidebar( 'sidebar_footer' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'sidebar_footer-2' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer2">
                            <?php dynamic_sidebar( 'sidebar_footer-2' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'sidebar_footer-3' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer3">
                            <?php dynamic_sidebar( 'sidebar_footer-3' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'sidebar_footer-4' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer3">
                            <?php dynamic_sidebar( 'sidebar_footer-4' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <div class="w-100"></div>
                </div>
            </div>
        </div>
        <?php $header_options = get_option('qanat_header_settings'); ?>
        <div class="footer-copy col-12">
            <span>Calle José Antonio Fernández Ordoñez, 35 - 2°B 28055 Madrid (España)</span>
            <?php if (isset($header_options['email_address'])) { ?>
            <?php if ($header_options['email_address'] != '') { ?>
            <a href="mailto:<?php echo esc_attr($header_options['email_address']);?>" title="<?php _e('Haga click para enviarnos un correo electrónico', 'qanat'); ?>" target="_blank"><?php echo esc_attr($header_options['email_address']);?></a>
            <?php } ?>
            <?php } ?>
            <?php if (isset($header_options['phone_number'])) { ?>
            <?php if ($header_options['phone_number'] != '') { ?>
            <a href="tel:<?php echo esc_attr($header_options['phone_number']);?>" title="<?php _e('Haga click para llamar a nuestro master', 'qanat'); ?>" target="_blank"><?php echo $header_options['formatted_phone_number'];?></a>
            <?php } ?>
            <?php } ?>
            <span>Copyright Qanat Ingeniería, S.L.</span>
        </div>
    </div>
</footer>
<?php $cookies_options = get_option('qanat_cookie_settings'); ?>
<div class="qanat-privacy-policy-accept hidden-policy" id="qanat-privacy-policy-accept">
    <p class="text-center small"><?php echo $cookies_options['cookie_text']; ?> <a href="<?php echo get_permalink($cookies_options['cookie_link']); ?>" class="font-weight-bold"><?php _e( "aquí", 'qanat' ) ?></a>.</p>
    <div class="button-container">
        <a class="btn btn-sm btn-outline-elephant btn-privacy" id="privacy-policy-accept-btn"><?php _e( "Acepto", 'qanat' ) ?></a>
    </div>
</div>
<?php wp_footer() ?>
</body>

</html>
