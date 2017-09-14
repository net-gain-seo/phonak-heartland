<footer>
    <div id="footerBottom" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col col-12 col-sm-12 col-md-12 col-lg-6 footer-left">
						<div>
							<div>
								<?php dynamic_sidebar('footer-left'); ?>
							</div>
						</div>
					</div>
					<div class="col col-12 col-sm-12 col-md-12 col-lg-6 footer-right">
						<div>
							<div>
								<?php dynamic_sidebar('footer-right'); ?>
							</div>
						</div>
					</div>
					<div class="col col-12">
						<p id="footercopy" class="whiteText">Copyright© <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?></p>
					</div>
				</div>
			</div>
    </div>
</footer>

<?php
/*--- if boxed open wrapper---*/
if(get_option('modular_wp_site_style') == "Boxed"){ echo '</div>'; }
?>

<?php if(get_option('modular_wp_footer_js') != ''){ echo '<script>'.get_option('modular_wp_footer_js').'</script>'; } ?>
<?php wp_footer(); ?>

<script>
jQuery(window).load(function(){
    jQuery('.modular_gallery.thumb-list').each(function(){
        jQuery(this).children('a').each(function(){
            var imageHeight = jQuery(this).children('img').outerHeight();
            var imageWidth = jQuery(this).children('img').outerWidth();
            jQuery(this).css('width',imageWidth+'px');
            jQuery(this).css('height',imageHeight+'px');
            jQuery(this).append('<div class="thumbListHover" style="width: '+imageWidth+'px;height: '+imageHeight+'px;"></div>');
        });
    });

    jQuery('.modular_gallery_thumbs_right_list > div').each(function(){
        jQuery(this).children('a').each(function(){
            var imageHeight = jQuery(this).children('img').outerHeight();
            var imageWidth = jQuery(this).children('img').outerWidth();
            jQuery(this).css('width',imageWidth+'px');
            jQuery(this).css('height',imageHeight+'px');
            jQuery(this).append('<div class="thumbListHover" style="width: '+imageWidth+'px;height: '+imageHeight+'px;"></div>');
        });
    });

    jQuery('.modular_gallery_thumbs_bottom_list > div').each(function(){
        jQuery(this).children('a').each(function(){
            var imageHeight = jQuery(this).children('img').outerHeight();
            var imageWidth = jQuery(this).children('img').outerWidth();
            jQuery(this).css('width',imageWidth+'px');
            jQuery(this).css('height',imageHeight+'px');
            jQuery(this).append('<div class="thumbListHover" style="width: '+imageWidth+'px;height: '+imageHeight+'px;"></div>');
        });
    });

});

</script>

<script type="text/javascript">
(function ($) {
    $.fn.fontResize = function (options) {
        var settings = {
            increaseBtn: $('#incfont'),
            decreaseBtn: $('#decfont')
        };

        options = $.extend(settings, options);

        return this.each(function () {
            var element = $(this), clicks = 0;

            options.increaseBtn.on('click', function (e) {
                e.preventDefault();
                if (clicks < 5) {
                    var baseFontSize = parseInt(element.css('font-size'));
                    var baseLineHeight = parseInt(element.css('line-height'));
                    element.css('font-size', (baseFontSize + 2) + 'px');
                    element.css('line-height', (baseLineHeight + 2) + 'px');
                    clicks += 1;
                }
            });

            options.decreaseBtn.on('click', function (e) {
                e.preventDefault();
                if (clicks > 0) {
                    var baseFontSize = parseInt(element.css('font-size'));
                    var baseLineHeight = parseInt(element.css('line-height'));
                    element.css('font-size', (baseFontSize - 2) + 'px');
                    element.css('line-height', (baseLineHeight - 2) + 'px');
                    clicks -= 1;
                }
            });
        });
    };
})(jQuery);

jQuery(function () {
    jQuery(' h1, h2, h3, h4, h5, h6, p, p span, input, textarea, #footer-navigation ul > li > a').fontResize();
});


<?php
echo 'var ajaxurl = "' . admin_url('admin-ajax.php') . '"';
?>


</script>
</body>
</html>
