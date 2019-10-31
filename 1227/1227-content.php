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
     <div class=" text-center">
     <div class="swiper-container">
          <div class="parallax-bg" style="background-image:url(./images/1227_bg-header-6.jpg)" data-swiper-parallax="-23%"></div>
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="title" data-swiper-parallax="-300">
                      <h2 class="text-white">SERVICE</h2>
                      <hr class="divider light my-4">
                    </div>
                    <div class="subtitle" data-swiper-parallax="-200">
                      <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="title" data-swiper-parallax="-300">
                      <h2 class="text-white">We've got what you need!</h2>
                      <hr class="divider light my-4">
                    </div>
                    <div class="subtitle" data-swiper-parallax="-200">
                      <p class="text-white-50 mb-4">Choose the skill you want to practise today and improve your English at your own speed, whenever it's convenient for you</p>
                    </div>
                  </div>
              </div>
              <div class="swiper-pagination swiper-pagination-white"></div>
              <div class="swiper-button-prev swiper-button-white"></div>
              <div class="swiper-button-next swiper-button-white"></div>
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