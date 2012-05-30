<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>


<nav class="navStripWrapper">
	
	<ul class="nav fix">
		<li class="first"><a href="<?php echo $base_url ?>/about" >About</a></li>
		<li><a id="CONTACT" href="<?php echo $base_url ?>/contact" >Contact</a></li>
		<li><a id="downloads" href="<?php echo $base_url ?>/downloads" >Downloads</a></li>
		<li><a id="downloads" href="<?php echo $base_url ?>/faqs" >FAQs</a></li>
		<li><a href="http://shop.theshho.com" id="shoplinkred">Shop</a></li>

		<br>
		
		<li><span class="bold">Chapters</span></li>
			<ul class="secondary">
				<li><a id="VCU" href="<?php echo $base_url ?>/vcu"  <?php if ( $blog_id == '3' )  { echo 'class="current" '; } ?>>VCU</a></li>
				<li><a id="WM" href="<?php echo $base_url ?>/wandm" >W&M</a></li>
				<li><a id="UVA" href="<?php echo $base_url ?>/uva" >UVA</a></li>
				<li><a id="ODU" href="<?php echo $base_url ?>/odu" >ODU</a></li>
				<li><a id="GMU" href="<?php echo $base_url ?>/gmu" >GMU</a></li>
				<li><a id="UMW" href="<?php echo $base_url ?>/umw" >UMW</a></li>
				<li><a id="VT" href="<?php echo $base_url ?>/vt" >VT</a></li>
				<li><a id="UCF" href="<?php echo $base_url ?>/ucf" >UCF</a></li>

		</ul>
		<!--LEFT SIDE BOTTOM AD SPACE-->
		<div class="adspace">
			<ul>
			
				<li>
				<a href="<?php echo $base_url ?>/tv" class="tv">TV</a>
				</li>	
				<li>
				 <!--change here-->
				 <a href="<?php echo $base_url ?>/shho-and-prove"><img class="shhoandprove" src="<?php bloginfo('template_url')?>/images/SHHO_&PROVE.png"></a>	<!--stop-editing-->
				 </li>
				 <!-- <li>
				<a href="<?php echo $base_url ?>/mysteryiniquity" class="mysteryiniquity">Mystery Iniquity</a>
				</li>-->
				 <li>
				<a href="http://madburyclub.com/" title="Visit Madbury Club" target="_blank"> <img src="<?php bloginfo('template_url')?>/images/[ad] Madbury.jpg" height="500" width="227"></a>
				 </li>
				 <li>
				 <a href="http://www.cmonwealth.com" target="_blank"><img src="<?php bloginfo('template_url')?>/images/cmonad.jpg" height="500" width="227" alt="C'MON.com"></a>
				 </li>
				<!--You MAD!
				<li><a href="http://www.youtube.com/watch?v=1ykRq1V3ZcQ"><img src="<?php bloginfo('template_url')?>/images/youmad.gif" width="227"></a>
				</li>-->
				
			</ul>
		</div>
	</ul>
	<div class="archives">
	<h3>Archives</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
		</nav>
	