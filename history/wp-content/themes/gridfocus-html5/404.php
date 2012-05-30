<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
get_header();
?>
<div id="filler" class="fix">
	<div id="mainColumn" class="fix"><a name="main"></a>
		<article class="post">
			<header>
				<div class="postMeta fix">
					<p class="container">
						&nbsp;
					</p>
				</div>
				<h2>404</h2>
			</header>
			<section class="entry">
			<a href="http://www.youtube.com/watch?v=1ykRq1V3ZcQ"><img src="<?php bloginfo('template_url')?>/images/youmad.gif" width="227"></a>
				<p>Oops. Something obviously isn't right if you're reading this.</p>
			</section>
		</article>
	</div>
	<?php include (TEMPLATEPATH . '/second.column.index.php'); ?>
	<?php include (TEMPLATEPATH . '/third.column.shared.php'); ?>
</div>
<?php get_footer(); ?>