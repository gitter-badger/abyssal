<html>
<head>
<title>Abyssal</title>
<link type="text/css" rel="stylesheet" href="css/main.css" >
<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/main.js"></script><br>

<script>
$(document).ready(function() {
    $('.viewport').mouseenter(function(e) {
        $(this).children('a').children('img').animate({ height: '363', left: '0', top: '0', width: '242' }, 100);
        $(this).children('a').children('span').fadeIn(800);
    }).mouseleave(function(e) {
        $(this).children('a').children('img').animate({ height: '396', left: '-20', top: '-20', width: '264'}, 100);
        $(this).children('a').children('span').fadeOut(800);
    });
	$('#top').waypoint(function(direction) {
  		if (direction=='down')
		{
			$('.anchor').animate({bottom:'0'},100);
		}
		else
		{
			$('.anchor').animate({bottom:'-40'},100);	
		}
	});
	$("#to-top").click(function(){

				// Disable the default behaviour when a user clicks an empty anchor link.
				// (The page jumps to the top instead of // animating)
				event.preventDefault();

				// Animate the scrolling motion.
				$("html, body").animate({
					scrollTop:0
				},"slow");

	});
});
</script>
</head>
<body >
	<div class="wrapper">
    	<header >
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
        <div id="journal-main" class="content">
        	<div class="left-side">
            	<article class="detart-box detart trans-all">
                	<h3>
                    	<img src="img/full-wallet3.jpg">
                    </h3>
                    <div class="title" id="top"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus laoreet arcu sed congue</a></div>
                    <div class="author">By Agung D L G S<span> - 20 Desember 2013</span></div>
                    <div class="desc">
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id justo elit, vel molestie mi. Proin condimentum tincidunt tortor in scelerisque. Nunc pharetra laoreet metus, et vulputate velit euismod at. Sed porta interdum quam, quis commodo velit euismod id. Donec vitae nisl ipsum, nec ultricies felis. Aenean facilisis, quam a mollis mattis, nisl nisl tristique justo, eget molestie nulla tortor quis ligula. Nulla bibendum turpis mollis arcu consectetur eu luctus risus volutpat. In quis viverra odio. Ut sem nibh, sodales condimentum auctor in, vulputate ut nisl.</p>

<p>Phasellus fermentum sodales tortor nec pellentesque. Donec pulvinar justo non est imperdiet lacinia. Maecenas nec est eget dolor iaculis volutpat in non purus. Etiam risus metus, pellentesque vel ultrices at, ornare non sem. Sed ante tortor, semper quis malesuada id, venenatis faucibus erat. Donec arcu risus, blandit eget euismod non, placerat ut diam. Suspendisse tristique vulputate felis, nec porta dui volutpat at. Proin nunc tellus, commodo feugiat molestie vitae, volutpat at nibh. In hac habitasse platea dictumst. Vivamus ipsum urna, volutpat lobortis viverra sit amet, cursus ut leo. Ut ultricies dolor sed est pulvinar mollis. In consectetur tellus at erat luctus eu luctus diam pretium. Cras ultricies molestie metus, vel interdum justo luctus quis. Aliquam erat volutpat. Pellentesque et felis risus.</p>

<p>Aliquam eu velit lacus, vel lacinia leo. Fusce eget erat ut orci placerat ultricies non et lorem. Duis ac mi erat, quis elementum quam. Duis urna justo, luctus quis aliquam et, dictum quis mauris. Pellentesque egestas blandit molestie. In aliquet pellentesque tempor. Etiam rhoncus blandit enim, nec vulputate mauris auctor ac. Integer sit amet tortor nisi. Pellentesque feugiat porttitor accumsan. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec blandit, nisl ut viverra vehicula, dui ligula vestibulum justo, vitae facilisis magna orci non ligula. Praesent sapien risus, molestie condimentum bibendum ac, gravida in mi. Vestibulum sem quam, dictum eu placerat at, eleifend ut elit. Cras varius cursus metus vel fermentum. Aenean tincidunt rutrum nisi in faucibus. Aliquam pellentesque mauris et tortor consequat pellentesque.</p>

