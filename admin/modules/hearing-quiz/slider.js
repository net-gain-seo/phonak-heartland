jQuery(window).load(function(){
    jQuery('.ngslider').show();
    if(jQuery('.ngslides').length != 0){
        jQuery('.ngslides').each(function(){
            var offset = jQuery(this).attr('data-offset');
            var fx = jQuery(this).attr('data-fx');
            var timeout = jQuery(this).attr('data-timeout');

            var nextBtns = ['#ngslidernext_'+offset,'.nextQ'];

            jQuery(this).cycle({
                fx: fx,
                timeout: Number(timeout),
                pause: 1,
                prev: '.prevQ'+offset,
                next: '.nextQ'+offset,
                pager: '#pager',
                pagerAnchorBuilder: function(index, el) {
                    return '<a href="#"></a>';
                }
            });
        });

        var sHeight = '';

        function getSlider() {
            var slides = jQuery('.ngslides').children('div:visible');
            if(slides.children('a').length != 0){
                sHeight = slides.children('a').children('img').height();
            }else{
                sHeight = slides.children('img').height();
            }
        }

        var sliderHeight = setInterval(function(){
            getSlider();
            jQuery('.ngslides').css('height',sHeight+'px');
            if(sHeight < 100){
                clearInterval(sliderHeight);
            }
        },1000);

        getSlider();

        if(sHeight < 500){
            jQuery('.ngslides').css('height',sHeight+'px');
        }
        jQuery(window).resize(function(){
            getSlider();
            if(sHeight < 500){
                jQuery('.ngslides').css('height',sHeight+'px');
                jQuery('.ngslides > div').css('height',sHeight+'px');
            }
        });
    }

    jQuery('#goto1').click(function() {
        jQuery('.ngslides').cycle(0);
        jQuery('input[type="radio"]').each(function() {
            jQuery(this).prop('checked',false);
        });
        jQuery('input[type="text"]').each(function() {
            jQuery(this).val('');
        });
        jQuery('a.hidden').each(function() {
            jQuery(this).hide();
        });
        return false;
    });

    jQuery('.qwrap .check-display').on('click', function() {
        jQuery(this).parent().parent().parent().next('.next').children('.hidden').each(function(){
            jQuery(this).css('display', 'inline-block');
        });
    });

    jQuery('.getResults').on('click', function() {
        var yesCount = 0;
        jQuery('input[type="radio"]').each(function() {
            if(jQuery(this).is(':checked') && jQuery(this).val() == 'Yes') {
                yesCount++;
            }
        });

        jQuery('.num_qs').empty();
        jQuery('.num_qs').html(yesCount);

        if(yesCount > 0){
            jQuery('.subTextHearingLoss').css('display','block');
        }else{
            jQuery('.subTextHearingLoss').css('display','none');
        }
    });

    jQuery('div.submit').on('click', function() {
        var formData = jQuery('form.quiz').serializeArray();
        console.log('click');
        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {action: 'submit_form', datavar: formData},
            //dataType: 'json',
            success: function(response) {
                //Do Successful Things
                response = JSON.parse(response);
                if(response.success == 'true') {
                    jQuery('input.nextQ1').click();
                }
            },
            error: function(message) {
                //Do Unsuccessful Things
                var message = 'There was a problem submitting the form.';
                alert('There was an error processing your request, please try again later.');
            }
        });

    });
});