jQuery(document).ready( function(  ) {

    var uploadButton;

    if(jQuery('.upload_image_button').length != 0){
        jQuery(document).on('click','.upload_image_button',function() {
            uploadButton = jQuery(this);
            formfield = uploadButton.prev('input').attr('name');
            tb_show( '', 'media-upload.php?type=image&amp;TB_iframe=true' );
            return false;
        });
        window.send_to_editor = function(html) {
            imgurl = jQuery('img',html).attr('src');
            uploadButton.prev('input').val(imgurl);
            tb_remove();
        }
    }

});