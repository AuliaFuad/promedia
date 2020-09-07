<?php
$this->title = 'Berita & Artikel | Promedia';
?>

<!-- Page Banner -->
        <section class="pageBanner" style="background: url(<?= Yii::$app->request->baseUrl.'/promedia/images/backone.jpg' ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Berita & Artikel</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="comonSection blogListPage">
            <div class="container">
                <div class="row">
                    <?= 
                        \yii\widgets\ListView::widget(['dataProvider' => $dataProvider,
                            'layout' => "{items}\n{pager}",
                            'options' => [
                                'tag' => 'div',
                                'class' => 'list-wrapper',
                                'id' => 'list-wrapper',
                            ],
                            'itemView' => function($model) {
                                return $this->render('_list_berita', ['model' => $model]);
                            },
                        ]);
                    ?>
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
