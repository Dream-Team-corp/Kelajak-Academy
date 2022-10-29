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
        'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        "css/animate.css",

        "css/owl.carousel.min.css",
        "css/owl.theme.default.min.css",
        "css/magnific-popup.css",

        "css/bootstrap-datepicker.css",
        "css/jquery.timepicker.css",

        "css/flaticon.css",
        "css/style.css",
        'css/site.css'
    ];
    public $js = [
        "js/jquery.min.js",
        "js/jquery-migrate-3.0.1.min.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/jquery.easing.1.3.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.stellar.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/jquery.animateNumber.min.js",
        "js/bootstrap-datepicker.js",
        "js/scrollax.min.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false",
        "js/google-map.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
