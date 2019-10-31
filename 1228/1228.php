<!DOCTYPE html>
<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1228.less', 'css/1228.css');  
?>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>1228</title>  
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <link href="css/1228.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/1228.js"></script>  
    <link href="<?php echo $url_path ?>/css/bootstrap-3.4.1/css/bootstrap.min.css" rel="stylesheet">  
    <script src="<?php echo $url_path ?>/js/swiper.js"></script>
    <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet">  
    <link href="<?php echo $url_path ?>/css/swiper.css" rel="stylesheet">  
    <script src="swiper/js/swiper.js"></script>
</head>
<body>
    <?php include $dir_block.'/1228-content.php'; ?>  
    
</body>
