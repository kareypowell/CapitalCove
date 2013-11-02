<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html class="desktop ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="desktop ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="desktop ie9" lang="en"> <![endif]--> 
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
      
	<!-- Meta information -->
	<meta charset="utf-8" />
	<title><?php echo $page_title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" /> 
 
	<!--[if lt IE 9]>
		<script type="text/javascript">/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark meter nav output progress section summary subline time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script>
	<![endif]-->
	<script type="text/javascript">if(Function('/*@cc_on return document.documentMode===10@*/')()){document.documentElement.className+=' ie10';}</script>
	<script type="text/javascript">(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

	<!-- favicon & idevice homepage thumb -->
	<link rel="shortcut icon" href="favicon.jpg" />
	
	<!-- compressed stylesheet replaced-->
	<!--<link rel="stylesheet" href="theme/compressed/template.min.css" type="text/css" media="all" />  -->
		<link rel="stylesheet" href="framework/css/reset.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/jquery.pixelentity.blackandwhite.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/jquery.pixelentity.background.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/js/bootstrap/2.2.1/css/bootstrap.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/js/bootstrap/2.2.1/css/bootstrap-responsive.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/video/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/isotope.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/jquery.pixelentity.isotope.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/jquery.pixelentity.carousel.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/js/pe.volo/themes/common.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/js/pe.flare/themes/common.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/js/pe.flare/themes/default/skin.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/animate.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="framework/css/vario-transitions.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/slider_ui.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/slider_captions.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/slider_captions_style.css" type="text/css" media="all" />
	<link rel="stylesheet" href=".././css/style.css" />
	<link rel="stylesheet" href=".././css/style_responsive.css" />
	<link rel="stylesheet" href=".././css/entypo-icon-font.css" />
	<!-- colors -->
	<link rel="stylesheet" href="css/color.css" />

	<!-- font replacement -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,300' rel='stylesheet' type='text/css'>
	<!-- end font replacement -->

	<!-- only jQuery and selectivizr loaded here, custom scripts are loaded end of body section -->
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="framework/js/selectivizr-min.js"></script>
	<![endif]--> 
	
	<script type="text/javascript">
		function hideDiv(){

		if ($(window).width() < 1000) {

		        $("#invst-highlight-bar").fadeOut("slow");

		    }else{

		        $("#invst-highlight-bar").fadeIn("slow");
		    }
		}

		//run on document load and on window resize
		$(document).ready(function () {

		    //on load
		    hideDiv();

		    //on resize
		    $(window).resize(function(){
		        hideDiv();
		    });

		});


	</script>

</head>

<body> 
	<!--wrapper for boxed version-->
    <div class="site-wrapper">
		<div class="sticky-bar"> 
		<div class="info-bar"> 
			<div id="invst-highlight-bar" class="invst-highlight-bar"></div>
			<div class="pe-container"> 
				<div class="row-fluid">
					<div class="span5 tagline">
						
					</div>

					<div class="span7">
						<div>
							<div class="email"><a href=".././" data-rel="tooltip" data-position="bottom" data-original-title="Home" >Home</a></div>
						
							<div class="phone"><i class="icon-seperator"></i><a href="#" data-rel="tooltip" data-position="bottom" data-original-title="Register" >Register</a></div>

							<div class="phone"><i class="icon-seperator"></i><a href="#" data-rel="tooltip" data-position="bottom" data-original-title="Contact Us" >Contact Us</a></div>
						
						
							<div class="sm-icon-wrap">
								<a href="#" data-rel="tooltip" data-position="bottom" data-original-title="Twitter"><i class="icon-twitter-circled"></i></a>
								<a href="#" data-rel="tooltip" data-position="bottom" data-original-title="Facebook"><i class="icon-facebook-circled"></i></a>
								<a href="#" data-rel="tooltip" data-position="bottom" data-original-title="Linkedin"><i class="icon-linkedin-circled"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div><!--end container-->	
		</div><!--end infobar-->	

		<!--wide wrapper-->
		<div class="menu-bar"> 
			<div class="pe-container"> 
				<header class="row-fluid">
							   
					<!--small logo-->
					<div class="logo span4">
						<a href="./" title="Home" ><img src="img/content/logo_head.png" alt="logo" /></a>
					</div>

					<div class="menu-wrap span12">
						<!--main navigation-->
						
	<!--main menu-->
	<div class="mainNav clearfix">
						
		<!--main nav-->
		<ul class="nav" id="navigation">
			
			<li class="menu-item dropdown"><a href="#"><b class="icon-down-open-mini"></b>RESIDENTIAL AND COMMERCIAL<span class="subtitle">Real Estate</span></a>
				<ul class="dropdown-menu">
					<li class="menu-item"><b>A New Brokerage and Investment Standard
												Brought To You By A Firm Used To Exceeding</b>
												It. At Capital Cove, our highly experienced
												real estate experts, investment advisors and 
												asset managers provide specialized brokerage, 
												sales,> and default management solutions to the 
												most complex real estate challenges. We excel at 
												helping Principal  Owners buy, sell, list or invest 
												in real estate and mortgages with confidence. </li>
					<li class="menu-item"><a href="#">Residential Real Estate</a></li>
					<li class="menu-item"><a href="#">Commercial Real Estate</a></li>
				</ul>
			</li>
			<li class="menu-item dropdown "><a href="#"><b class="icon-down-open-mini"></b>INVESTMENT<span class="subtitle">Service Management</span></a>
				<ul class="dropdown-menu">
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
				</ul>
			</li>
			<li class="menu-item dropdown "><a href="#"><b class="icon-down-open-mini"></b>SHORT SALE<span class="subtitle">Management Center</span></a>
				<ul class="dropdown-menu">
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
				</ul>
			</li>
			<li class="menu-item dropdown "><a href="#"><b class="icon-down-open-mini"></b>PARTNER OR INVEST<span class="subtitle">With Capital Cove</span></a>
				<ul class="dropdown-menu">
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
					<li class="menu-item"><a href="#">Items</a></li>
				</ul>
			</li>
		</ul>
	</div>
	
	
	<!--drop navigation-->
	<div id="drop-nav" class="mobile-nav" data-label="Menu...">
	</div>					</div>

				</header><!-- end header  -->
			</div><!--end container-->	
		</div> <!--end top bar-->
	</div><!--end sticky bar-->

	

