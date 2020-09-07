<?php
/**
 * Created by PhpStorm.
 * User: K0D1K
 * Date: 17/04/2018
 * Time: 17:01
 */
use backend\models\Project;
use backend\models\ProjectProgress;

$data = ProjectProgress::find()->where(['id_project' => $model->id])->orderBy(['id' =>SORT_ASC])->all();
?>

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
                            <img src="<?= Yii::$app->request->baseUrl.'/uploads/project/'.$model->gambar ?>" alt="">
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
        <!--
                <div class="project-gallery">
                    <h3 class="heading-section heading-sm">Project Progress</h3>
                    <div class="gallery gallery-lightbox gallery-photos gallery-filled hover-zoom">
                        <ul class="photos-list col-x4">
                            <?php foreach($data as $prog) {?>
                            <li>
                                <a href="<?= Yii::$app->request->baseUrl.'/uploads/project/'.$prog->gambar ?>">
                                <div class="photo">
                                    <img src="<?= Yii::$app->request->baseUrl.'/uploads/project/'.$prog->gambar ?>">
                                </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                     Gallery #end
                </div>
        -->