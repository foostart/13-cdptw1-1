<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
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
           
                    <!--ROW-->
                    <div class="row">
                        <p class="col1 col-md-2 col-sm-2 title-style">空間性質</p>
                        <p class="col2 col-md-10 col-sm-10 ">往宅空間</p>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <p class="col1 col-md-2 col-sm-2 title-style">座落位置</p>
                        <p class="col2 col-md-10 col-sm-10">新北市樹林區</p>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <p class="col1 col-md-2 col-sm-2 title-style">建物面積</p>
                        <p class="col2 col-md-10 col-sm-10">36坪</p>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <p class="col1 col-md-2 col-sm-2 title-style">室內格局</p>
                        <p class="col2 col-md-10 col-sm-10">客廳、 餐廳、 書房、 主臥室、 客房</p>
                    </div>
                    <!--/ROW-->
                    <hr>
                    <!--ROW-->
                    <div class="row">
                        <p class="col1 col-md-2 col-sm-2 title-style">主要材料</p>
                        <p class="col2 col-md-10 col-sm-10">每木皮、 美耐板  美耐板、 烤漆玻璃、 噴砂玻璃、 霧面石英磚</p>
                    </div>
                    <!--/ROW-->
              
                <!--/CASE-->
            </div>
            <!--/DESCRIPTION-->
            <!--META-->
            <div class="col-md-4 meta">
                <button type="button" class="btn btn_meta">深 淺 混 搭 系</button>
                <button type="button" class="btn btn_meta">木商</button>
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
                        <a class="post_title" href="#"><h5>精雕細琢 、 堂而皇之</h5></a>
                        <span><a href="#">台中市</a> , <a href="#">中區</a> , <a href="#">70坪</a> , <a href="#">大坪飲</a> , <a href="#">淺色系    </a></span>
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
                        <a class="post_title" href="#"><h5>生活如花 、 恰然日德</h5></a>
                          <span><a href="#">台中市</a> , <a href="#">中區</a> , <a href="#">38坪</a> , <a href="#">大坪飲</a> , <a href="#">淺色系    </a></span>
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