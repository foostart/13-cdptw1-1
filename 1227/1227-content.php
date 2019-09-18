<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1227">
    <!--HEADER-->
    <div class="header">
        <img class="image-s" src="images/bg-header-6.jpg">
        <div class="text-center-image">
            <div class="text-1">
                <span>KT-ROYAL</span>
            </div>
            <hr class="hr-size-color">
            <div class="text-2">Cung cấp dịch vụ</div>
        </div>
    </div>
    <!--/HEADER-->
    <!--CONTAINER-->
    <div class="container line">
        <!--PD-HEARDER-->
        <div class="pading-header">
            <div class="text-3">
                <span>Sứ mạng</span>
                <span class="color">KT-ROYAL</span>
            </div>
            <hr class="hr-size-color2">
            <div class="text-5">
                <span>Công trình của bạn là niềm hãnh diện cho đội ngủ KT-ROYAL chúng tôi</span>
            </div>
        </div>
        <!--/PD-HEARDER-->
        <div class="clear"></div>
        <!--WOR-->
        <div class="row">
            <!--COL-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--TEXT-->
                <div class="center-text">
                    <div class="pading-top">
                        <i class="border glyphicon glyphicon-stats fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>Tổng thầu xây dựng</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>The standard chunk of Lorem Ipsum </span>
                    </div>
                    <div class="text-7">
                        <span>chunk of Lorem Ipsum </span>
                    </div>
                </div>
                <!--/TEXT-->
            </div>
            <!--/COL-->
            <!--COL-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--TEXT-->
                <div class="center-text">
                    <div class="pading-top">
                        <i class="border glyphicon glyphicon-equalizer fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>Thiết kế và thi công</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>The standard chunk of Lorem Ipsum </span>
                    </div>
                    <div class="text-7">
                        <span>chunk of Lorem Ipsum </span>
                    </div>
                </div>
                <!--/TEXT-->
            </div>
            <!--/COL-->
            <!--COL-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--TEXT-->
                <div class="center-text">
                    <div class="pading-top">
                        <i class="border glyphicon glyphicon-tower fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>Nội thất</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>The standard chunk of Lorem Ipsum </span>
                    </div>
                    <div class="text-7">
                        <span>chunk of Lorem Ipsum </span>
                    </div>
                </div>
                <!--/TEXT-->
            </div>
            <!--/COL-->

            <!--COL-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--TEXT-->
                <div class="center-text">
                    <div class="pading-top">
                        <i class="border glyphicon glyphicon-tasks fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>Hạ tầng</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>The standard chunk of Lorem Ipsum </span>
                    </div>
                    <div class="text-7">
                        <span>chunk of Lorem Ipsum </span>
                    </div>
                </div>
                <!--/TEXT-->
            </div>
            <!--/COL-->

            <!--COL-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--TEXT-->
                <div class="center-text">
                    <div class="pading-top">
                        <i class="border glyphicon glyphicon-flash fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>Cơ điện</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>The standard chunk of Lorem Ipsum </span>
                    </div>
                    <div class="text-7">
                        <span>chunk of Lorem Ipsum </span>
                    </div>
                </div>
                <!--/TEXT-->
            </div>
            <!--/COL-->

            <!--COL-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--TEXT-->
                <div class="center-text">
                    <div class="pading-top">
                        <i class="border glyphicon glyphicon-fullscreen fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>Dịch vụ khác</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>The standard chunk of Lorem Ipsum </span>
                    </div>
                    <div class="text-7">
                        <span>chunk of Lorem Ipsum </span>
                    </div>
                </div>
                <!--/TEXT-->
            </div>
            <!--/COL-->

        </div>
        <!--/ROW-->
    </div>
    <!--/CONTAINER-->
</div>