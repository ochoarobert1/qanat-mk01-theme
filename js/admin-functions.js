jQuery(document).ready(function ($) {

    // Instantiates the variable that holds the media library frame.
    var meta_image_frame;

    // Runs when the image button is clicked.
    jQuery('#upload_image_btn').click(function (e) {

        // Prevents the default action from occuring.
        e.preventDefault();

        // If the frame already exists, re-open it.
        if (meta_image_frame) {
            meta_image_frame.open();
            return;
        }

        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
            title: meta_image.title,
            button: {
                text: meta_image.button
            },
            library: {
                type: 'image'
            }
        });

        // Runs when an image is selected.
        meta_image_frame.on('select', function () {

            // Grabs the attachment selection and creates a JSON representation of the model.
            var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
            console.log(media_attachment);
            // Sends the attachment URL to our custom image input field.
            jQuery('.actividad-image-container img').remove();
            jQuery('.actividad-image-container').prepend('<img src="' + media_attachment.url + '" alt="" width="100" height="100"/>');
            jQuery('#actividad_img').val(media_attachment.id);
        });

        // Opens the media library frame.
        meta_image_frame.open();
    });

});
