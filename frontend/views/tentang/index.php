<?php

/* @var $this yii\web\View */
use backend\models\Team;
$team = Team::find()->orderBy(['nama' => SORT_ASC])->all();
$baseUrl = Yii::$app->request->baseUrl;
$this->title = 'Tentang Kami | Promedia';
?>
<!-- Page Banner -->
<section class="pageBanner" style="background: url(<?= $baseUrl ?>/promedia/images/backone.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Tentang Kami</h2>
            </div>
        </div>
    </div>
</section>

        <div class="bg_position">
            <div class="perelaxBg2"></div>
            <section class="comonSection aboutUsSection" style="padding: 300px 0 50px 0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="aboutus_content">
                                
                                <div class="abc_inner">
                                    <div class="row">
                                        <div class="col-lg-8 col-sm-8 col-md-8">
                                            <div class="abci_content">
                                                <h2>PT. Promedia Citra Informatindo</h2>
                                                <p><?= $model->isi ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="comonSection teamsection" id="team">
            <div class="container">
                <div class="row mb82">
                    <div class="col-lg-6 col-sm-6 mobileCenter">
                        <h5 class="section_subtitle">Our Team</h5>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right fixedLineHeight">
                        <a href="#" class="yoox_link"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section_title">Meet our Professional Staff</h2>
                        <p class="section_desc">We are committed to providing our customers with exceptional service<br> while offering our employees the best training.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="row">
                            <?php foreach ($team as $newTeam) { ?>
                            <div class="col-lg-3 col-sm-3">
                                <div class="singleTeamMember">
                                    <img src="<?= $baseUrl.'/uploads/team/'. $newTeam->foto ?>" alt=""/>
                                    <div class="teamDesc">
                                        <h3><a href="#"><?= $newTeam->nama ?></a></h3>
                                        <h4>Co Founder</h4>
                                        <a class="teamSocial" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="teamSocial" href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="col-lg-3 col-sm-3">
                                <div class="singleTeamMember">
                                    <img src="<?= $baseUrl ?>/promedia/images/team/1.jpg" alt=""/>
                                    <div class="teamDesc">
                                        <h3><a href="#">Kevin Smith</a></h3>
                                        <h4>Co Founder</h4>
                                        <a class="teamSocial" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="teamSocial" href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <div class="singleTeamMember">
                                    <img src="<?= $baseUrl ?>/promedia/images/team/1.jpg" alt=""/>
                                    <div class="teamDesc">
                                        <h3><a href="#">Kevin Smith</a></h3>
                                        <h4>Co Founder</h4>
                                        <a class="teamSocial" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="teamSocial" href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <div class="singleTeamMember">
                                    <img src="<?= $baseUrl ?>/promedia/images/team/1.jpg" alt=""/>
                                    <div class="teamDesc">
                                        <h3><a href="#">Kevin Smith</a></h3>
                                        <h4>Co Founder</h4>
                                        <a class="teamSocial" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="teamSocial" href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 40px">
                            <center><a href="#" class="abc_discover_btn fix_btn read_btn">Selengkapnya</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <section class="comonSection readysection" style="background: url(<?= $baseUrl ?>/promedia/images/backone.jpg) no-repeat fixed center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-8 text-left">
                        <h2 class="section_title white">Segala jenis konsultasi dan solusi bisnis jangan ragu untuk menghubungi kami</h2>
                    </div>
                    <div class="col-lg-3 col-sm-4 text-right">
                        <a class="common_btn fix_btn" href="<?= $baseUrl.'/tentang' ?>">Contact with us</a>
                    </div>
                </div>
            </div>
        </section>

        <style type="text/css">
            .read_btn{
                height: 50px;
                display: block;
                width: 120px;
                background: #0038e3;
                color: #FFF;
                text-align: center;
                font-size: 20px;
                line-height: 50px;
                font-weight: 500;
                text-transform: uppercase;
                transition: all ease 400ms;
                -moz-transition: all ease 400ms;
                -webkit-transition: all ease 400ms;
            }
        </style>