<?php
$this->title = $model->judul." | Promedia";
?>
<!-- Page Banner -->
        <section class="pageBanner" style="background: url(<?= Yii::$app->request->baseUrl ?>/promedia/images/backone.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2><?= $model->judul?></h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="comonSection portfolioDetail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 col-md-5">
                        <div class="folioDetilsThumb">
                            <img src="<?= Yii::$app->request->baseUrl.'/uploads/service/'.$model->gambar ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 col-md-7">
                        <div class="singleFolioDetail">
                            <h3><?= $model->judul ?></h3>
                            <p>
                                <?= $model->isi ?>
                            </p>
                            <!--<div class="singleIteamPro">
                                <h4>Clients:</h4>
                                <span>Jessica Brown</span>
                            </div>
                            <div class="singleIteamPro">
                                <h4>Clients:</h4>
                                <span><a href="#">Graphic</a>, <a href="#">Illustrations</a></span>
                            </div>
                            <div class="singleIteamPro">
                                <h4>Clients:</h4>
                                <span>8 July, 2018</span>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nextprevPagination">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6 text-left">
                                    <a class="prevFolio" href="#"><i class="fa fa-angle-left"></i>Previous</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6 text-right">
                                    <a class="nextFolio" href="#">Next<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="comonSection readysection" style="background: url(<?= Yii::$app->request->baseUrl ?>/promedia/images/backone.jpg) no-repeat fixed center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-8 text-left">
                        <h2 class="section_title white">Segala jenis konsultasi dan solusi bisnis jangan ragu untuk menghubungi kami</h2>
                    </div>
                    <div class="col-lg-3 col-sm-4 text-right">
                        <a class="common_btn fix_btn" href="<?= Yii::$app->request->baseUrl.'/tentang' ?>">Contact with us</a>
                    </div>
                </div>
            </div>
        </section>