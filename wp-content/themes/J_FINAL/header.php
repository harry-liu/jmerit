<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.jpg" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/media-queries.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/fancybox/helpers/jquery.fancybox-buttons0ff5.css?v=1.0.2" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/fancybox/helpers/jquery.fancybox-thumbs0ff5.css?v=1.0.2" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/type/fontello.css">

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ddsmoothmenu.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/twitter.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/selectnav.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slickforms.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easytabs.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/helpers/jquery.fancybox-buttons0ff5.js?v=1.0.2"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/helpers/jquery.fancybox-thumbs0ff5.js?v=1.0.2"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/helpers/jquery.fancybox-mediae209.js?v=1.0.0"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
var myCenter=new google.maps.LatLng(-33.8714326,151.2043807);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body class="full-layout">
<div>
	<div class = "language-menu">
		<?php 
			$args = array(
				'theme_location' => 'language'
			);
		?>
		<?php wp_nav_menu($args); ?>
	</div>

	<!-- Begin Body Wrapper -->
	<div class="body-wrapper"> 
		<!-- Begin Top Wrapper -->
		<div class="top-wrapper">
			<div class="inner">      
				<!-- Begin Header -->
				<header>
					<div class="logo">
						<a href="<?php bloginfo('url');?>">
							<img src="<?php bloginfo('template_url'); ?>/images/weblogo.png" alt="jmerit logo"/>
						</a>
					</div>
					<!-- Begin Menu -->
					<nav id="menu" class="menu cn-menu">
						<?php 
							$link = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
							if(strpos($link,'-en') == true){
								//$_SESSION['language'] = "en";
								$args = array(
									'theme_location' => 'en'
								);
							}
							else{
								$args = array(
									'theme_location' => 'cn'
								);
							}
						?>
						<?php wp_nav_menu($args); ?>
					</nav>
					<!-- End Menu -->
					<div class="clear"></div>
				</header>
				<!-- End Header -->


			</div>
		</div>

