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
    $less->compileFile('less/1227.less', 'css/1227.css');
    
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
      
        <link href="<?php echo $url_path ?>/css/1227.css" rel="stylesheet" type="text/css" /> 
       <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">     
          <link href="<?php echo $url_path ?>/css/bootstrap-3.4.1/css/bootstrap.min.css" rel="stylesheet">    
        <title>Module 1227</title>
    </head>

    <body>
        <?php
            include '1227-content.php';
        ?>
       
     
    </body>

</html>




