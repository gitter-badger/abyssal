<html>
<head>
<title>Abyssal</title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/css/main.css" >
<!--<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.quick.pagination.min.js"></script>
<script>
$(document).ready(function() {
	$("#pagination").quickPagination({pageSize:"12"});
});
</script>
</head>
<body>
	<div class="wrapper">
    	<header>
        	<a class="logo-img-container trans-all" href="<?php echo base_url(); ?>home">
            	<img src="<?php echo base_url(); ?>/img/logo.png">
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
            <div class="left-side">
            	<nav class="panel">
                	<ul>
                    	<li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Wallet">wallet</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Bag">bag</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Belt">belt</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Camera Strap">camera strap</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Bracelet">bracelet</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Shoes">shoes</a></li>
                        <li class="trans-all"><a href="<?php echo base_url(); ?>goods/browse/Others">others</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right-side" id="content">
            	<nav class="item-container">
                	<ul class="pagination" id="pagination">
					<?php foreach($data as $goods) { ?>
                    	<li class="item-box item-list trans-all">
                        	<a href="<?php echo base_url(); ?>goods/detail/<?php echo $goods->id_goods; ?>">
                            	<span><?php echo $goods->title; ?><br><?php echo $goods->price; ?></span>
                            	<img class="dummy" src="<?php echo base_url(); ?>/img/<?php echo $goods->image1; ?>">                           
                            </a>
                        </li>
                       <?php } ?>
                    </ul>
                    <div class="clear-fix"></div>
                </nav>
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
