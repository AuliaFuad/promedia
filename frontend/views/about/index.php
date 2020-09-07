<section class=" page_indicator">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right page_indicator_text">
                <a href="<?= Yii::$app->request->baseUrl ?>">Home </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i><span
                    class="text-primary">About</span>
            </div>
        </div>
    </div>
</section>
<!--======================Header section End============-->

<!--====================Body Section start===========-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center section-top-align">
                <h3>A<span class="header_help">bou</span>t</h3>
            </div>
            <div class="col-xs-12 col-md-4 text-center wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#">
               <span class="fa-stack fa-lg">
                 <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-home fa-stack-1x fa-inverse"></i>
            </span>

                </a><br/><br/><br/>
                <h5>Lokasi</h5><br/>

                <p><?= $model->alamat ?></p>

            </div>
            <div class="col-xs-12 col-md-4 text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#">
                <span class="fa-stack fa-lg">
                 <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
            </span>
                </a><br/><br/><br/>
                <h5>No. Telepon</h5><br/>

                <p><?= $model->no_kantor ?></p>
                </div>
            <div class="col-xs-12 col-md-4 text-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#">
                <span class="fa-stack fa-lg">
                 <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
            </span>
                </a>
                <br/><br/><br/>
                <h5>E-MAIL</h5><br/>
                <a href="#"><p><?= $model->email ?></p></a><br/>
            </div>
        </div>
    </div>
</section>