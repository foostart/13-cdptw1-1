<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1228">
 <div class="container"> 
 <div class="row">
    <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <div class="swiper-slide" ><img src="images/1228_1.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/1228_2.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/1228_3.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/1228_4.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/1228_5.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/1228_6.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/1228_7.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/1228_8.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/1228_1.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide"><img src="images/1228_2.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/1228_3.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/1228_4.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/1228_5.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/1228_6.jpg" alt="s1" style="width:104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/1228_7.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/1228_8.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
    </div>
  </div>
 </div>
</div>
  <!-- Swiper -->
</div>
  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
  </script>
