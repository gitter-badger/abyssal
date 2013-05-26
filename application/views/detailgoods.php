<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<title>Abyssal</title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" >
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
<link type="text/css" href="<?php echo base_url(); ?>css/bottom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.pikachoose.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/functional_script.js"></script>
<script>
$(document).ready(
	function (){
	$("#pikame").PikaChoose();
	magnifye();
});
</script>
</head>
<body >
	<div id='fb-root'></div>
	<script src='http://connect.facebook.net/en_US/all.js'></script>
	<script> 
      FB.init({appId: "YOUR_APP_ID", status: true, cookie: true});

      function postToFacebook() {

        // calling the API ...
        var obj = {
          method: 'feed',
          redirect_uri: base_url+"goods/detail/"+<?php echo $id; ?>,
          link: 'https://developers.facebook.com/docs/reference/dialogs/',
          picture: 'http://fbrell.com/f8.jpg',
          name: 'Facebook Dialogs',
          caption: 'Reference Documentation',
          description: 'Using Dialogs to interact with people.'
        };

        function callback(response) {
			facebook(<?php echo $id; ?>);
        }
        FB.ui(obj, callback);
      }
	  
	function postToTweeter() {
		tweeter(<?php echo $id; ?>);
	}
	
    </script>

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
			<?php foreach($data as $goods) { ?>
            	<div class="foto-container">
                	<ul id="pikame">
	                	<li><img src="<?php echo base_url(); ?>img/<?php echo $goods->image1; ?>"><span>tampak depan</span></li>
                        <li><img  src="<?php echo base_url(); ?>img/<?php echo $goods->image2; ?>"><span>tampak samping</span></li>
                        <li><img  src="<?php echo base_url(); ?>img/<?php echo $goods->image3; ?>"><span>tampak dalam</span></li>
                    </ul>
                </div>
                <div class="detail-container">
                	<ul class="detail-box detail">
	                    <li><a><span class="title-desc"><?php echo $goods->title; ?></span></a></li>
                        <li><h3>Description :</h3></li>
                        <li><p><?php echo $goods->description; ?></p></li>
                        <li><h3>Rp. <?php echo $goods->price; ?></h3></li>
                        <li>
                        	<h3>LIKE</h3>
                            <a class="share-btn like-btn" target="_blank" onclick="vote(<?php echo $id; ?>)">
                              <span class="share-btn-action share-btn-plus">Vote Up</span>
                              <span class="share-btn-count"><?php echo $goods->vote; ?></span>
                            </a>
                        </li>
                        <li>
                        	<h3>SHARE</h3>
                            <a class="share-btn" target="_blank" onclick="postToTweeter()">
                              <span class="share-btn-action share-btn-tweet">Tweet</span>
                              <span class="share-btn-count"><?php echo $goods->tweeter; ?></span>
                            </a>
                            <a class="share-btn" target="_blank" onclick="postToFacebook()">
                              <span class="share-btn-action share-btn-like">Share</span>
                              <span class="share-btn-count"><?php echo $goods->facebook; ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
			<?php } ?>
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
