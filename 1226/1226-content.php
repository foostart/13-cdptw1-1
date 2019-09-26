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
                <div class="col-md-9 col-xs-12 dis-contact">
                    <div class="maps">
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9808979555014!2d106.70530451477175!3d10.812773492296875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528965ce85f51%3A0xdc955af39102151a!2zNDMgxJDGsOG7nW5nIHPhu5EgNg!5e0!3m2!1sen!2s!4v1525610301467" width="800" height="300"  style="border:0 ; border: 0px;" allowfullscreen></iframe>
                    </div>
                </div>
                <!--/MAP-->
                <!--CONTACT-->
                <div class="col-md-3 col-xs-12">
                    <!--INFO-->
                    <div class="info">
                        <h1 class="lh">Liên hệ: </h1>
                        <h4><i class="fa fa-home" aria-hidden="true">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty cổ phần xây dựng Sài Gòn KT-ROYAL</i></h4>
                        <h4><i class="fa fa-map-marker" aria-hidden="true">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;43 đường số 6, Đinh Bộ Lĩnh, P.26, Q.Bình Thạnh, Tp.HCM</i></h4>
                        <h4><i class="fa fa-mobile" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;0982.956.427 </i></h4>
                        <h4><i class="fa fa-envelope-o" aria-hidden="true">&nbsp;&nbsp; &nbsp;&nbsp;Thaikienkts@gmail.com</i></h4>
                        <div class="contact-page">
                            <a href="#" class="bnfb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="bnytb"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#" class="bnins"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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

