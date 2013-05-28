<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Abyssal & Pelagic</title>
<link href="<?php echo base_url(); ?>/css/main.css" rel="stylesheet" type="text/css">
<!--<link media="screen and (max-width: 800px)" href="style/small.css" rel="stylesheet" type="text/css">-->
<script type="text/javascript" src="js/jquery-min 1.8.3.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<link rel="icon" href="img/icon.png" sizes="32x32">
<style>
.login_box
{
	width: 30%;
	box-shadow: 0 0 17px #744150;
	border-radius: 10px;
	top: 40%;
	color: #744150;
	height: 30%;
	background: #744150;
	padding: 50px 50px 30px 50px;
	margin: 0 auto;
}

.login_username input,.login_password input
{
	width:100%;
	height:100%;
	border:none;
	box-shadow:0 0 10px inset;
	border-radius:10px;
	padding:3%;
	font-size:18px;
	font-weight:bolder;
	font-family: unica;
}
.login_username input:hover,.login_password input:hover
{	
	box-shadow:0 0 10px inset;
	color:#744150;
}
::-webkit-input-placeholder {
	color:#744150;	
   	text-align:center;
	opacity:0.4;
	font-family: unica;
}

:-moz-placeholder { /* Firefox 18- */
   color:#744150;	
	font-family: unica;
   	text-align:center;
	opacity:0.4;
}

::-moz-placeholder {  /* Firefox 19+ */
   color:#744150;	
   	text-align:center;
	opacity:0.4;
	font-family: unica;
}

:-ms-input-placeholder {  
   color:#744150;	
   	text-align:center;
	opacity:0.4;
	font-family: unica;
}
.login_password,.login_username
{
	width:90%;
	height:15%;
	margin:10px auto;
}
.login_button
{
	width:80%;
	margin:10px auto;
}
.login_button input
{
	border: none;
	width: 100%;
	background: #411723;
	color: #FFF;
	text-align: center;
	border-radius: 5px;
	cursor: pointer;
	font-family: unica;
	font-size: 16px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	box-sizing: border-box;
	padding: 10px 0;
	box-shadow: 0 0 2px #361D24;
	margin: 20px auto 0;
}

.login_button input:hover
{
	color: #744150;
	box-shadow: 0 0 3px #744150;	
	background: rgba(163, 126, 137, 0.85);
}
.logo-admin-container
{
	margin: 0 auto 0 auto;
display: block;
width: 50%;	
}
.logo-admin-container img
{
	margin: 0 auto;
	width: 100%;
	height: 100%;	
}
</style>
</head>
<body>
<div class="main">
    <a class="logo-admin-container trans-all" href="home.php">
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
	<div class="footer"></div>
</footer>
</body>
</html>