<!DOCTYPE html>
<html class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be Store</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <!-- <link rel="shortcut icon" href="content/store/images/favicon.ico"> -->

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Playfair+Display:100,100italic,300,400,400italic,500,600,700,700italic'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='assets/frontend/css/global.css'>
    <link rel='stylesheet' href='assets/frontend/css/structure.css'>
    <link rel='stylesheet' href='assets/frontend/css/store.css'>
    <link rel='stylesheet' href='assets/frontend/css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/plugins/rs-plugin/css/settings.css">

    <link rel='stylesheet' href='assets/frontend/css/style-demo.css'>
 </head>

<body class="layout-full-width button-stroke no-content-padding header-stack header-center minimalist-header sticky-header sticky-white subheader-title-left hide-title-area footer-copy-center">

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">

        <!-- Header Wrapper -->
        <div id="Header_wrapper">

            <!-- Header -->
            <?php 
                //load MVC header
                include "controllers/frontend/headerController.php";
                $obj = new headerController();
                $obj->index();
             ?>
            <!-- End Header -->
        </div>

        <!-- Main Content -->
            <?php 
                //load MVC home
                include "controllers/frontend/mainController.php";
                $obj = new mainController();
                $obj->index();
             ?>
        <!-- End Main Content -->

        <!-- #Footer -->
        <!-- Footer-->
        <footer id="Footer" class="clearfix">

            <div class="widgets_wrapper">
                <div class="container">
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth">
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <div style="text-align: center;">

                                    <div class="image_frame no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="assets/frontend/images/home_store_logo_footer.png" alt="">
                                        </div>
                                    </div>

                                    <hr class="no_line hrmargin_b_20" />

                                    <h5 class="hrmargin_b_5">Vitae adipiscing turpis</h5>
                                    <p>
                                        Aenean ligula nibh in, molestie apibus
                                    </p>

                                    <a href="#" class="icon_bar icon_bar_facebook icon_bar_small"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a>
                                    <a href="#" class="icon_bar icon_bar_google icon_bar_small"><span class="t"><i class="icon-gplus"></i></span><span class="b"><i class="icon-gplus"></i></span></a>
                                    <a href="#" class="icon_bar icon_bar_twitter icon_bar_small"><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a>
                                    <a href="#" class="icon_bar icon_bar_vimeo icon_bar_small"><span class="t"><i class="icon-vimeo"></i></span><span class="b"><i class="icon-vimeo"></i></span></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth">
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <h4>Popular categories</h4>
                            <div class="textwidget">
                                <ul style="line-height: 35px; width: 46%; margin-left: 4%;">
                                    <li>
                                        <a href="#">Aenean ligula</a>
                                    </li>
                                    <li>
                                        <a href="#">Dapibus at dolor</a>
                                    </li>
                                    <li>
                                        <a href="#">Molestie id</a>
                                    </li>
                                    <li>
                                        <a href="#">Vestibulum</a>
                                    </li>
                                    <li>
                                        <a href="#">Aenean ligula</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth">
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <h4>Useful links</h4>
                            <div class="textwidget">
                                <ul style="line-height: 35px; width: 46%; margin-left: 4%;">
                                    <li>
                                        <a href="#">Velit mauris</a>
                                    </li>
                                    <li>
                                        <a href="#">Entum feuis</a>
                                    </li>
                                    <li>
                                        <a href="#">Aliquam massa </a>
                                    </li>
                                    <li>
                                        <a href="#">Egestas quam</a>
                                    </li>
                                    <li>
                                        <a href="#">Velit mauris</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth">
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <div style="border: 3px solid #e7e0d3; text-align: center; padding: 20px;">
                                    <h3 class="highlight-font" style="margin-bottom: 5px; font-style: italic; font-weight: 400;">Be</h3>
                                    <p style="color: #000; letter-spacing: 3px; font-size: 17px;">
                                        NEWSLETTER
                                    </p>
                                    <form id="newsletterform" class="newsletter_form">
                                        <input placeholder="Your email address" type="email" id="email_news" name="email_news" size="40" aria-required="true" aria-invalid="false" />
                                        <input type="button" value="+" id="submit" onClick="return check_values_news();">
                                    </form>
                                    <p>
                                        Vitae adipiscing turpis Aenean ligula nibh in molestie
                                    </p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>

                        <!-- Copyrights -->
                        <div class="copyright">
                            &copy; 2019 BeStore - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">Tâm Muỗi</a>
                        </div>

                        <!--Social info area-->
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!-- #Wrapper -->

    <!-- JS -->
    <script src="assets/frontend/js/jquery-2.1.4.min.js"></script>

    <script src="assets/frontend/js/mfn.menu.js"></script>
    <script src="assets/frontend/js/jquery.plugins.js"></script>
    <script src="assets/frontend/js/jquery.jplayer.min.js"></script>
    <script src="assets/frontend/js/animations/animations.js"></script>
    <script src="assets/frontend/js/scripts.js"></script>
    <script src="assets/frontend/js/email.js"></script>

    <script src="assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "plugins/rs-plugin/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "persephone",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 60,
                            space: 5,
                            tmp: ''
                        }
                    },
                    gridwidth: 1176,
                    gridheight: 585,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: "off",
                    }
                });
            }
        });
        /*ready*/
</script>

    <script>
        //<![CDATA[
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-store.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/retina_store_s.png").width(stickyLogoW).height(stickyLogoH);
            }
        });
        //]]>
    </script>
<!-- 	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-96349019-1', 'auto');
  ga('send', 'pageview');
</script>
 -->
</body>
</html>