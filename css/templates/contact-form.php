<form class="contact-form-container">
    <div class="container">
        <div class="row">
            <div class="contact-form-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3><?php _e('Formulario de contacto', 'qanat'); ?></h3>
            </div>
            <div class="contact-form-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label for="fullname"><?php _e('Nombre', 'qanat'); ?></label>
                <input type="text" class="form-control custom-form-control" id="fullname" name="fullname" />
                <small class="danger custom-danger d-none error-fullname"></small>
            </div>
            <div class="contact-form-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label for="email"><?php _e('E-mail', 'qanat'); ?></label>
                <input type="text" class="form-control custom-form-control" id="email" name="email" />
                <small class="danger custom-danger d-none error-email"></small>
            </div>
            <div class="contact-form-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label for="subject"><?php _e('Asunto', 'qanat'); ?></label>
                <input type="text" class="form-control custom-form-control" id="subject" name="subject" />
                <small class="danger custom-danger d-none error-subject"></small>
            </div>
            <div class="contact-form-item col-12">
                <label for="message"><?php _e('Mensaje / Comentarios', 'qanat'); ?></label>
                <textarea name="message" class="form-control custom-form-control" id="message" cols="30" rows="4"></textarea>
                <small class="danger custom-danger d-none error-message"></small>
            </div>
            <div class="contact-form-item contact-form-checkbox col-12">
                <label for="politics_acceptance"><input required type="checkbox" id="politics_acceptance" name="politics_acceptance"><?php printf( __('He leído y acepto la <a href="%s">política de protección de datos</a>', 'qanat'), home_url('/politica-de-privacidad/')); ?>.</label>
            </div>
            <div class="contact-form-submit col-12">
                <button type="reset" class="btn btn-md btn-primary btn-reset"><?php _e('Borrar Campos', 'qanat'); ?></button>
                <button type="submit" class="btn btn-md btn-primary btn-submit"><?php _e('Enviar Mensaje', 'qanat'); ?></button>
            </div>
            <div class="contact-form-loader col-12"></div>
            <div class="contact-form-response col-12"></div>
            <div class="contact-form-extra-info col-12">
                <p>
                    <a class="btn btn-sm btn-form-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <?php _e('Haga click aquí para obtener mas información', 'qanat');?>
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <?php $contact_page = get_page_by_path('contacto'); ?>
                        <?php $text_form = get_post_meta($contact_page->ID, 'qt_checkbox_accept_text', true); ?>
                        <?php echo apply_filters('the_content', $text_form); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
