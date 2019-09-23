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
        <img class="image-s" src="images/bg-header-6.jpg" alt="banner">
        <div class="text-center-image">
            <div class="text-1">
                <span>SERVICE</span>
            </div>
            <hr class="hr-size-color">
            <div class="text-2">客户服务</div>
        </div>
    </div>
    <!--/HEADER-->
    <!--CONTAINER-->
    <div class="container line">
        <!--PD-HEARDER-->
        <div class="pading-header">
            <div class="text-3">
                <span>客服團隊</span>
                <span class="color">服務核心</span>
            </div>
            <hr class="hr-size-color2">
            <div class="text-5">
                <span>隨時聯繫並請聽建議, 及時排除問題的能力。 成為客戶與成舍的溝通橋樑, 成為客戶與成舍的溝通橋樑</span>
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
                        <i class="border glyphicon glyphicon-user fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>詹美珠</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>TEL: 02-2501-3278 ext.209 </span>
                    </div>
                    <div class="text-7">
                        <span>FAX: 02-2501-3387 </span>
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
                        <i class="border glyphicon glyphicon-user fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>廖添發</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>TEL: 02-2501-3278 ext.207 </span>
                    </div>
                    <div class="text-7">
                        <span>FAX: 02-2501-3387  </span>
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
                        <i class="border glyphicon glyphicon-user fa-3x " aria-hidden="true"></i>
                    </div>
                    <div class="text-6">
                        <span>卓映辰</span>
                    </div>
                    <div class="hr-size-color3"></div>
                    <div class="text-7">
                        <span>TEL: 02-2501-3278 ext.202 </span>
                    </div>
                    <div class="text-7">
                        <span>FAX: 02-2501-3387  </span>
                    </div>
                </div>
                <!--/TEXT-->
            </div>
        </div>
        <!--/ROW-->
    </div>
    <!-- footer -->
     <div class="container boder-footer">
         <span class="contact-ft"> 免付营諮詢電話 </span> 
         <span class="footer-contact-sdt">0809-080-158</span>
     </div>
    <!--/CONTAINER-->
</div>