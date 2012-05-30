<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<nav class="navStripWrapper">
	
	<ul class="nav fix">
		<li><a href="<?php echo get_settings('home'); ?>/" title="return to the the frontpage">FRONTPAGE<br /><span>return home</span></a></li>
		<li><a id="triggerCatID2" href="#" title="show categories">BROWSE<br /><span>by topic by</span></a></li>
		<li class="last"><a href="<?php bloginfo('rss2_url'); ?>" title="subscribe to the main feed via rss">SUBSCRIBE<br /><span>rss feed</span></a></li>
		<li id="searchBar2" class="searchField">
			<div>
				<form method="get" id="searchForm2" action="<?php bloginfo('home'); ?>/">
				<span><input type="text" value="Search the archives..." onfocus="if (this.value == 'Search the archives...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search the archives...';}" name="s" id="s2" /></span>
				</form>
			</div>
		</li>
	</ul>

	<div id="footerStrip" class="toggleCategories fix" style="display: none;"> 
		<ul class="fix">
		<?php wp_list_cats('sort_column=name&optioncount=0'); ?>
		</ul>
	</div>
	
</nav>