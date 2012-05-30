<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="<?php bloginfo('charset'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0"/>
<meta name='description' content='Higher learning through hip-hop'/>

<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Posts tagged &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
<?php
date_default_timezone_set('UTC');
if(mktime(5, 0, 0, 1, 18, 2012) < time() && time() < mktime(5, 0, 0, 1, 19, 2012)) {
    header("Location: http://brdrck.me/sopa/");
    die();
}
?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script>

<script type='text/javascript'>

      jQuery(function($){
        $(".tweet").tweet({
            username: "theshho",
            join_text: "auto",
            avatar_size: 32,
            count: 1,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
        
        
    });
</script>
</head>
		<?php


global $blog_id;
global $page_id;
$polygon = 'images/polygon.jpg';
$pennants ='';
$blogname ='';
$logourl = 'http://history.theshho.com/shho-and-prove/wp-content/themes/gridfocus-html5/images/logo.jpg';
if ( $blog_id == '2' ) {
    // the page is "About", or the parent of the page is "About"
    $polygon = 'vcu.png';
	$pennants = 'VCU_bwoods_title.png';
	$theurl = 'http://history.theshho.com/vcu';
	

} elseif ( $blog_id == '3') { //W&M	
    $polygon = 'wm.png';
	$pennants = 'WM_bwoods_title.png';
	$theurl = 'http://history.theshho.com/wandm';
	
} elseif ( $blog_id == '4' ) { //UVA
    $polygon = 'uva.png';
	$pennants = 'UVA_bwoods_title.png';
	$theurl = 'http://history.theshho.com/uva';

} elseif ( $blog_id == '5' ) { //ODU
    $polygon = 'odu.png';
	$pennants = 'ODU_bwoods_title.png';
	$theurl = 'http://history.theshho.com/odu';
} 

 elseif ( $blog_id == '6' ) { //GMU
    $polygon = 'gmu.png';
	$pennants = 'GMU_bwoods_title.png';
	$theurl = 'http://history.theshho.com/gmu';
}

 elseif ( $blog_id == '7' ) {  //UMW-
    $polygon = 'umw.png';
	$pennants = 'UMW_bwoods_title.png';
	$theurl = 'http://history.theshho.com/umw';
}
 elseif ( $blog_id == '8' ) { //VT
    $polygon = 'vt.png';
	$pennants = 'VT_bwoods_title.png';
	$theurl = 'http://history.theshho.com/vt';
}



 elseif ( $blog_id == '15' ) {  //Mystery-
     $polygon = 'homepage.png'; // just in case we are at an unclassified page, perhaps the home page
  	$pennants = 'mystery_iniquity_title.png';
	$theurl = 'http://history.theshho.com/mysteryiniquity';
}

elseif($blog_id =='10'){ //SHHO and Prove
	$logourl = 'http://history.theshho.com/shho-and-prove/wp-content/themes/gridfocus-html5/images/SHHO_HL_White_Transparent.png';	
    $pennants = 'SHHO_And_Prove.png';
    $blogname= 'shhoandprove';
	$polygon ='andprove.png';
	$theurl = 'http://history.theshho.com/shho-and-prove';

}
elseif($blog_id =='16'){ //UCF
    $polygon = 'ucfpolygon.png'; // just in case we are at an unclassified page, perhaps the home page
  	$pennants = 'UCF_bwoods_title.png';
	$theurl = 'http://history.theshho.com/ucf';

}

elseif(is_page(4211)){
	$pennants = 'TV_BUTTON.png';
	$polygon = 'homepage.png';
	$theurl = 'http://history.theshho.com/tv';
}


elseif($blog_id = '1'){
$polygon = 'homepage.png'; // just in case we are at an unclassified page, perhaps the home page
    $pennants = 'blank.png';
    }

else { 
    $polygon = 'homepage.png'; // just in case we are at an unclassified page, perhaps the home page
    $pennants = 'blank.png';
}	
$base_url = "http://history.theshho.com";
?>

<body <?php body_class(); ?> id="<?php echo $blogname ?>">

	<?php //include (TEMPLATEPATH . '/featured.php'); ?>

<div id="wrapper">
	<div id="masthead">
	<div class="logo"><a href="<?php echo $base_url ?>"><img src="<?php echo $logourl; ?>" width="227"></a></div>		
</div>

	<div class="rightColumn">
		<div id="searchIt">
				<div class="chapterSymbol">
					<a href="<?php echo $theurl ?>"><img src="<?php bloginfo('template_url')?>/images/<?php echo  $pennants ?> "></a>
				</div>
				<form method="get" id="searchForm1" action="<?php bloginfo('home'); ?>/">
				<span>
					<input type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" name="s" id="s1" />
				</span>
			
				<input type="image" value="submit" src="<?php bloginfo('template_url')?>/images/<?php echo  $polygon ?>" class="submitPolygon">

				</form>
		<div class="rss">
		<div class="tweet"></div>

				<a href="<?php bloginfo('rss2_url'); ?>">
				<?php if($blog_id == '10'){
				?>
				<img src="<?php bloginfo('template_url') ?>/images/infinite-transparent.png">
				<? } else { ?>
				<img src="<?php bloginfo('template_url') ?>/images/infinite.jpg">				
				<?php } ?>
				</a>
		</div>
</div>
	
	<?php include (TEMPLATEPATH . '/navigation.strip.php'); ?>
