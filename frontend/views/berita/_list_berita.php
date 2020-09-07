<?php
/**
 * Created by PhpStorm.
 * User: K0D1K
 * Date: 17/04/2018
 * Time: 15:24
 */
$tg = date_create($model->tanggal);
$hsl = date_format($tg, 'd M Y');
?>
            
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="latestBlogItem">
                            <div class="lbi_thumb">
                                <a href="<?= Yii::$app->request->baseUrl.'/berita/baca?id='.$model->id ?>">
                                    <img src="<?= Yii::$app->request->baseUrl.'/uploads/berita/'.$model->foto ?>" alt="" />
                                </a>
                            </div>
                            <div class="lbi_details">
                                <a href="#" class="lbid_date"><?= $hsl ?></a>
                                <h2><a href="<?= Yii::$app->request->baseUrl.'/berita/baca?id='.$model->id ?>"><?= $model->judul ?></a></h2>
                                <!--<p class="lbid_meta"><a href="#">By Admin</a>-<a href="blog_single.html">30 Likes</a>-<a href="blog_single.html">4 Comments</a></p>-->
                                <div class="lbid_det">
                                    <?= substr($model->isi_berita,0,150)."..."; ?>
                                </div>
                            </div>
                        </div>
                    </div>

