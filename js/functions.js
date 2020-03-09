var passd = true;

function isValidEmailAddress(emailAddress) {
    'use strict';
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}

jQuery(document).ready(function ($) {
    "use strict";

    jQuery('.btn-modal').on('click', function () {
        jQuery.ajax({
            type: 'POST',
            url: admin_url.ajax_custom_url,
            data: {
                action: 'ajax_get_activity_data',
                info: jQuery(this).data('actid')
            },
            beforeSend: function () {
                jQuery('#actividadesModal').modal('toggle');
                jQuery('#actividadesModal .modal-body').html('<div class="ajax-loader"><div class="lds-ripple"><div></div><div></div></div></div>');
            },
            success: function (response) {
                jQuery('#actividadesModal .modal-body').html(response);

            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    if (jQuery(window).width() < 960) {
        AOS.init({
            offset: 0, // offset (in px) from the original trigger point
        });
    } else {
        AOS.init({
            offset: 20, // offset (in px) from the original trigger point
        });
    }

    jQuery(window).resize(function () {
        if (jQuery(window).width() < 768) {
            AOS.refreshHard({
                offset: 0, // offset (in px) from the original trigger point
            });
        } else {
            AOS.refreshHard();
        }
    });

    jQuery('.menu-btn').on('click', function () {
        jQuery('.menu-mobile').toggleClass('menu-mobile-hidden');
        setTimeout(function () {
            jQuery('.menu-mobile-wrapper').toggleClass('menu-mobile-wrapper-hidden');
        }, 100);

    });

    jQuery('.menu-btn-close').on('click', function () {
        jQuery('.menu-mobile-wrapper').toggleClass('menu-mobile-wrapper-hidden');
        jQuery('.menu-mobile').toggleClass('menu-mobile-hidden');
    });


    jQuery('.calidad-item').on('click', function () {
        var url = jQuery(this).data('url');
        if (url != '') {
            window.open(url, '_blank');
        }
    });

    jQuery('.clients-slider').owlCarousel({
        items: 6,
        loop: true,
        nav: true,
        navText: [' ', ' '],
        dots: false,
        margin: 40,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            533: {
                items: 2
            },
            600: {
                items: 3
            },
            1170: {
                items: 4
            },
            1280: {
                items: 5
            },
            1366: {
                items: 6
            }
        }
    });

    jQuery('.about-gallery-slider').owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        navText: [' ', ' '],
        dots: false,
        margin: 40,
        autoplay: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4
            }
        }
    });

    jQuery('input[name=fullname]').on('change', function () {
        if (jQuery('input[name=fullname]').val() == '') {
            jQuery('input[name=fullname]').next('small').removeClass('d-none').html('error');
        } else {
            if (jQuery('input[name=fullname]').val().length < 3) {

                jQuery('input[name=fullname]').next('small').removeClass('d-none').html(admin_url.invalid_name);
            } else {
                jQuery('input[name=fullname]').next('small').addClass('d-none');
            }
        }
    });

    jQuery('input[name=email]').on('change', function () {
        if (jQuery('input[name=email]').val() == '') {

            jQuery('input[name=email]').next('small').removeClass('d-none').html(admin_url.error_email);
        } else {
            if (!isValidEmailAddress(jQuery('input[name=email]').val())) {
                jQuery('input[name=email]').next('small').removeClass('d-none').html(admin_url.invalid_email);
            } else {
                jQuery('input[name=email]').next('small').addClass('d-none');
            }
        }
    });

    jQuery('input[name=subject]').on('change', function () {
        if (jQuery('input[name=subject]').val() == '') {
            jQuery('input[name=subject]').next('small').removeClass('d-none').html('error');
            jQuery('input[name=subject]').next('small').removeClass('d-none').html(admin_url.error_subject);
        } else {
            if (jQuery('input[name=subject]').val().length < 3) {
                jQuery('input[name=subject]').next('small').removeClass('d-none').html(admin_url.invalid_subject);
            } else {
                jQuery('input[name=subject]').next('small').addClass('d-none');
            }
        }
    });

    jQuery('textarea[name=message]').on('change', function () {
        if (jQuery('textarea[name=message]').val() == '') {
            jQuery('textarea[name=message]').next('small').removeClass('d-none').html(admin_url.error_message);
        } else {
            jQuery('textarea[name=message]').next('small').addClass('d-none');
        }
    });

    jQuery('form.contact-form-container').on('submit', function (e) {
        "use strict";
        passd = true;
        e.preventDefault();
        if (jQuery('input[name=fullname]').val() == '') {
            passd = false;
            jQuery('input[name=fullname]').next('small').removeClass('d-none').html(admin_url.error_name);
        } else {
            if (jQuery('input[name=fullname]').val().length < 3) {
                passd = false;
                jQuery('input[name=fullname]').next('small').removeClass('d-none').html(admin_url.invalid_name);
            } else {
                jQuery('input[name=fullname]').next('small').addClass('d-none');
            }
        }

        if (jQuery('input[name=email]').val() == '') {
            passd = false;
            jQuery('input[name=email]').next('small').removeClass('d-none').html(admin_url.error_email);
        } else {
            if (!isValidEmailAddress(jQuery('input[name=email]').val())) {
                passd = false;
                jQuery('input[name=email]').next('small').removeClass('d-none').html(admin_url.invalid_email);
            } else {
                jQuery('input[name=email]').next('small').addClass('d-none');
            }
        }

        if (jQuery('input[name=subject]').val() == '') {
            passd = false;
            jQuery('input[name=subject]').next('small').removeClass('d-none').html(admin_url.error_subject);
        } else {
            if (jQuery('input[name=subject]').val().length < 3) {
                passd = false;
                jQuery('input[name=subject]').next('small').removeClass('d-none').html(admin_url.invalid_subject);
            } else {
                jQuery('input[name=subject]').next('small').addClass('d-none');
            }
        }

        if (jQuery('textarea[name=message]').val() == '') {
            passd = false;
            jQuery('textarea[name=message]').next('small').removeClass('d-none').html(admin_url.error_message);
        } else {
            jQuery('textarea[name=message]').next('small').addClass('d-none');
        }

        if (passd == true) {
            jQuery.ajax({
                type: 'POST',
                url: admin_url.ajax_custom_url,
                data: {
                    action: 'ajax_send_contact_form',
                    info: jQuery('.contact-form-container').serialize()
                },
                beforeSend: function () {
                    jQuery('.contact-form-loader').append('<div class="ajax-loader"><div class="lds-ripple"><div></div><div></div></div></div>');
                },
                success: function (response) {
                    jQuery('.contact-form-loader').html('');
                    if (response == 'true') {
                        jQuery('.contact-form-response').html('<div>' + admin_url.success_form + '<div>');
                    } else {
                        jQuery('.contact-form-response').html('<div>' + admin_url.error_form + '<div>');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });
        }
    });

    jQuery(document).ready(function () {
        if (Cookies.get('cookie_consent') != undefined) {
            // cookie is set
            jQuery('.qanat-privacy-policy-accept').addClass('hidden-policy');
        } else {
            // cookie is not set
            jQuery('.qanat-privacy-policy-accept').removeClass('hidden-policy');
        }
    });

    jQuery(document).on('touchstart click', '#privacy-policy-accept-btn', function (event) {
        if (event.handled === false) return
        event.stopPropagation();
        event.preventDefault();
        event.handled = true;
        console.log('clicked');
        Cookies.set('cookie_consent', 'cookie_consent', {
            expires: 7
        });
        jQuery('.qanat-privacy-policy-accept').addClass('hidden-policy');
    });
}); /* end of as page load scripts */
