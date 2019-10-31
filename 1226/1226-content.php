<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-1226">
        <!--CONTAINER-->
        <div class="container line">
            <!--ROW-->
            <div class="row">
                <!--MAP-->
                <div class="col-md-8 col-xs-12 dis-contact">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4647139694903!2d106.75635931428761!3d10.852215460758954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1572514582696!5m2!1svi!2s" width="750" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!--/MAP-->
                <!--CONTACT-->
                <div class="col-md-4 col-xs-12">
                    <!--INFO-->
                    <div class="info">
                        <h1 class="lh">Liên hệ: </h1>
                        <h4>
                            <i class="fa fa-home" aria-hidden="true">
                            <span class="ss-1226">Công ty cổ phần xây dựng Sài Gòn KT-ROYAL</span>
                        </i>
                        </h4>
                        <h4>
                            <i class="fa fa-map-marker" aria-hidden="true">
                                <span class="ss-1226">43 đường số 6, Đinh Bộ Lĩnh, P.26, Q.Bình Thạnh, Tp.HCM</span>
                            </i>
                        </h4>
                        <h4>
                            <i class="fa fa-mobile" aria-hidden="true">
                                <span class="ss-1226">0982.956.427 </span>
                            </i>
                        </h4>
                        <h4>
                            <i class="fa fa-envelope-o" aria-hidden="true">
                            <span class="ss-1226">Thaikienkts@gmail.com</span>
                        </i>
                    </h4>
                        <div class="social_icons">
                    <a class="icon icon_facebook" href="#">
                        <i class="fa fa-facebook-f"></i>
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a class="icon icon_gplus" href="#"><i class="fa fa-google"></i><i class="fa fa-google"></i></a>
                    <a class="icon icon_mail" href="#"><i class="fa fa-envelope"></i><i class="fa fa-envelope"></i></a>
                </div>
                    </div>
                    <!--/INFO-->
                </div>
                <!--/CONTACT-->
            </div>
            <!--/ROW-->
        </div>
        <!--/CONTAINER-->
    </div>

