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
      <div class="swiper-slide" ><img src="images/1.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/2.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/3.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/4.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/5.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/6.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/7.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
      <div class="swiper-slide" ><img src="images/8.jpg" alt="s1" style="width: 100%;height: 740px;cursor:pointer"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/1.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide"><img src="images/2.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/3.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/4.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/5.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/6.jpg" alt="s1" style="width:104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/7.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
      <div class="swiper-slide" ><img src="images/8.jpg" alt="s1" style="width: 104%;height: 154px;cursor:pointer "></div>
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
