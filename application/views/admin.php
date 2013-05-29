<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Abyssal & Pelagic</title>
<!--<link href="style/style.css" rel="stylesheet" type="text/css">-->
<!--<link media="screen and (max-width: 800px)" href="style/small.css" rel="stylesheet" type="text/css">-->
<script type="text/javascript" src="js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<link rel="icon" href="img/icon.png" sizes="32x32">
<script type="text/javascript" charset="utf-8">
$(function() {
    adjustStyle($(this).width());
    $(window).resize(function() {
        adjustStyle($(this).width());
    });
});

</script>
<style>
<style>
.login_box
{
	box-shadow: 0 0 17px #744150;
	border-radius: 20px;
	top: 40%;
	color: #744150;
	height: 30%;	
	background: #744150;
	padding:50px;
	margin:0 auto;
}
.login_username
{
	width:50%;
	position:absolute;
	left:50%;
	margin-left:-25%;
	top:15%;
	height:15%;
}
.login_username input,.login_password input
{
	width:100%;
	height:100%;
	border:none;
	box-shadow:0 0 10px inset;
	border-radius:10px;
	padding:3%;
	font-family:"Trebuchet MS";
	font-size:18px;
	font-weight:bolder;
}
.login_username input:hover,.login_password input:hover
{	
	box-shadow:0 0 10px inset;
	color:#061a35;
}
::-webkit-input-placeholder {
	color:#159;	
   	text-align:center;
	opacity:0.4;
}

:-moz-placeholder { /* Firefox 18- */
   color:#159;	

   	text-align:center;
	opacity:0.4;
}

::-moz-placeholder {  /* Firefox 19+ */
   color:#159;	
   	text-align:center;
	opacity:0.4;
}

:-ms-input-placeholder {  
   color:#159;	
   	text-align:center;
	opacity:0.4;
}
.login_password
{
	width:50%;
	position:absolute;
	left:50%;
	margin-left:-25%;
	top:40%;
	height:15%;
}
.login_button
{
	width:30%;
	position:absolute;
	left:50%;
	margin-left:-15%;
	top:75%;
	height:15%;
}
.login_button input
{
	border:none;
	width:100%;
	height:100%;
	background:#91ACC0;
	color:white;
	text-align:center;	
	border-radius:10px;
	cursor:pointer;
	font-family:"Trebuchet MS";
	font-size:16px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.login_button input:hover
{
	opacity:0.8;
}
.logo-img-container
{
	margin: 0 auto 0 auto;
display: block;
width: 50%;	
}
.logo-img-container img
{
	margin: 0 auto;
width: 100%;
height: 100%;	
}
</style>
</head>
<body>
<div class="main">
    <a class="logo-img-container trans-all" href="home.php">
            	<img src="img/logo.png">
    </a>
    <div class="login_box">
    	<form id="login_form" method="post" action="login-exec.php">
            <div class="login_username"><input type="text" placeholder="username" name="username" id="username"></div>
            <div class="login_password"><input type="password" placeholder="password" name="password" id="password" ></div>
            <div class="login_button trans_all"><input type="submit" value="Login" id="sign_in_button"></div>
        </form>
    </div>
</div>
<footer>
	<div class="footer">© 2013 Agraprana Design and Built,Indonesia</div>
</footer>
</body>
</html>