<!DOCTYPE HTML>

<!--
	Citrusy: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->

<html>
<head>
<title>Udaan 4u</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body class="homepage">
    <?php $index = ""; $about_us = ""; $services = ""; $careerpedia = ""; $contact_us = "";?>
    <?php if(strpos($_SERVER['REQUEST_URI'],'about_us') == TRUE):?>
    <?php $about_us = 'class="current_page_item"';?>
    <?php elseif(strpos($_SERVER['REQUEST_URI'],'careerpedia') == TRUE):?>
    <?php $careerpedia = 'class="current_page_item"';?>
    <?php elseif(strpos($_SERVER['REQUEST_URI'],'services') == TRUE):?>
    <?php $services = 'class="current_page_item"';?>
    <?php elseif(strpos($_SERVER['REQUEST_URI'],'contact_us') == TRUE):?>
    <?php $contact_us = 'class="current_page_item"';?>
    <?php else:?>
    <?php $index = 'class="current_page_item"';?>
    <?php endif;?>
<div id="header-wrapper">
	<header id="header">
		<div class="5grid-layout">
			<div class="row">
				<div class="12u" id="logo"> <!-- Logo -->
                                    <h1><a href="#" class="mobileUI-site-name"><img src=""/>Udaan 4U</a></h1>
					<p>CARVE YOUR TOMORROW, TODAY</p>
				</div>
			</div>
		</div>
		<div class="5grid-layout">
			<div class="row">
				<div class="12u" id="menu">
					<nav class="mobileUI-site-nav">
						<ul>
                                                    
							<li <?php echo $index;?>><a href="index.php">Homepage</a></li>
							<li <?php echo $about_us;?>><a href="about_us.php">About Us</a></li>
							<li <?php echo $services;?>><a href="services.php">Services</a></li>
							<li <?php echo $careerpedia;?>><a href="careerpedia.php">Careerpedia</a></li>
							<li <?php echo $contact_us;?>><a href="contact_us.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
</div>
