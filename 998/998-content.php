<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-998">  
    <div class="container">
        <div class="row header-top-line">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="pull-left">
                    <div id="rb_email_widget-3" class="widget ">
                        <a  href="#">
                            <i class="fa fa-envelope"></i>demo@gmail.com</a>
                    </div>
                    <div id="rb_phone_widget-3" class="widget hidden-xs">
                        <a href="">
                            <i class="fa fa-phone"></i>+460 123 456 789
                        </a>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="pull-right">
                    <div id="text-3" class="widget hidden-xs">      
                        <div class="clearfix">
                            <div class="rbSocial clearfix icons">
                                <ul class="list-unstyled">
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-cloud"></i></a></li>
                                    <li><a href=""><i class="fa fa-feed"></i></a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                    <form class="navbar-form widget" role="search" id="searchform">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search the site" name="s" id="s" type="text">
                            <div class="input-group-btn">
                                <button class="btn btn-default" id="searchsubmit" type="submit"><i class="glyphicon glyphicon-search iconsearch"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>

                
            </div>
        </div>                  
    </div> 
    <div class="container">
        <div class="row line-tottom1">
            <div class="col-xs-12 hidden-xs col-sm-12 col-md-2">
                <div class="logo">
                    <a href="">
                        <img alt="logo" src="./images/logo.png">
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-sm-10">
                <div class="navbar navbar-default" id="menu" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header hidden-sm">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden col-xs-8 visible-xs" href="#"> <img src="http://<?php echo $url_path ?>/images/logo.png" alt=""/></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav" id="menu-main-menu">
                            <li class="dropdown"><a href="#" class="dropdown-toggle selected" data-toggle="dropdown">Homepage</a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="#">Home 1 – Agency</a></li>
                                    <li><a href="#">Home 2 – Complete</a></li>
                                    <li><a href="#">Home 3 – Typography</a></li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a> </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Features</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="cart-widget">
                    <a class="cart-contents" href="" title="View your shopping cart">
                        <i class="fa fa-shopping-cart card"></i>
                        <p class="col-xs hidden-xs">0 items 
                            <span class="amount col-xs hidden-xs">
                                <span class="col-xs hidden-xs">$0.00</span></span></p>              
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
