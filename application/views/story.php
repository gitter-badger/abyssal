<html>
<head>
<title>Abyssal</title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/css/main.css" >
<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
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
        	<a class="logo-img-container trans-all" href="<?php echo base_url(); ?>home">
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
             <div class="story-container">
			 <?php foreach($data as $story) { ?>
                <div class="side">
                    <div class="title">
                        <h2><?php echo $story->title; ?></h2>
                    </div>
                    <div id="desc-home" class="story">
                        <?php echo $story->story; ?>
                </div>
                </div>
                <img class="story-img" src="<?php echo base_url(); ?>/img/robert-ettinger_carousel_half.jpg">
				<?php } ?>
        	</div>
        </div>
       	<div class="clear-fix"></div>
    </div>
    
    <footer class="footer-box footer-container">
		<hr class="sexy_line">
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
