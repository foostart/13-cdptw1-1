<!DOCTYPE html>
<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
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
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">       
    <link href="<?php echo $url_path ?>/css/1228.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo $url_path ?>/js/1228.js" type="text/javascript"></script>  
</head>

<body>
    <?php include $dir_block.'/1228-content.php'; ?>
</body>
