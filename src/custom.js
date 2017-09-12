jQuery(window).load(function() {
    if(jQuery(window).width() < 576) {
        recaptcha()
    }
});
jQuery(window).resize(function() {
    if(jQuery(window).width() < 576) {
        recaptcha()
    }
});

function recaptcha() {
    if(jQuery(window).width() > 373) {
        //jQuery('.bannerForm iframe').removeAttr('style');
        var mwidth = jQuery('.bannerForm > div').width();
        var iwidth = jQuery('.bannerForm iframe',document).width();
        var nwidth = (mwidth - iwidth)/2;
        //console.log(jQuery(window).width() + ' ' + nwidth);
        jQuery('.bannerForm .smallCaptcha iframe').css('left',(nwidth-3)+'px');
    }
    else {
        jQuery('.bannerForm iframe').removeAttr('style');
    }
    //console.log(offset);
}