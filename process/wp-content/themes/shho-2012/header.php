<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width">
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<?php wp_head(); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/library/js/libs/supersized.3.2.7.min.js"></script>	
		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		
	</head>
	
	<body <?php body_class(); ?>>
	
			
			<header role="banner" id="header">
				<div id="container">
			
				<div id="inner-header" class="wrap">
				
					<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow" title="home"><img src="<?php bloginfo('template_url')?>/library/images/symbol_white.png"></a>

					<span><a href="#" id="toc-toggle">Higher Learning</a></span>

					<!--Search-->
					<form method="get" id="search" action="<?php bloginfo('home'); ?>/">
					<span>
					<input type="text" name="s" id="s1" />
					</span>
					
					<input type="submit" value="Search" class="searchButton">
					
					</form>


					<nav role="navigation" class="nav">
						<?php bones_main_nav("/"); // Adjust using Menus in Wordpress Admin ?>
					</nav>
								
				</div> <!-- end #inner-header -->
			</div>
			
			<div class="wordmark">
				<img src="<?php bloginfo('template_url')?>/library/images/wordmark.png" alt="SHHO Wordmark" width="321" height="81">
				<span><div class="tweet"></div></span>

				
				<div id="toc">
					<h2>About</h2>
				     	<p>In the fall semester of 2006, Student Hip-Hop Organization was founded at Virginia Commonwealth University in Richmond, VA. Since then, it has branched to surrounding universities and has played an integral part in Virginia’s hip-hop scene while cultivating the minds of their campuses and communities.</p>
				     	
				     	<p>The organization is known for its quality, independent spirit, and most importantly, authenticity. It has become an institution and creative platform for students and artists to gain experience and find opportunity in their individual passions. SHHO strives to promote higher learning through hip-hop.</p>
				     	<p>
						The organization has selectively worked with the best up-and-coming artists, hip-hop legends, like-minded companies, and passionate student talents- all who have established SHHO as an organic uncompromising brand.</p>

         				
         				<img src="<?php bloginfo('template_url')?>/library/images/2006-forever.png" alt="2006-Forever" width="50" height="49">

				
				    </div>
			</div>
	
			</header> <!-- end header -->


<!--
<div id="left_arrow"></div>
<div id="right_arrow"></div>
	
-->


<ul id="slide-list"></ul>

<script>
	
	jQuery(document).ready(function($) {
	
	jQuery(function($){
		
		$.supersized({
		
			// Functionality
			slide_show				:	1,
			autoplay				:	1,
			start_slide             :   1,			// Start slide (0 is random)

			slide_interval          :   4000,		// Length between transitions
			transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	800,		// Speed of transition
			keyboard_nav            :   1,			// Keyboard navigation on/off
			performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
								   
			// Components							
			slide_links				:	'blank',	// Individual links for each slide (Options: false, 'number', 'name', 'blank')

			slides 					:  	[			// Slideshow Images
			
			
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_berkeley.jpg", title : "Berkeley", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_fists.jpg", title : "Fists", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_fritz.jpg", title : "Fritz", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_gas.jpg", title : "Gas", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_grads.jpg", title : "Grads", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_library.jpg", title : "Library", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_nude.jpg", title : "Nude", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_rebels.jpg", title : "Rebels", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_revolution.jpg", title : "Revolution", desc: "", url:"" },
			{image : "<?php bloginfo('template_url')?>/library/images/homepage_background_speech.jpg", title : "Speech", desc: "", url:"" }
										],

			
		});
		
		
	});
	
	});
	
</script>
<section id="main-wrap">
	
</section>

