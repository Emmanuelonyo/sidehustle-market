<?php
include 'core/config.php';


?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Side Hustle | Dashboard </title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>

<style>/* Background color classes */
.bg-white {
  background-color: #ffffff !important;
}
.bg-grey {
  background-color: #eeeeee !important;
}
.bg-black {
  background-color: #555555 !important;
}
.bg-red {
  background-color: #f75353 !important;
}
.bg-green {
  background-color: #51d466 !important;
}
.bg-lblue {
  background-color: #32c8de !important;
}
.bg-blue {
  background-color: #609cec !important;
}
.bg-orange {
  background-color: #f78153 !important;
}
.bg-yellow {
  background-color: #fcd419 !important;
}
.bg-purple {
  background-color: #cb79e6 !important;
}
.bg-rose {
  background-color: #ff61e7 !important;
}
.bg-brown {
  background-color: #d08166 !important;
}

/* Button classes */
.btn {
    border-radius: 2px;
	position: relative;
}
.btn.btn-no-border {
	border: 0px !important;
}
/* Button colors */
.btn.btn-white {
	background: #ffffff;
	color: #666666;
	border: 1px solid #dddddd;
}
.btn.btn-white:hover,
.btn.btn-white:focus,
.btn.btn-white.active,
.btn.btn-white:active {
	background: #f7f7f7;
	color: #666666;
}
.btn.btn-grey {
	background: #eeeeee;
	color: #666666;
	border: 1px solid #d5d5d5;
}
.btn.btn-grey:hover,
.btn.btn-grey:focus,
.btn.btn-grey.active,
.btn.btn-grey:active {
	background: #d5d5d5;
	color: #999;
}
.btn.btn-black {
	color: #ffffff;
	background: #666666;
	border: 1px solid #4d4d4d;
}
.btn.btn-black:hover,
.btn.btn-black:focus,
.btn.btn-black.active,
.btn.btn-black:active {
	background: #4d4d4d;
	color: #ffffff;
}
.btn.btn-red {
	color: #ffffff;
	background: #ed5441;
	border: 1px solid #e52d16;
}
.btn.btn-red:hover,
.btn.btn-red:focus,
.btn.btn-red.active,
.btn.btn-red:active {
	color: #ffffff;
	background: #e52d16;
}
.btn.btn-green {
	color: #ffffff;
	background: #51d466;
	border: 1px solid #30c247;
}
.btn.btn-green:hover,
.btn.btn-green:focus,
.btn.btn-green.active,
.btn.btn-green:active {
	background: #30c247;
	color: #ffffff;
}
.btn.btn-lblue {
	color: #ffffff;
	background: #32c8de;
	border: 1px solid #1faabe;
}
.btn.btn-lblue:hover,
.btn.btn-lblue:focus,
.btn.btn-lblue.active,
.btn.btn-lblue:active {
	background: #1faabe;
	color: #ffffff;
}
.btn.btn-blue {
	color: #ffffff;
	background: #609cec;
	border: 1px solid #3280e7;
}
.btn.btn-blue:hover,
.btn.btn-blue:focus,
.btn.btn-blue.active,
.btn.btn-blue:active {
	background: #3280e7;
	color: #ffffff;
}
.btn.btn-orange {
	color: #ffffff;
	background: #f8a841;
	border: 1px solid #f69110;
}
.btn.btn-orange:hover,
.btn.btn-orange:focus,
.btn.btn-orange.active,
.btn.btn-orange:active {
	background: #f69110;
	color: #ffffff;
}
.btn.btn-yellow {
	background: #fcd419;
	color: #ffffff;
	border: 1px solid #dfb803;
}
.btn.btn-yellow:hover,
.btn.btn-yellow:focus,
.btn.btn-yellow.active,
.btn.btn-yellow:active {
	background: #dfb803;
	color: #ffffff;
}
.btn.btn-purple {
	background: #cb79e6;
	color: #ffffff;
	border: 1px solid #ba4ede;
}
.btn.btn-purple:hover,
.btn.btn-purple:focus,
.btn.btn-purple.active,
.btn.btn-purple:active {
	background: #ba4ede;
	color: #ffffff;
}
.btn.btn-rose {
	background: #ff61e7;
	color: #ffffff;
	border: 1px solid #ff2edf;
}
.btn.btn-rose:hover,
.btn.btn-rose:focus,
.btn.btn-rose.active,
.btn.btn-rose:active {
	background: #ff2edf;
	color: #ffffff;
}
.btn.btn-brown {
	background: #d08166;
	color: #ffffff;
	border: 1px solid #c4613f;
}
.btn.btn-brown:hover,
.btn.btn-brown:focus,
.btn.btn-brown.active,
.btn.btn-brown:active {
	background: #c4613f;
	color: #ffffff;
}

.shop-items{
	max-width:1150px;
	margin:10px auto;
	padding:0px 20px;
}
.shop-items .item {
	position: relative;
	max-width: 360px;
	margin: 15px auto;
	padding: 5px;
	text-align: center;
	border-radius: 4px;
	overflow: hidden;
	border:2px solid #eee;
}
.shop-items .item:hover{	
	border:2px solid #32c8de;
}
.shop-items .item img {
	width: 100%;
	max-width: 360px;
	margin: 0 auto;
	border: 1px solid #eee;
	border-radius: 3px;
}
.shop-items .item  .item-dtls h4 {
	margin-top: 13px;
	margin-bottom: 10px;
	text-transform: uppercase;
}
.shop-items .item  .item-dtls .price {
	display: block;
	margin-bottom: 13px;
	font-size: 25px;
}
.shop-items .item  .ecom {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	padding-bottom:10px;
	padding-top: 10px;
	-webkit-transition: all 0.35s ease-in;
	-moz-transition: all 0.35s ease-in;
	-ms-transition: all 0.35s ease-in;
	-o-transition: all 0.35s ease-in;
	transition: all 0.35s ease-in;
}
.shop-items .item:hover  .ecom { 
	margin-top: -50px; 
}
.shop-items .item  .ecom  a.btn{
	border:1px solid #fff;
	color:#fff;
	background:transparent;
	-webkit-transition: all 0.35s ease-in;
	-moz-transition: all 0.35s ease-in;
	-ms-transition: all 0.35s ease-in;
	-o-transition: all 0.35s ease-in;
	transition: all 0.35s ease-in;
}
.shop-items .item  .ecom  a.btn:hover{
	background:#fff;
	color:#777;
}                </style>



<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.html" rel="home">Side Hustle Store</a></h1>
			<h2 class="site-description">No. 1 Online Store</h2>
		</div>

		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="index">Home</a></li>
				<?php if (!isset($_SESSION['access']))
				{
				
				?>
				<li><a href="register">Register</a></li>
				<li><a href="login">Login</a></li>
				<li><a href="#">Contact Us</a></li>
				<?php
				}else{
					?>
					<li><a href="add-product">Add Product</a></li>
				<li><a href="myproduct">My Product</a></li>
				<li><a href="change-password">Change Password</a></li>
				<li><a href="dashboard">Dashboard</a></li>
				<li><a href="logout">Logout</a></li>
				<?php
				}
				?>
				
			
			</ul>
		</div>
		</nav>
		</header>

		
	