<p>Aliquam velit elit, convallis ut lacinia sit amet, rutrum ac mi. Cras nec nibh sem. Sed rhoncus faucibus tortor a pulvinar. Cras at purus id urna sagittis bibendum non sed orci. Suspendisse hendrerit massa vitae ante varius at egestas elit convallis. Nunc in metus velit. Suspendisse sed nisl nibh, ut elementum nunc. Vestibulum id eros ligula. Duis a sapien ipsum. Suspendisse potenti. Curabitur vitae nibh ipsum. Etiam libero velit, fringilla sit amet luctus id, tincidunt nec lacus. Nulla eget ipsum odio, vitae tempus tellus.</p>

<p>Donec felis arcu, varius non congue id, eleifend vel mauris. Sed scelerisque, lorem sed fringilla ullamcorper, neque ligula vehicula sem, vel porta urna sapien ut leo. Vestibulum sit amet felis a risus egestas auctor. Fusce nec erat enim. Suspendisse nec condimentum lorem. Pellentesque non nisl sit amet sem ultricies porttitor nec vel sem. Suspendisse potenti. Duis in laoreet nunc. Curabitur eros dui, gravida et dictum eget, ultricies a augue. Sed nec sem tellus. Vestibulum in quam id nisl luctus mattis et quis elit. Morbi varius molestie mi, ut convallis orci fermentum quis. Cras pharetra arcu eget dui molestie mattis. Mauris bibendum pharetra massa, nec rutrum est tincidunt a. Donec vulputate dapibus arcu id dignissim. Mauris gravida, tellus a accumsan eleifend, diam justo blandit dolor, nec scelerisque purus massa vitae velit.</p>

<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse accumsan pharetra justo elementum congue. Ut pharetra, velit sit amet tempus vehicula, lectus nunc malesuada purus, iaculis ultricies metus elit nec neque. Vivamus risus odio, egestas vitae egestas non, tincidunt quis tellus. Sed velit nisi, tincidunt at tincidunt sed, gravida eu augue. Duis posuere lacus in metus malesuada malesuada. Phasellus dui felis, sodales vitae condimentum ac, malesuada vitae justo. Pellentesque urna augue, malesuada a ultricies a, consectetur sed elit. Integer euismod, mauris sed dapibus faucibus, neque augue imperdiet risus, a hendrerit nulla tortor et nulla. Fusce fringilla, libero in interdum aliquam, eros justo sodales diam, et consequat tellus massa eget massa. Curabitur tincidunt pulvinar ultrices.</p>
					
                    </div>
                    <div class="artags-container">
                        <h4>Tags :</h3>
                        <ul>
                            <li><a>Leather</a></li>
                            <li><a>Tips</a></li>
                            <li><a>True Story</a></li>
                        </ul>
                	</div>
                    <div class="clear-fix"></div>
                </article>
            </div>
            <div class="right-side">
            	<div class="categ-container">
                	<h3>Categories</h3>
                    <ul>
                    	<li><a>category A (1)</a></li>
                        <li><a>category B (1)</a></li>
                    </ul>
                </div>
                <div class="arcv-container">
                	<h3>Archieves</h3>
                    <ul>
                    	<li><a>Agustus 2012 (4)</a></li>
                        <li><a>September 2012 (2)</a></li>
                        <li><a>Oktober 2012 (5)</a></li>
                    </ul>
                </div>
                <div class="tags-container">
                	<h3>Tags</h3>
                    <ul>
                    	<li><a>Leather</a></li>
                        <li><a>Tips</a></li>
                        <li><a>Maintenance</a></li>
                        <li><a>Leather</a></li>
                        <li><a>Tips</a></li>
                        <li><a>Maintenance</a></li>
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
    <a id="to-top" class="anchor" >Back to Top</a>
</body>
</html>
