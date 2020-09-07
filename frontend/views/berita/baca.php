<?php
$this->title = 'Baca Detail';
$tg = date_create($model->tanggal);
$hsl = date_format($tg, 'd M Y');
?>
        <section class="pageBanner" style="background: url(<?= Yii::$app->request->baseUrl ?>/promedia/images/backone.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2><?= $model->judul?></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Body Berita -->
        <section class="comonSection blogSinglePage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12 col-md-8">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <img src="<?= Yii::$app->request->baseUrl.'/uploads/berita/'.$model->foto ?>" alt=""/>
                            </div>
                            <div class="blog_headings">
                                <span class="blog_date"><?= $hsl ?></span>
                                <h2><?= $model->judul ?></h2>
                                <p class="blog_metas">
                                    <a href="#">By Admin</a>-<a href="#">30 Likes</a>-<a href="#">4 Comments</a>
                                </p>
                            </div>
                            <div class="blog_details">
                                <p>
                                    <?= $model->isi_berita ?>
                                </p>
                            </div>
                            <div class="tag_and_social">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="postSocial text-right">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-4 sidebar">
                        <aside class="widget search-widget">
                            <form method="post" action="#" class="searchform">
                                <input type="search" placeholder="Search here..." name="s" id="s"/>
                            </form>
                        </aside>
                        <aside class="widget recent_posts">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <div class="yoox_post_widget">
                                <?php foreach ($beritaAkhir as $lastBrt) { ?>
                                <div class="ypw_item">
                                    <img src="<?= Yii::$app->request->baseUrl.'/uploads/berita/'.$lastBrt->foto ?>" alt=""/>
                                    <a href="<?= Yii::$app->request->baseUrl.'/berita/baca?id='.$lastBrt->id ?>"><?= $lastBrt->judul ?></a>
                                </div>
                                <?php } ?>
                            </div>
                        </aside>
                        <aside class="widget categories">
                            <h3 class="widget_title">Kategori</h3>
                            <ul>
                                <?php foreach ($kategori as $newKtg) { ?>
                                    <li><a href="#"><?= $newKtg->nama_kategori ?></a></li>
                                <?php } ?>
                            </ul>
                        </aside>
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
