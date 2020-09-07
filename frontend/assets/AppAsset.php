<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'korina/css/vendor.bundle.css',
//        'korina/css/style.css'
        'css/site.css',
        'promedia/css/bootstrap.css',
        'promedia/css/owl.carousel.css',
        'promedia/css/owl.theme.css',
        'promedia/css/icon.css',
        'promedia/css/font-awesome.min.css',
        'promedia/css/animate.css',
        'promedia/css/magnific-popup.css',
        'promedia/css/settings.css',
        'promedia/css/preset.css',
        'promedia/css/theme.css',
        'promedia/css/responsive.css',
        'promedia/css/presets/color1.css'

//        'saucha/css/bootstrap.css',
//        'saucha/css/font-awesome.min.css',
//        'saucha/vendors/animate/animate.min.css',
//        'saucha/vendors/wow/css/animate.css',
//        'saucha/vendors/revolution-slider/css/layers.css',
//        'saucha/vendors/revolution-slider/css/navigation.css',
//        'saucha/vendors/revolution-slider/css/settings.css',
//        'saucha/vendors/sweetalert2/css/sweetalert2.min.css',
//        'saucha/css/custom.css',
    ];
    public $js = [
        //'korina/js/jquery.bundle.js',
        //'korina/js/script.js'
        'promedia/js/jquery.js',
        'promedia/js/modernizr.custom.js',
        'promedia/js/bootstrap.min.js',
        'promedia/js/owl.carousel.js',
        'promedia/js/jquery.appear.js',
        'promedia/js/jquery.magnific-popup.js',
        //<script src="https://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
        'promedia/js/gmaps.js',
        'promedia/js/jquery.parallax-1.1.3.js',
        'promedia/js/jquery.themepunch.revolution.min.js',
        'promedia/js/jquery.themepunch.tools.min.js',
        //<!-- Rev slider Add on Start -->
        'promedia/js/extensions/revolution.extension.actions.min.js',
        'promedia/js/extensions/revolution.extension.carousel.min.js',
        'promedia/js/extensions/revolution.extension.kenburn.min.js',
        'promedia/js/extensions/revolution.extension.migration.min.js',
        'promedia/js/extensions/revolution.extension.parallax.min.js',
        'promedia/js/extensions/revolution.extension.slideanims.min.js',
        'promedia/js/extensions/revolution.extension.layeranimation.min.js',
        'promedia/js/extensions/revolution.extension.navigation.min.js',
        'promedia/js/extensions/revolution.extension.video.min.js',
        //<!-- Rev slider Add on End -->
        'promedia/js/dlmenu.js',
        'promedia/js/jquery.easing.1.3.js',
        'promedia/js/theme.js'
//        'saucha/js/jquery.min.js',
//        'saucha/js/bootstrap.min.js',
//        'saucha/vendors/jribbble/js/jribbble.min.js',
//        '//maps.google.com/maps/api/js',
//        'saucha/vendors/gmap3/js/gmap3.min.js',
//        'saucha/vendors/wow/js/wow.min.js',
//        'saucha/vendors/revolution-slider/js/jquery.themepunch.tools.min.js',
//        'saucha/vendors/revolution-slider/js/jquery.themepunch.revolution.min.js',
//        'saucha/vendors/tweetie/js/tweetie.min.js',
//        'saucha/vendors/sweetalert2/js/sweetalert2.min.js',
//        'saucha/js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
