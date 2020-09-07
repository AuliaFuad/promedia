<?php
$alamat = \backend\models\Alamat::Find()->limit(1)->one();

?>
        <footer class="footer_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-4 text-left">
                        <div class="foo_social">
                            <a class="twi" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="pin" href="#"><i class="fa fa-pinterest"></i></a>
                            <a class="fac" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="you" href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-2">
                        <p><?= $alamat->no_kantor ?><br> <a href="#"><?= $alamat->email ?></a></p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <p><?= $alamat->alamat ?></p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <p>© Copyrights by <a href="#">Promedia</a></p>
                    </div>
                </div>
            </div>
        </footer>