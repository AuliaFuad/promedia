<div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="<?= Yii::$app->request->baseUrl.'/uploads/portofolio/'. $model->gambar ?>" alt="">
                            <div class="folioHover">
                                <a class="btn_folio" href="<?= Yii::$app->request->baseUrl.'/portofolio/baca?id='.$model->id?>">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/promedia/images/home_1/chroven_right.png" alt=""/>
                                </a>
                                <div class="foliodesc">
                                    <a class="cate" href="<?= Yii::$app->request->baseUrl.'/portofolio/baca?id='.$model->id?>"><?= $model->judul?></a>
                                    <h4><a href="<?= Yii::$app->request->baseUrl.'/portofolio/baca?id='.$model->id?>">Lern More</a></h4>
                                </div>
                            </div>
                            <p><?= substr($model->isi, 0, 150) ?></p>
                        </div>
                    </div>