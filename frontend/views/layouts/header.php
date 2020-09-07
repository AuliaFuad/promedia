<?php
//$slider = \backend\models\SliderHomepage::find()->orderBy(['id' => SORT_DESC])->limit(1)->one();
//$sliderC = \backend\models\SliderHomepage::find()->where(['<>','id', $slider->id])->orderBy(['id' => SORT_DESC])->all();
//$ser = \backend\models\Service::find()->orderBy(['judul' => SORT_ASC])->all();
$alamat = \backend\models\Alamat::find()->limit(1)->one();
$baseUrl = Yii::$app->request->baseUrl;
?>
<!-- Preloader -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        
        <!-- Search From -->
        <section class="searchFixed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" method="post" class="SearchForm">
                            <input type="search" name="serch" placeholder="Search Here...">
                            <button class="fix_btn" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Header -->
        <header class="header_02 headerFix">       
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-1">
                        <div class="logo">
                            <a href="./"><img src="<?= $baseUrl ?>/promedia/images/logo.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-9">
                        <nav class="mainMenu text-center">
                            <ul>
                                <?php
                                    if (Yii::$app->controller->id == 'site') {
                                        echo '<li class="scroll"><a href="#home">home</a></li>
                                        <li class="scroll"><a href="#services">layanan</a></li>
                                        <li class="scroll"><a href="#portofolio">portofolio</a></li>
                                        <li class="scroll"><a href="#team">team</a></li>
                                        <li class="scroll"><a href="#project">project</a></li>
                                        <li class="scroll"><a href="#berita">berita</a></li>
                                        <li class="scroll"><a href="#about">tentang kami</a></li>';
                                    } else {  echo '<li><a href="'.Yii::$app->request->baseUrl.'">home</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/service">layanan</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/portofolio">portofolio</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/team">team</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/project">project</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/berita">berita</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/tentang">tentang Kami</a></li>';
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <div class="navigator_right text-right">
                            <a href="javascript:void(0);" class="naviSearch searchToggler"><i class="yoox-magnifying-glass"></i></a>
                            <a href="javascript:void(0);" class="naviUser mobilemenu"><i class="yoox-menu hidden-sm hidden-md hidden-lg"></i></a>
                            <a href="javascript:void(0);" id="open-overlay-nav" class="naviUser hamburger hidden-xs"><i class="yoox-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Overlay Menu -->
        <div class="popup popup__menu">
            <a href="" id="close-popup" class="close-popup"></a>
            <div class="container mobileContainer">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <div class="logo2">
                            <a href="index.html"><img src="<?= $baseUrl ?>images/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popup-inner">
                            <div class="dl-menu__wrap dl-menuwrapper">
                                <ul class="dl-menu dl-menuopen">
                                    <?php
                                    if (Yii::$app->controller->id == 'site') {
                                        echo '<li class="scroll"><a href="#home">home</a></li>
                                        <li class="scroll"><a href="#services">layanan</a></li>
                                        <li class="scroll"><a href="#portofolio">portofolio</a></li>
                                        <li class="scroll"><a href="#project">project</a></li>
                                        <li class="scroll"><a href="#berita">berita</a></li>
                                        <li class="scroll"><a href="#about">tentang kami</a></li>';
                                    } else {  echo '<li><a href="'.Yii::$app->request->baseUrl.'/">home</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/service">layanan</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/portofolio">portofolio</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/project">project</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/berita">berita</a></li>
                                        <li><a href="'.Yii::$app->request->baseUrl.'/tentang">tentang Kami</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                        <ul class="footer__contacts text-left">
                            <li>Phone: <?= $alamat->no_kantor ?></li>
                            <li>Email: <?= $alamat->email ?></li>
                            <li>Alamat: <?= $alamat->alamat ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                        <div class="foo_social popUp_social text-right">
                            <a class="twi" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="pin" href="#"><i class="fa fa-pinterest"></i></a>
                            <a class="fac" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="you" href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Overlay Menu -->