<?php

/* @var $this yii\web\View */

$this->title = 'Korina.co.id';
?>
<div class="section section-services section-pad">
    <div class="container">
        <div class="content row">
            <!-- Feature Row  -->
            <div class="feature-row feature-service-row row">
                <?php foreach ($port as $portofolio) {?>
                    <div class="col-md-4 col-sm-6">
                        <!-- feature box -->
                        <div class="feature boxed">
                            <a href="<?= Yii::$app->request->baseUrl.'/portofolio/baca?id='.$portofolio->id ?>">
                                <div class="fbox-photo">
                                    <img style="width: 370px; height: 270px;" src="<?= Yii::$app->request->baseUrl.'/uploads/portofolio/'.$portofolio->gambar ?>" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="<?= Yii::$app->request->baseUrl.'/portofolio/baca?id='.$portofolio->id ?>"><?= $portofolio->judul ?></a></h3>
                                <p><?php $isi = substr($portofolio->isi,0,150);
                                    echo $isi."...";
                                    ?></p>
                                <p><a href="<?= Yii::$app->request->baseUrl.'/portofolio/baca?id='.$portofolio->id ?>" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                <?php } ?>
            </div>
            <!-- Feture Row  #end -->
        </div>
    </div>
</div>