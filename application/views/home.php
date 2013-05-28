<html>
<head>
<title>Abyssal & Pelagic</title>
<link type="text/css" rel="stylesheet" href="css/main.css" >
<!--<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {
    $('.viewport').mouseenter(function(e) {
        $(this).children('a').children('img').animate({ height: '363', left: '0', top: '0', width: '242' }, 100);
        $(this).children('a').children('span').fadeIn(800);
    }).mouseleave(function(e) {
        $(this).children('a').children('img').animate({ height: '396', left: '-20', top: '-20', width: '264'}, 100);
        $(this).children('a').children('span').fadeOut(800);
    });
});
</script>
</head>
<body >
	<div class="wrapper">
    	<header>
        	<a class="logo-img-container trans-all" href="home.php">
            	<img src="img/logo.png">
            </a>
            <nav class="nav-menu-container">
            	<ul class="nav">
                	<li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>story">Story</a></li>
                    <li><a href="<?php echo base_url(); ?>goods">Goods</a></li>
                    <li><a href="<?php echo base_url(); ?>journal">Journal</a></li>
                    <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                    <div class="effect"></div>
                </ul>
            </nav>
        </header>
        <hr class="sexy_line">
        <div id="main" class="content">
            <div class="top-wrapper">
                <ul class="top-item-img">
                    <li>
                        <div class="viewport">
                            <a href="#">
                                <span>Test Title</span>
                                <img class="trans-slow" src="img/wallet4.jpg">
                            </a>
                         </div>
                    </li>
                    <li>
                        <div class="viewport">
                            <a href="#">
                                <span>Test Title</span>
                                <img class="trans-slow" src="img/wallet1.jpg">
                            </a>
                         </div>
                    </li>
                    <li>
                        <div class="viewport">
                            <a href="#">
                                <span>Test Title</span>
                                <img class="trans-slow" src="img/wallet2.jpg">
                            </a>
                         </div>
                    </li>
                    <li>
                        <div class="viewport">
                            <a href="#">
                                <span>Test Title</span>
                                <img class="trans-slow" src="img/wallet3.jpg">
                            </a>
                         </div>
                    </li>
                    <li>
                        <div class="viewport">
                            <a href="#">
                                <span>Test Title</span>
                                <img class="trans-slow" src="img/wallet4.jpg">
                            </a>
                         </div>
                    </li>                                        
                </ul>
            </div>
            <div class="desc-container">
        	<div class="title">
            <h2>Abyssal Collection</h2>
            </div>
            <div id="desc-home" class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue. Quisque at lacinia lacus. Suspendisse tempus purus libero, at ullamcorper libero. Curabitur auctor, lorem ornare sagittis sollicitudin, augue turpis posuere odio, nec sagittis orci ligula quis nunc. Nam eget metus magna, id tempor mauris. Pellentesque nec tellus eu nisi tempor feugiat. Cras ornare quam a urna bibendum vitae congue sapien dapibus. Integer lobortis bibendum erat eget suscipit. Nam et mauris et metus commodo suscipit a nec magna. Etiam at quam enim, eget euismod velit. Cras ut bibendum risus. Praesent libero diam, posuere et porttitor sit amet, condimentum ut sem.</p>
            </div>
        </div>
        </div>
        
    </div>
    <hr class="sexy_line">
    <footer class="footer-box footer-container">
    	<div class="footer-wrapper">
            <input type="text" class="footer-search" placeholder="Search...">
            <div class="footer-link-ext trans-all" id="link-ext">
                <span class="icon-collection"></span><a onClick="toggle();" id="collection-toggle">Gallery Collection</a>
            </div>
            <div class="footer-socmed">
                <div class="buttons">
                	<span>follow us : </span>
                    <a class="twitter" href=""><img src="img/twitter.png" /></a>
                    <a class="facebook" href=""><img src="img/facebook.png" /></a>
                </div>
            </div>
        </div>
	</footer>
    <div id="collection" class="hidden trans-slow">
    	<nav id="inner-panel">
        	<h3>Categories :</h3>
            <ul>
                <li class="trans-all"><a>wallet</a></li>
                <li class="trans-all"><a>bag</a></li>
                <li class="trans-all"><a>belt</a></li>
                <li class="trans-all"><a>camera strap</a></li>
                <li class="trans-all"><a>bracelet</a></li>
                <li class="trans-all"><a>shoes</a></li>
                <li class="trans-all"><a>others</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>