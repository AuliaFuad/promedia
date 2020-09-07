<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?><section class=" page_indicator">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right page_indicator_text">
                <a href="<?= Yii::$app->request->baseUrl ?>">Home </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i><span
                    class="text-primary">404</span>
            </div>
        </div>
    </div>
</section>
<!--======================Header section End============-->
<!--==============Body start============-->
<section class="section-page-alignment">
    <div class="container errorbody_background">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-sm-offset-1 col-md-offset-1 col-xs-12">
                <div class="row error_page">
                    <div class="col-xs-6">
                        <img src="<?= Yii::$app->request->baseUrl ?>/saucha/images/4sir.png" alt="404 page" class="img-responsive sir_img wow fadeInLeft"
                             data-wow-duration="1s" data-wow-delay="0.4s">
                    </div>
                    <div class="col-xs-6">
                        <img src="<?= Yii::$app->request->baseUrl ?>/saucha/images/4board1.png" alt="404 page" class="img-responsive  fourtext wow zoomIn"
                             data-wow-duration="1s" data-wow-delay="1.5s">
                        <img src="<?= Yii::$app->request->baseUrl ?>/saucha/images/4tableboard.png" alt="404 page" class="img-responsive board_img wow fadeInDown"
                             data-wow-duration="1s" data-wow-delay="0.7s">
                    </div>
                </div>
                <br>
                <h3 class="text-center wow fadeInLeft text-danger" data-wow-duration="1s" data-wow-delay="0.2s"> 404
                    PAGE NOT FOUND</h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-center content-alignment wow fadeInRight"
                 data-wow-duration="1s" data-wow-delay="0.2s">
                <h3>This is <span class="header_help">awk</span>ward!</h3>
                <p>Something has gone wrong. It's possible internet is broken or web page
                    is not found. Either way, the cause is investigated. </p>
                <div class="text-center"><a href="<?= Yii::$app->request->baseUrl ?>" class="btn btn-info btn-lg go_btn">GO TO HOME</a></div>
            </div>
        </div>
    </div>
</section>
