<?php
include '../config.php';

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1228">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1170px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div class="jssorl-009-spin">
        </div>
        <!--SLIDES-->
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1170px;height:480px;overflow:hidden;">
            <!--/IMG-->
            <div data-p="200.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/7.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/7.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="200.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/bg-header-6.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/bg-header-6.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="200.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/content-rooms-1.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/content-rooms-1.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="200.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/content-rooms-3.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/content-rooms-3.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/content-rooms.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/content-rooms.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/5.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/5.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/6.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/6.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/1.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/1.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/2.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/2.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/3.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/3.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/4.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/4.jpg" />
                </div>
            </div>
            <!--/IMG-->
            <!--/IMG-->
            <div data-p="170.00">
                <img data-u="image" src="<?php echo $url_path ?>/images/5.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="<?php echo $url_path ?>/images/5.jpg" />
                </div>
            </div>
            <!--/IMG-->
        </div>
        <!--/SLIDES-->
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort111" style="position:absolute;left:0px;bottom:0px;width:1170px;height:100px;cursor:default;" >
            <!--SLIDES-->
            <div data-u="slides">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!--/SLIDES-->
        </div>
        <!-- Arrow Navigator -->
        <!--ARROWLEFT-->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:162px;left:25px;" >
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <!--/ARROWLEFT-->
        <!--/ARROWRIGHT-->
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:162px;right:25px;" >
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
        <!--/ARROWRIGHT-->
    </div>
</div>