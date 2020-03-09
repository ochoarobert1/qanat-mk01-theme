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
    <p class="text-center small"><?php echo $cookies_options['cookie_text']; ?> <a href="<?php echo home_url('/cookies-policy/'); ?>" class="font-weight-bold"><?php _e( "aquí", 'qanat' ) ?></a>.</p>
    <div class="button-container">
        <div class="cookies-multiple">
            <label for="cookies_needed"><input type="checkbox" disabled checked required id="cookies_needed" name="cookies_needed" /> <?php _e('Necesarias', 'qanat'); ?></label>
            <label for="cookies_preferences"><input type="checkbox" checked id="cookies_preferences" name="cookies_preferences" /> <?php _e('Preferencias', 'qanat'); ?></label>
            <label for="cookies_stats"><input type="checkbox" disabled checked required id="cookies_stats" name="cookies_stats" /> <?php _e('Estadísticas', 'qanat'); ?></label>
            <label for="cookies_marketing"><input type="checkbox" disabled checked required id="cookies_marketing" name="cookies_marketing" /> <?php _e('Marketing', 'qanat'); ?></label>
            <a class="btn btn-multiple dropdown-toggle" data-toggle="collapse" href="#cookies_details" role="button" aria-expanded="false" aria-controls="cookies_details"><?php _e('Mostrar Detalles', 'qanat'); ?></a>
        </div>
        <a class="btn btn-sm btn-outline-elephant btn-privacy" id="privacy-policy-accept-btn"><?php _e( "Yo Acepto", 'qanat' ) ?></a>
    </div>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="cookies_details">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php _e('Necesarias', 'qanat'); ?></a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><?php _e('Preferencias', 'qanat'); ?></a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><?php _e('Estadísticas', 'qanat'); ?></a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><?php _e('Marketing', 'qanat'); ?></a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer() ?>
</body>

</html>
