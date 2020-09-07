<?php
$this->title = 'Kategori Berita';
?>
<section class=" page_indicator">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right page_indicator_text">
                <a href="<?= Yii::$app->request->baseUrl ?>">Home </a><i class="fa fa-long-arrow-right"
                                                                         aria-hidden="true"></i><span
                    class="text-primary">Berita</span>
            </div>
        </div>
    </div>
</section>
<div class="container section-top-align">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center">
                Beri<span class="header_help">ta Ter</span>baru
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <?php foreach ($berita as $model) {
                ?>

                <div class="row wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="col-md-12 content-alignment1">
                        <h5><span class="header_help"><?= $model->judul ?></h5>
                    </div>
                </div>
                <div class="imagesection content-alignment wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="image">
                        <img src="<?= Yii::$app->request->baseUrl . '/uploads/berita/' . $model->foto ?>"
                             class="img-responsive img-rounded" alt="img1bg">

                        <div class="row  image_under_data ">
                            <span><b>By</b>: <?= $model->getIdUser()->one()->username ?>  </span>
                            <a href="#" class="hidden-xs"><span class="pull-right calendar"><i
                                        class="fa fa-calendar"></i>
                                    <?php $tgl = date_create($model->tanggal);
                                    $hsl = date_format($tgl, 'd M Y');
                                    echo $hsl;
                                    ?>
                                    </span></a>

                        </div>
                    </div>
                </div>
                <!--======paragraph section================-->
                <div class="row wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="col-md-12 section-top-align content-alignment1">
                        <p class="p1"<?= substr($model->isi_berita, 0, 500) . ' . . .' ?></p>
                    </div>
                </div>
                <a href="<?= Yii::$app->request->baseUrl . '/berita/baca?id=' . $model->id ?>"
                   class="btn btn-info  btn-lg wow fadeInLeft" data-wow-duration="1s"
                   data-wow-delay="0.2s">READ ARTICLE </a>
                <hr/>
            <?php } ?>
            <div class="row wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 ">
                    <ul class="pager">
                        <li class="previous"><a href="#"><i class="fa fa-long-arrow-left"></i>&nbsp;Previous</a></li>
                        <li><a href="#"><span class="text-primary">1</span></a></li>
                        <li><a href="#">2</a></li>
                        <li class="next"><a href="#">Next&nbsp;<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--====================right side row start===================-->
        <div class="clearfix visible-xs-block visible-sm-block"></div>
        <div class="col-md-4 blog_top_35 row_alignment right-side-menu">

            <div class="row   wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 bg-default border_blog content-alignment categories services_section">
                    <h5><span class="header_help">Kate</span>gori</h5>

                    <div class="bhover section-top-30">
                        <?php foreach ($kategori as $modelKategori) {
                            $htngKategori = \backend\models\Berita::find()->where(['id_kategori' => $modelKategori->id])->count();
                            ?>
                            <li>
                                <a href="<?= Yii::$app->request->baseUrl . '/berita/kategori?id=' . $modelKategori->id ?>"><?= $modelKategori->nama_kategori ?>
                                    <span
                                        class="badge pull-right"> <?= $htngKategori ?></span>
                                </a>
                            </li>
                            <hr class="hr_align">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row border_blog bg-default  content-alignment categories  wow fadeInRight"
                 data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 section-top-15">
                    <h5><span class="header_help">Berita</span> Terbaru</h5>
                </div>
                <div class="col-xs-12">
                    <ul class="newsticker list-unstyled">
                        <?php foreach ($beritaAkhir as $beritaTerakhir) {
                            ?>
                            <li>
                                <div class="row Populartext">
                                    <div class="col-md-3 col-sm-2 col-xs-3">
                                        <img width="50px" height="50px"
                                             src="<?= Yii::$app->request->baseUrl . '/uploads/berita/' . $beritaTerakhir->foto ?>"
                                             style="border: 0px;border-radius: 100px;" alt="image-missing">
                                    </div>
                                    <div class="col-md-9 col-sm-10 col-xs-9 content-alignment1"><a
                                            href="<?= Yii::$app->request->baseUrl . '/berita/baca?id=' . $beritaTerakhir->id ?>">
                                            <p
                                                class="popularbg"><?= $beritaTerakhir->judul ?> &nbsp;&nbsp;<span><i
                                                        class="fa fa-long-arrow-right"></i></span></p></a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .imagesection .image_under_data {
        margin: 15px 0 0 0px;
    }

    .bhover:hover a {
        color: #333;
    }

    .badge {
        border-radius: 50%;
        background-color: #ff6490;
        padding: 2%;
    }
</style>