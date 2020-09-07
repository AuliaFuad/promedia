<?php
use backend\models\Service;
use backend\models\Tentang;
use backend\models\Portofolio;
use backend\models\Berita;
use backend\models\Project;
use backend\models\Team;

$this->title = "Home | Promedia";
$baseUrl = Yii::$app->request->baseUrl;
$slider = \backend\models\SliderHomepage::find()->orderBy(['id' => SORT_DESC])->limit(1)->one();
$sliderC = \backend\models\SliderHomepage::find()->where(['<>','id', $slider->id])->orderBy(['id' => SORT_DESC])->all();
$ser = \backend\models\Service::find()->orderBy(['judul' => SORT_ASC])->all();

$prod = Service::find()->limit(3)->orderBy(['id' => SORT_DESC   ])->all();
$tgt = Tentang::find()->limit(1)->one();
$port = Portofolio::find()->limit(3)->orderBy(['id' => SORT_DESC   ])->all();
$brt = Berita::find()->limit(3)->orderBy(['id' => SORT_DESC   ])->all();
$prj = Project::find()->limit(4)->orderBy(['id' => SORT_DESC   ])->all();
$team = Team::find()->limit(4)->orderBy(['id' => SORT_DESC])->all();
?>

        <section class="portfolioPopUp animated">
            <div class="center_align" id="popupContentHolder">
                <div class="folioLoader text-center">
                    <span class="let1">l</span>  
                    <span class="let2">o</span>  
                    <span class="let3">a</span>  
                    <span class="let4">d</span>  
                    <span class="let5">i</span>  
                    <span class="let6">n</span>  
                    <span class="let7">g</span>  
                </div>
            </div>
        </section>

        <!-- Start Revolution Slider -->
        <section class="slider_4" id="home">
            <div class="rev_slider_wrapper">
                <div id="rev_slider_4" class="rev_slider" data-version="5.4.5">
                    <ul>

                        <!-- MINIMUM SLIDE STRUCTURE -->
                        <li data-transition="random" data-masterspeed="1000">

                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="<?= Yii::$app->request->baseUrl.'/uploads/' ?>slider/<?= $slider->background ?>" alt="Sky" class="rev-slidebg">

                            <div class="tp-caption tp-resizeme normalWraping" 

                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 

                                 data-x="left" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['-95', '-75', '-75', '-25']"
                                 data-width="100%"
                                 data-height="auto"
                                 data-whitesapce="['normal']"
                                 data-fontsize="30"
                                 data-lineheight="30"
                                 data-fontweight="300"
                                 data-letterspacing="0"
                                 data-color="#FFF"
                                 data-textAlign="left"
                                 ><div class="singnature">Yoox introducing</div></div>
                            <div class="tp-caption tp-resizeme normalWraping" 

                                 data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 

                                 data-x="left" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['25', '15', '0', '25']"
                                 data-width="['700', '100%', '100%', '100%']"
                                 data-height="['165', 'auto', 'auto', 'auto']"
                                 data-whitesapce="['normal']"
                                 data-fontsize="['100', '80', '60', '30']"
                                 data-lineheight="['68', '60', '60', '30']"
                                 data-fontweight="700"
                                 data-letterspacing="0"
                                 data-color="#FFF"
                                 data-textAlign="left"
                                 ><?= $slider->judul ?></div>
                        </li>
                        <?php
                        foreach($sliderC as $sd){
                            ?>
                        <li data-transition="random" data-masterspeed="1000">

                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="<?= Yii::$app->request->baseUrl.'/uploads/' ?>slider/<?= $sd->background ?>" alt="Sky" class="rev-slidebg">

                            <div class="tp-caption tp-resizeme normalWraping" 

                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 

                                 data-x="left" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['-95', '-75', '-75', '-25']"
                                 data-width="100%"
                                 data-height="auto"
                                 data-whitesapce="['normal']"
                                 data-fontsize="30"
                                 data-lineheight="30"
                                 data-fontweight="300"
                                 data-letterspacing="0"
                                 data-color="#FFF"
                                 data-textAlign="left"
                                 ><div class="singnature">Yoox introducing</div></div>
                            <div class="tp-caption tp-resizeme normalWraping" 

                                 data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 

                                 data-x="left" 
                                 data-y="center" 
                                 data-hoffset="0" 
                                 data-voffset="['25', '15', '0', '25']"
                                 data-width="['700', '100%', '100%', '100%']"
                                 data-height="['165', 'auto', 'auto', 'auto']"
                                 data-whitesapce="['normal']"
                                 data-fontsize="['100', '80', '60', '30']"
                                 data-lineheight="['68', '60', '60', '30']"
                                 data-fontweight="700"
                                 data-letterspacing="0"
                                 data-color="#FFF"
                                 data-textAlign="left"
                                 ><?= $sd->judul ?></div>
                        </li>
                        <?php } ?>

                    </ul><!-- END SLIDES LIST -->
                </div>
            </div>
            <!--<div class="container">
                <div class="col-lg-12">
                    <div class="popUpvideo">
                        <a class="video_link" href="https://www.youtube.com/watch?v=SUwZa_Q07LE"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>-->
        </section>

        <div class="bg_position">
            <div class="perelaxBg1"></div>
            <section class="comonSection grays" id="services">
                <div class="container">
                    <div class="row mb82">
                        <div class="col-lg-6 col-sm-6 mobileCenter">
                            <h5 class="section_subtitle">Produk & Layanan</h5>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-right fixedLineHeight">
                            <a href="#" class="yoox_link"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section_title">Produk & Layanan</h2>
                            <p class="section_desc">We are committed to providing our customers with exceptional service<br> while offering our employees the best training.</p>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($prod as $newProd) { ?>
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="icon_box_1 text-center">
                                    <div class="box_inner">
                                        <div class="img-service" >
                                            <a href="<?= $baseUrl.'/service/baca?id='.$newProd->id ?>"><img src="<?= $baseUrl.'/uploads/service/'.$newProd->gambar ?>" alt="" style="height: 100%;width: 100%;"/></a>
                                        </div>
                                        <a href="<?= $baseUrl.'/service/baca?id='.$newProd->id ?>"><h4><?= $newProd->judul ?></h4></a>
                                        <p>
                                            <?= substr($newProd->isi, 0, 200)?>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div style="padding-top: 40px">
                        <center><a href="<?= $baseUrl.'/service' ?>" class="abc_discover_btn fix_btn read_btn">Selengkapnya</a></center>
                    </div>
                </div>
            </section>
        </div>

        <section class="comonSection testimonialSection" style="background: url(<?= $baseUrl ?>/promedia/images/backone.jpg) no-repeat fixed center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section_title" style="color: white">Testimonial Klien</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="testimonial_carousel">
                            <div class="testimonial_item text-center">
                                <p>
                                    This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                                </p>
                                <h5>Christine Eve<span>-</span><span>Co Founder</span></h5>
                            </div>
                            <div class="testimonial_item text-center">
                                <p>
                                    This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                                </p>
                                <h5>Christine Eve<span>-</span><span>Co Founder</span></h5>
                            </div>
                            <div class="testimonial_item text-center">
                                <p>
                                    This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                                </p>
                                <h5>Christine Eve<span>-</span><span>Co Founder</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="comonSection portfolioSection" id="portofolio">
            <div class="container">
                <div class="row mb82">
                    <div class="col-lg-6 col-sm-6 mobileCenter">
                        <h5 class="section_subtitle">Portofolio</h5>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right fixedLineHeight">
                        <a href="#" class="yoox_link"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section_title">Portofolio</h2>
                        <p class="section_desc">We are committed to providing our customers with exceptional service<br> while offering our employees the best training.</p>
                    </div>
                </div>
                <div class="row">
                <?php foreach($port as $newPorto) { ?>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="<?= $baseUrl.'/uploads/portofolio/'.$newPorto->gambar ?>" alt="" />
                            <div class="folioHover">
                                <a class="btn_folio" href="<?= $baseUrl.'/portofolio/baca?id='.$newPorto->id ?>"><img src="<?= $baseUrl ?>/promedia/images/home_1/chroven_right.png" alt=""/></a>
                                <div class="foliodesc">
                                    <a class="cate" href="<?= $baseUrl.'/portofolio/baca?id='.$newPorto->id ?>"><?= $newPorto->judul ?></a>
                                    <h4><a href="<?= $baseUrl.'/portofolio/baca?id='.$newPorto->id ?>">Lean More</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div style="padding-top: 40px">
                    <center><a href="<?= $baseUrl.'/portofolio' ?>" class="abc_discover_btn fix_btn read_btn">Selengkapnya</a></center>
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
                    <div class="col-lg-6 col-sm-12 col-md-5">
                        <div class="teamSkills">
                            <div class="singleSkill" data-limit="95">
                                <h5>Development</h5>
                                <div class="skillbar">
                                    <span class="parcent" data-count="95">95%</span>
                                    <span class="rounds"></span>
                                    <div class="skill"><span></span></div>
                                </div>
                            </div>
                            <div class="singleSkill" data-limit="32">
                                <h5>Applications</h5>
                                <div class="skillbar">
                                    <span class="parcent" data-count="32">32%</span>
                                    <span class="rounds"></span>
                                    <div class="skill"><span></span></div>
                                </div>
                            </div>
                            <div class="singleSkill" data-limit="81">
                                <h5>Graphic Design</h5>
                                <div class="skillbar">
                                    <span class="parcent" data-count="81">81%</span>
                                    <span class="rounds"></span>
                                    <div class="skill"><span></span></div>
                                </div>
                            </div>
                            <div class="singleSkill" data-limit="69">
                                <h5>Wordpress</h5>
                                <div class="skillbar">
                                    <span class="parcent" data-count="69">69%</span>
                                    <span class="rounds"></span>
                                    <div class="skill"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <!--<form class="subscripform" action="#" method="post">
                            <h4>Let’s Create Someting Great Together</h4>
                            <input type="email" placeholder="Enter your email address" name="email" value=""/>
                            <button class="fix_btn" type="submit">Subscribe</button>
                        </form>-->
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-7">
                        <div class="row">
                            <?php foreach ($team as $newTeam) { ?>
                            <div class="col-lg-6 col-sm-6">
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
                            <div class="col-lg-6 col-sm-6">
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
                            <div class="col-lg-6 col-sm-6">
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
                            <div class="col-lg-6 col-sm-6">
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
                    </div>
                </div>
                <!--<div style="padding-top: 40px">
                    <center><a href="#" class="abc_discover_btn fix_btn read_btn">Selengkapnya</a></center>
                </div>-->
            </div>
        </section>

        <section class="comonSection portfolioSection" id="project">
            <div class="container">
                <div class="row mb82">
                    <div class="col-lg-6 col-sm-6 mobileCenter">
                        <h5 class="section_subtitle">Project</h5>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right fixedLineHeight">
                        <a href="#" class="yoox_link"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section_title">Project</h2>
                        <p class="section_desc">We are committed to providing our customers with exceptional service<br> while offering our employees the best training.</p>
                    </div>
                </div>
                <div class="row">
                <?php foreach($prj as $newPrj) { ?>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="singlefolio">
                            <img src="<?= $baseUrl.'/uploads/project/'.$newPrj->gambar ?>" alt="" />
                            <div class="folioHover">
                                <a class="btn_folio popupEnabler" href="<?= $baseUrl.'/project/baca?id='. $newPrj->id ?>"><img src="<?= $baseUrl .'/promedia/images/home_1/chroven_right.png' ?>" alt=""/></a>
                                <div class="foliodesc">
                                    <a class="cate" href="<?= $baseUrl.'/project/baca?id='. $newPrj->id ?>"><?= $newPrj->judul ?></a>
                                    <h4><a href="<?= $baseUrl.'/project/baca?id='. $newPrj->id ?>">Lean More</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div style="padding-top: 40px">
                    <center><a href="<?= $baseUrl ?>/project" class="abc_discover_btn fix_btn read_btn">Selengkapnya</a></center>
                </div>
            </div>
        </section>

        <section class="comonSection latestBlogSection" id="berita">
            <div class="container">
                <div class="row mb82">
                    <div class="col-lg-6 col-sm-6 mobileCenter">
                        <h5 class="section_subtitle">Berita</h5>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right fixedLineHeight">
                        <a href="#" class="yoox_link"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section_title">Berita & Artikel</h2>
                        <p class="section_desc">We are committed to providing our customers with exceptional service<br> while offering our employees the best training.</p>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($brt as $newBrt) { ?>
                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="latestBlogItem">
                                <div class="lbi_thumb">
                                    <img src="<?= $baseUrl.'/uploads/berita/'.$newBrt->foto ?>" alt=""/>
                                </div>
                                <div class="lbi_details">
                                    <a href="#" class="lbid_date"><?= $newBrt->tanggal ?></a>
                                    <h2><a href="<?= $baseUrl.'/berita/baca?id='.$newBrt->id ?>"><?= $newBrt->judul ?></a></h2>
                                    <p class="lbid_meta"><a href="#">By Admin</a>-<a href="#">30 Likes</a>-<a href="#">4 Comments</a></p>
                                    <div class="lbid_det">
                                        <?= substr($newBrt->isi_berita, 0,120) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div style="padding-top: 40px">
                    <center><a href="<?= $baseUrl.'/berita' ?>" class="abc_discover_btn fix_btn read_btn">Selengkapnya</a></center>
                </div>
            </div>
        </section>

        <div class="bg_position">
            <div class="perelaxBg2"></div>
            <section class="comonSection aboutUsSection" id="about">
                <div class="container">
                    <div class="row mb82">
                        <div class="col-lg-6 col-sm-6 mobileCenter">
                            <h5 class="section_subtitle">Tentang Kami</h5>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-right fixedLineHeight">
                            <a href="#" class="yoox_link"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section_title">Tentang Kami</h2>
                            <p class="section_desc">Segala jenis konsultasi dan solusi bisnis jangan ragu untuk menghubungi kami</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="aboutus_content">
                                <img src="<?= $baseUrl ?>/promedia/images/backone.jpg" alt=""/>
                                <div class="abc_inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5 col-md-4 abc_btn_col">
                                            <a href="<?= $baseUrl.'/tentang'?>" class="abc_discover_btn fix_btn">Selengkapnya</a>
                                        </div>
                                        <div class="col-lg-8 col-sm-7 col-md-8">
                                            <div class="abci_content">
                                                <h2>PT. Promedia Citra Informatindo</h2>
                                                <p><?= substr($tgt->isi, 0, 400) ?>...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

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