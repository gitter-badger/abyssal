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
        	<a class="logo-img-container trans-all" href="home.php">
            	<img src="<?php echo base_url(); ?>img/logo.png">
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
        <div id="journal-main" class="content">
        	<div class="left-side">
			<?php foreach($data as $blog) { ?>
            	<article class="art-box art trans-all">
                	<h3>
                    	<img src="<?php echo base_url(); ?>/img/<?php echo $blog->picture; ?>">
                        <a href="detailjournal.php"><span><?php echo $blog->title; ?></span></a>
                    </h3>
                    <div class="author"><?php echo $blog->author; ?><span> - <?php echo $blog->date; ?></span></div>
                    <div class="desc"><?php echo $blog->content; ?></div>
                    <a href="<?php echo base_url(); ?>detailjournal/getcontent/<?php echo $blog->id_blog; ?>" class="read-more">read more</a>
                </article>
			<?php } ?>
            </div>
            <div class="right-side">
            	<div class="categ-container">
                	<h3>Categories</h3>
                    <ul>
					<?php foreach($data as $blog) { ?>
                    	<li><a><?php echo $blog->category; ?></a></li>
					<?php } ?>
                    </ul>
                </div>
                <div class="arcv-container">
                	<h3>Archieves</h3>
                    <ul>
					<?php foreach($data1 as $blog) { ?>
                    	<li><a href='<?php echo base_url(); ?>journal/bydate/<?php echo $blog->date1; ?>'><?php echo $blog->date1; ?></a></li>
					<?php } ?>
                    </ul>
                </div>
                <div class="tags-container">
                	<h3>Tags</h3>
                    <ul>
					<?php foreach($data3 as $tags) { ?>
                    	<li><a><?php echo $tags[0]->tag; ?></a></li>
					<?php } ?>
                    </ul>
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
                    <a class="twitter" href=""><img src="<?php echo base_url(); ?>img/twitter.png" /></a>
                    <a class="facebook" href=""><img src="<?php echo base_url(); ?>img/facebook.png" /></a>
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
