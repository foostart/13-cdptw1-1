<?php
include '../config.php';

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1229">
    <!--CONTAINER-->
    <div class="container line">
        <!--ROW-->
        <div class="row portfolio">
            <!--DESCRIPTION-->
            <div class="col-md-8 description">
                <!--CASE-->
                <dl class="case_info_detail">
                    <!--ROW-->
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Nature of space</dt>
                        <dd class="col2 col-md-9 col-sm-9">Residential space</dd>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Location</dt>
                        <dd class="col2 col-md-9 col-sm-9">New forest district</dd>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Building area</dt>
                        <dd class="col2 col-md-9 col-sm-9">36 pings</dd>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Indoor pattern</dt>
                        <dd class="col2 col-md-9 col-sm-9">Living room, dining room, study, master bedroom, guest room</dd>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <dt class="col1 col-md-3 col-sm-3">Main material</dt>
                        <dd class="col2 col-md-9 col-sm-9">Solid wood peel, US resistant board, painted iron, painted glass, sandblasted glass, matte quartz brick</dd>
                    </div>
                    <!--/ROW-->
                </dl>
                <!--/CASE-->
            </div>
            <!--/DESCRIPTION-->
            <!--META-->
            <div class="col-md-4 meta">
                <button type="button" class="btn btn_meta">Shallow mashups</button>
                <button type="button" class="btn btn_meta">Wooden</button>
                <!--ICONS-->
                <div class="social_icons">
                    <a class="icon icon_facebook" href="#">
                        <i class="fa fa-facebook-f"></i>
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a class="icon icon_gplus" href="#"><i class="fa fa-google"></i><i class="fa fa-google"></i></a>
                    <a class="icon icon_mail" href="#"><i class="fa fa-envelope"></i><i class="fa fa-envelope"></i></a>
                </div>
                <!--ICONS/-->
            </div>
            <!--/META-->
        </div>
        <!--/ROW-->
        <div class="row post_navigation">
            <!--COL-POST-->
            <div class="col-md-6 col_post">
                <!--POST-LEFT-->
                <div class="post left_post">
                    <a class="arrow_left" href="#"><i class="fa fa-arrow-left"></i></a>
                    <div class="content_post">
                        <a class="post_title" href="#"><h5>Carefully crafted, magnificent</h5></a>
                        <span><a href="#">Taichung City</a> , <a href="#">Central District</a> , <a href="#">70 pyeong</a> , <a href="#">Daping</a> , <a href="#">light-colored</a></span>
                    </div>
                </div>
                <!--/POST-LEFT-->
            </div>
            <!--/COL-POST-->
            <!--COL-POST-->
            <div class="col-md-6 col_post">
                <!--POST-RIGHT-->
                <div class="post right_post">
                    <a class="arrow_right" href="#"><i class="fa fa-arrow-right"></i></a>
                    <div class="content_post">
                        <a class="post_title" href="#"><h5>Life is picturesque and contentment</h5></a>
                        <span><a href="#">Taipei City</a> , <a href="#">Songshan District</a> , <a href="#">38 pyeong</a> , <a href="#">light-colored</a> , <a href="#">marble</a></span>
                    </div>
                </div>
                <!--/POST-RIGHT-->
            </div>
            <!--/COL-POST-->
        </div>
        <!--ROW-->
        <div class="row">
            <div class="divider_center">
                <div class="box_fa">
                    <i class="fa fa-circle"></i>
                </div>
            </div>
        </div>
        <!--/ROW-->
    </div>
    <!--/CONTAINER-->
</div>